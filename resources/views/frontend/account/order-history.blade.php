@extends('frontend.layout')
@include('frontend.partials.meta')

@section('content')
<div class="content-shop left-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                <div class="main-content-shop">                 
                    <h1 class="page-heading">
                        <span class="page-heading-title2">Danh sách đơn hàng của tôi</span>
                    </h1>
                               
                    <div class="dashboard-order have-margin">
                        <table class="table-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th style="text-align:center">
                                    <span class="hidden-xs hidden-sm hidden-md">Mã ĐH</span>
                                    <span class="hidden-lg">Code</span>
                                </th>
                                <th>Ngày mua</th>
                                <th>Sản phẩm</th>
                                <th style="text-align:right">Tổng tiền</th>
                                <th style="text-align:center">
                                    <span class="hidden-xs hidden-sm hidden-md">Trạng thái đơn hàng</span>
                                    <span class="hidden-lg">Trạng thái</span>
                                </th>
                                <!--                            <th></th>-->
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td style="text-align:center;"><a style="color:#ec1c24" href="{{ route('order-detail', $order->id)}}">{{ str_pad($order->id, 6, "0", STR_PAD_LEFT)}}</a></td>
                                    <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                                    <td>                                        
                                    @foreach($order->order_detail()->get() as $detail)
                                    
                                    <p>{{ Helper::getName($detail->sp_id, 'product') }}</p>
                                    @endforeach
                                    </td>
                                    <td style="text-align:right">{{ number_format($order->tong_tien) }}$</td>                                    
                                    <td style="text-align:center">
                                        <span class="order-status">
                                            {{ $status[$order->status] }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Main Content Shop -->
            </div>
            @include('frontend.account.sidebar')
            
        </div>
    </div>
</div>

<style type="text/css">    
    .dashboard-order.have-margin {
        margin-bottom: 20px;
    }   
    table.table-responsive thead tr th {
        display: table-cell;
        padding: 8px;
        background: #f8f8f8;
        font-weight: 500;    
    }
    table.table-responsive tbody tr td{
        font-size: 14px !important;
    }
</style>
<div class="clearfix"></div>
@endsection