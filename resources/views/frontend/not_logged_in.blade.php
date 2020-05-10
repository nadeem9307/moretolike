@include('frontend/include/header')
</div>
<hr>
      <div class="container content mrgtp">
         <!--my account -->
         <div class="container mrgin-botom" onclick="return window.location='/beta'">
            <img title="You are not logged in right now...." src="{{asset('assets/images/not_logged_in.jpg')}}">
            <!--content profile information-->
         </div>
         <!---my account-->  
      </div>
@include('frontend/include/footer')