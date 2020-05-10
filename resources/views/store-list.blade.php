@include('frontend/include/header')
<section class="mobile_here_no">
<div class="page home page-template-default">
<style type="text/css">
    .more{text-align: center; margin-top: 12px;}
    .karan{ color: #7d7d7d; }
    .fvd{border-radius: 24px!important; width: 85%; box-shadow: inset 0 0 2px 2px #867b7b;}
    .pdtp{ padding-top: 15px; text-align: right; }
    .pdtp1{ padding-top: 15px; }
    .cbc{font-weight: bold;}
</style>

<div class="container">
    
<div class="row more">
    <h2 type="button" data-toggle="dropdown">Find your favorite store at moretolike.com</h2>
</div>
<div class="row more">
     <div class="col-sm-2 pdtp1">
       <h6 class="karan">Store Directory</h6>  
     </div>
      <div class="col-sm-10">
        
             <input id="store-filter" type="text" class="form-control fvd " name="msg" placeholder="Search Stores..." onkeyup="storeFilter()">
            
           
      </div>


</div>

<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row" id="store-list">
       
        @foreach($store_list as $store_list1) 
        <div class="col-md-3 flr" style="margin-bottom: 20px;">
        <a class="hidden">{{ $store_list1->store_name}}</a>
            <div class="full-wrap">
                
                    @if($store_list1->store_banner)

                    <!--   <div class="back-img">   <img src="../../public/uploads/{{ $store_list1->store_banner }} " alt="Store Banner" /></div> -->

                    <div class="back-img"><img src="{{asset('uploads')}}/{{ $store_list1->store_banner}}" alt="Store Banner"  style="height: 100px; width: 100%;"/></div>

                    @else

                        <div class="back-img">  <img src=" {{getenv('URL')}}stor_default_banner.png" alt="Store Banner" /></div>
                    @endif


                    @if($store_list1->store_logo)
                        <div class="prof-img"> <img src="{{asset('uploads')}}/{{$store_list1->store_logo }}" alt="Store Banner" style="height: 100px; width: 100px;"/></div>
                    @else
                        <div class="prof-img">  <img src=" {{getenv('URL')}}default_store_logo.png"  alt="Store Logo" style="height: 100px; width: 100px;" /></div>
                    @endif


                
                <div class="cont-box">
                    <h5>{{ $store_list1->store_name}} <br>
                        @if($store_list1->store_url)
                        <span style="font-size: 15px;">{{ $store_list1->store_url}}</span>
                        @else
                        <span style="font-size: 15px;"></span>
                        @endif
                    </h5>
                    <!--<p>{{ $store_list1->contact_no}}</p>-->
                </div>
                <div class="img-box ">
                    @if(count($store_list1->product) == 3)
                        @foreach($store_list1->product as $key=>$val)
                            <div class="col-md-4 col-sm-4 store-shop"><img src="{{getenv('URL')}}{{$val->product_img}}" alt="" /></div>
                        @endforeach 
                    @elseif(count($store_list1->product) == 2)
                        @foreach($store_list1->product as $key=>$val)
                            <div class="col-md-4 col-sm-4 store-shop"><img src="{{getenv('URL')}}{{$val->product_img}}" alt="" /></div>
                        @endforeach
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt="" /></div>
                    @elseif(count($store_list1->product) == 1)
                        @foreach($store_list1->product as $key=>$val)
                            <div class="col-md-4 col-sm-4 store-shop"><img src="{{getenv('URL')}}{{$val->product_img}}" alt="" /></div>
                        @endforeach
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt="" /></div><div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt="" /></div>
                    @else
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt="" /></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt="" /></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt="" /></div>
                    @endif
                       
                </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="{{url('/store-details')}}/{{$store_list1->id}}" class="button1">Visit Store</a> </div>
            </div>
        </div>

        @endforeach

    </div>


</div>

<footer id="colophon" class="site-footer">  
<script type="text/javascript">
	function storeFilter(){
		var input, filter, ul, li, a, i;
	    input = document.getElementById("store-filter");
	    console.log('input');
	    console.log(input);
	    filter = input.value.toUpperCase();
	    ul = document.getElementById("store-list");
	    //li = ul.getElementsByTagName("div");
	    li = ul.getElementsByClassName("flr");
	    console.log('li');
	    console.log(li.length);
	    for (i = 0; i < li.length; i++) {
	        a = li[i].getElementsByTagName("a")[0];
	        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
	            li[i].style.display = "";
	        } else {
	            li[i].style.display = "none";
	        }
	    }
	}
</script>              
</footer>
</div>
</div>
</section>
@include('frontend/include/footer')