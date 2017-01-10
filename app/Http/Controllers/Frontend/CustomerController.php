<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\OrderDetail;
use App\Models\Customer;
use App\Models\CustomerNotification;
use Helper, File, Session, Auth;
use Mail;

class CustomerController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->all();

        $customer_id = Session::get('userId');
        if(isset($request->vang_lai) && $request->vang_lai == 1){
            Session::set('vanglai', $data);
        }else{
            $customer = Customer::find($customer_id)->update($data);
        }

        if(Session::has('new-register')) {
          Session::forget('new-register');
        }

        if(Session::has('fb_name')) {
          Session::forget('fb_name');
        }

        if(Session::has('fb_email')) {
          Session::forget('fb_email');
        }

        if(Session::has('fb_id')) {
          Session::forget('fb_id');
        }

        return 'sucess';
    }

    public function register(Request $request)
    {
        $data = $request->all();

        $email = $request->email;

        $customer = Customer::where('email', $email)->first();
        $full_name = $request->full_name;
        $password = $request->password;

        if(!is_null($customer)) {
          Session::flash('validate', 'Email đã tồn tại');
          return 0;
        }


        $data['password'] = bcrypt($data['password']);
        $data['status'] = 1;
        $customer = Customer::create($data);

        //set Session user for login here
        Session::put('login', true);
        Session::put('userId', $customer->id);
        Session::put('username', $customer->full_name);
        Session::put('new-register', true);
        Session::forget('vanglai');
        Session::forget('is_vanglai');
        return "1";
    }

    public function registerAjax(Request $request)
    {
        $data = $request->all();

        $email = $request->email;
        $customer = Customer::where('email', $email)->first();

        if(!is_null($customer)) {
          return response()->json(['error' => 'email']);
        }


        $data['password'] = bcrypt($data['password']);
        $data['status'] = 1;
        $customer = Customer::create($data);

        //set Session user for login here
        Session::put('login', true);
        Session::put('userId', $customer->id);
        Session::put('new-register', true);
        Session::put('username', $customer->full_name);
        Session::forget('vanglai');
        Session::forget('is_vanglai');
        return response()->json(['error' => 0]);
    }

    public function notification(){
        $notiSale = $notiOrder = [];
        $tmpArr = CustomerNotification::where(['customer_id' => Session::get('userId')])->get();
        if($tmpArr){
            foreach($tmpArr as $tp){
                if($tp->type == 1){
                    $notiSale[] = $tp->toArray();
                }else{
                    $notiOrder[] = $tp->toArray();
                }                
            }
        }
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Thông báo của tôi";     

        return view('frontend.account.notification', compact('notiSale', 'notiOrder', 'seo'));
    }
    public function accountInfo(){
       
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Thông tin tài khoản";     

        return view('frontend.account.update-info', compact('seo'));
    }
    public function isEmailExist(Request $request)
    {
       $email = $request->email;
       $customer = Customer::where('email', $email)->first();

       return is_null($customer) ? 0 : 1;
    }
}

