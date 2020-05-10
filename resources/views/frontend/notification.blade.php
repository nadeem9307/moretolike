
@include('frontend/include/header')
</div>
<hr>
      <div class="container content mrgtp">
         <!--my account -->
         <div class="container mrgin-botom">
            <div class="row">
               <ul class="top-link">
                  <li><a href="/">Home</a></li>
                  <li><i class="fa fa-angle-right"></i></li>
                  <li><a href="" class="top-link-btn">Notifications</a></li>
               </ul>
            </div>
            <div class="row mrgtp border-full">
               <div class="col-md-12">
	               @foreach($data as $row)
					<div class="alert alert-{{$row->status == 0 ? 'success' : 'default'}} alert-dismissible" id="notification_flip_{{$row->id}}">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  {{$row->title}} ..<a href="javascript:void(0)" class="morebold" onclick="seenNotification({{$row->id}})" data-toggle="modal" data-target="#notification_modal_{{$row->id}}">more</a>
					</div>
					<div id="notification_modal_{{$row->id}}" class="modal fade" role="dialog" >
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">{{$row->title}}</h4>
					      </div>
					      <div class="modal-body">
					        <p><?=$row->description?></p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>	            	     
	               @endforeach
               </div>
            </div>
            <!--content profile information-->
         </div>
         <!---my account-->  
      </div>
          @include('frontend/include/footer')