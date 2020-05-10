
@include('frontend/include/header')
   </div>
     <hr>
     <style type="text/css">
       input[type="search"] {
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 34px;
        margin-right: 10px;
}
select {
    border: 1px solid #ccc;
    padding: 5px;
    margin-left: 10px;
    margin-right: 10px;
    border-radius: 6px;
}
h3.panel-title.ordersummaru {
    margin-bottom: 10px;
}
label {
    padding-left: 10px;
}
strong {
    font-weight: bold;
    color: #1f1f1f;
}
     </style>
<div class="container content mrgtp">
  <div class="row">
    <ul class="top-link">
      <li><a href="">Home</a></li>
      <li><i class="fa fa-angle-right"></i></li>
       <li><a href="" class="top-link-btn">Oder</a></li>
       <li><i class="fa fa-angle-right"></i></li>
        <li><a href="">Order Summary</a></li>
      
      
    </ul>
  </div>
  
  
  <!--Order Summary-->
   <div class="row summary-cl">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bgcl">
                    <h3 class="panel-title ordersummaru"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive summary-cl">
                        <table class="table table-condensed" id="myTable">
                            <thead>
                                <tr>
                                    <td><strong>Order id:</strong></td>
                                    <td class="text-center"><strong>Item</strong></td>
                                    <td class="text-center"><strong>Name</strong></td>
                                    <td class="text-center"><strong>Size</strong></td>
                                    <td class="text-right"><strong>Delivery</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                @foreach($data['order_summary'] as $order_list)
                                <?php $attributes = json_decode($order_list->product_attributes); ?>
                                <tr>
                                    <td><b> <a href="/beta-order-details/{{ $order_list->order_no}}" class="lineun">{{ $order_list->order_no}}</a></b></td>
                                    <td class="text-center"><a href="product-details/{{$order_list->slug}}"><img src="{{getenv('URL')}}{{$attributes->img}}" width="50" alt="" /></a></td>
                                    <td class="text-center">{{$order_list->product_name}}</td>
                                    <td class="text-center">{{$order_list->quantity}}X{{$order_list->product_price}}</td>
                                    <?php  $deliver_date =  date('D d F, Y', strtotime($order_list->deliver_date)) ;?>
                                    <td class="text-right">Delivered on {{$deliver_date}} </td>
                                </tr>
                                @endforeach

                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
      @include('frontend/include/footer')










