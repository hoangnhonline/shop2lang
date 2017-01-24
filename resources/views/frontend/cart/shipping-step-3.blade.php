@extends('frontend.layout')
@section('content')
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <div class="page-content">
          <!-- row -->
          <div class="shipping-address-page">

                <div class="shipping-header">
                  <div class="row bs-wizard">
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 bs-wizard-step complete">
                      <div class="text-center bs-wizard-stepnum"> <span>{{ trans('text.dang-nhap') }}</span> </div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="bs-wizard-dot">1</span> </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 bs-wizard-step complete">
                      <div class="text-center bs-wizard-stepnum"> <span class="hidden-xs">{{ trans('text.dia-chi-giao-hang') }}</span> <span class="visible-xs-inline-block">{{ trans('text.dia-chi') }}</span> </div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="bs-wizard-dot">2</span> </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 bs-wizard-step active">
                      <div class="text-center bs-wizard-stepnum"> <span class="hidden-xs">{{ trans('text.thanh-toan-va-dat-mua') }}</span> <span class="visible-xs-inline-block">{{ trans('text.thanh-toan') }}</span> </div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="bs-wizard-dot">3</span> </div>
                  </div>
                </div>

                <div class="row visible-lg-block">
                  <div class="col-lg-12">
                    <h3 style="font-size:15px">3. {{ trans('text.thanh-toan-va-dat-mua') }}</h3>
                  </div>
                </div>

                <div class="row row-style-2">
                  <div class="col-md-8 has-padding">
                    <div class="panel panel-default payment">
                      <div class="panel-body">
                        <form class="form-horizontal hide-block" role="form" id="form-payment" action="{{ route('dat-hang') }}" method="post">
                          {{ csrf_field() }}                        
                          <div class="form-group row">
                            <h4 class="col-lg-12 is-mt">{{ trans('text.chon-hinh-thuc-thanh-toan') }}: </h4>
                          </div>
                          <ul class="wc_payment_methods payment_methods methods">
                                   
                          
                          <li class="wc_payment_method payment_method_bacs">
                             <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="2"  checked="checked">
                             <label for="payment_method_bacs">
                             Chuyển khoản ngân hàng     </label>
                             <div class="payment_box payment_method_bacs" >
                                <div class="box-info-payment">
                                   <div class="info-payment-top">
                                      Quý khách có thể lựa chọn chuyển khoản tới 1 trong những ngân hàng sau:
                                   </div>
                                   <div class="info-payment-center">
                                      <ul>
                                         <li class="info-payment-item">
                                            <div class="payment-thumb">
                                               <img src="http://vshop24.com/images/acb_logo.png">
                                            </div>
                                            <div class="payment-detail">
                                               <div class="payment-bankname">Ngân Hàng Thương Mại Cổ Phần Á Châu - Chi Nhánh Thủ Đức</div>
                                               <div class="payment-detail-row">                                                 
                                                  <div class="detail-row row-name"><b>Chủ tài khoản:</b> <span class="row-txt">Chi Nhánh Thủ Đức - Công ty cổ phần IPL</span></div>
                                                  <div class="detail-row row-number"><b>Số TK:</b> <span class="row-txt">82901409</span></div>
                                               </div>
                                            </div>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </li>
                            <li class="wc_payment_method payment_method_cod">
                             <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="1" data-cod="{{ $phi_cod }}">
                             <label for="payment_method_cod">
                             Giao hàng và thu tiền tại nhà     </label>
                             <div class="payment_box payment_method_cod" style="display: block;">
                                <p>Quý khách có thể trả tiền mặt khi giao hàng</p>
                             </div>
                             <!--<p style="color:red;padding-left:20px;margin-top:-5px; margin-bottom:10px">Phí Thu Hộ: <strong>{{ number_format($phi_cod) }}$</strong></p>-->
                          </li>
                                                    
                          </ul>
                          
                          <div id="bookcare-option"> </div>
                          <div class="form-group row end">
                            <div class="col-lg-6">
                              <button type="button" id="btn-placeorder" class="btn btn-block btn-default btn-checkout">{{ trans('text.dat-mua') }}</button>
                              <button type="button" class="btn btn-default" id="btnLoading" style="display:none;margin-left:15px"><i class="fa fa-spin fa-spinner"></i></button>
                              <p class="note">Bạn vui lòng kiểm tra lại đơn hàng trước khi Đặt Mua</p>
                            </div>
                          </div>
                          <input type="hidden" name="phi_giao_hang" value="{{ $phi_giao_hang }}">
                          <input type="hidden" name="phi_cod" id="phi_cod" value="0">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-default cart">
                      <div class="panel-body">
                        <div class="order"> <span class="title"> {{ trans('text.dia-chi-giao-hang') }} </span> <a href="{{route('shipping-step-2')}}" class="btn btn-default btn-custom1">{{ trans('text.sua') }}</a> </div>
                        <div class="information">
                          
                          <h6>{{ $customer->full_name }}</h6>
                          <p class="end">
                            @if(isset( $customer->tinh->name ))
                              {{ $customer->tinh->name }},
                            @endif
                            @if(isset( $customer->huyen->name ))
                              {{ $customer->huyen->name }},
                            @endif
                            @if(isset( $customer->xa->name ))
                              {{ $customer->xa->name }},
                            @endif
                            {{ $customer->address }}<br>
                            ĐT: {{ $customer->phone }}<br>
                            </p>
                       
                        </div>
                      </div>
                    </div>
                    <div id="panel-cart">
                      <div class="panel panel-default cart">
                        <div class="panel-body">
                          <div class="order"> <span class="title">{{ trans('text.don-hang') }}</span> <span class="title"> ({{ array_sum($getlistProduct) }} {{ trans('text.san-pham') }})</span> <a href="{{route('gio-hang')}}" class="btn btn-default btn-custom1">{{ trans('text.sua') }}</a> </div>
                          <div class="product">
                          	<?php $total = 0; ?>
                          	@foreach($arrProductInfo as $product)
                            <div class="item">
                              <p class="title"><strong>{{ $getlistProduct[$product->id] }} x</strong><a href="#" target="_blank" class="link">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a></p>
                              <p class="price">
                              <?php $price = $product->is_sale ? $product->price_sale : $product->price; ?>

                                <span>{{ number_format( $getlistProduct[$product->id]*$price ) }}$ </span>
                                </p>
                            </div>                            
                        	@endforeach
                          </div>                                                    
                          <!--<p class="shipping" style="border-bottom: 1px solid #c9c9c9;padding-bottom:5px"> Phí vận chuyển: <span id="phi_giao">{{ number_format( $phi_giao_hang ) }}$</span> </p>-->
                          <input type="hidden" id="phiCod" value="{{ $phi_cod }}">
                          <p class="total"> {{ trans('text.tam-tinh') }}: <span id="total_amount" style="font-weight:bold">{{ number_format( $totalAmount) }}$ </span> </p>
                          <!--<p class="shipping" id="p_phi_cod" style="display:none"> Phí thu hộ: <span >{{ number_format( $phi_cod ) }}$</span> </p>-->
                          
                          <p class="total2" id="have_cod" id="p_phi_cod" style="display:none"> {{ trans('text.thanh-tien') }}: <span id="total_amount">{{ number_format( $totalAmount + $phi_cod) }}$ </span> </p>
                          <p class="total2" id="no_cod" > {{ trans('text.thanh-tien') }}: <span id="total_amount">{{ number_format( $totalAmount ) }}$ </span> </p>

                          <p class="text-right"> <i>({{ trans('text.da-bao-gom-vat') }})</i> </p>
                        </div>
                      </div>
                      @if( $phi_giao_hang == 0)
                      <div class="popover bottom tikixu">
                        <div class="arrow"></div>
                        <div class="popover-content">
                          <p class="ship">Đơn hàng bạn sẽ được miễn phí vận chuyển.</p>
                        </div>
                      </div>
                      @endif
                    </div>

                  </div>
                </div>

           </div><!-- /.shipping-address-page -->

        </div><!-- /.page-content -->
    </div>
</div>
@endsection
@section('javascript')
   <script type="text/javascript">
    $(document).ready(function() {
      $('.btn-checkout').click(function(){
        $(this).attr('disabled', 'disabled').html('<i class="fa fa-spin fa-spinner"></i> Đang xử lý...');        
        var payment_method = $('input[name=payment_method]:checked').val();
        $.ajax({
          url: "{{route('dat-hang')}}",
          method: "POST",
          data : {
            payment_method : payment_method,
            phi_giao_hang : '{{ $phi_giao_hang }}',
            phi_cod : $('#phi_cod').val()
          },
          success : function(data){            
            location.href = "{{ route('thanh-cong') }}";
          }
        });
      });
      $('input[name=payment_method]').on('ifChecked', function(event){
        var obj = $(this);
        if($(this).val() == 2){
          $('#have_cod, #p_phi_cod').hide();
          $('#no_cod').show();
          $('#phi_cod').val(0);
        }else{
          $('#have_cod, #p_phi_cod').show();
          $('#no_cod').hide();
          $('#phi_cod').val(obj.data('cod'));
        }
      });
    })
  </script>
@endsection