<?php

$duration = 35;
$cleanup = 5;
$start = "08:00";
$end = "16:00";

function timeslots($duration,$cleanup,$start,$end){
	$start = new DateTime($start);
	$end = new DateTime($end);
	$interval = new DateInterval("PT".$duration."M");
	$cleanupinterval = new  DateInterval("PT".$cleanup."M");
	$slots = array();
	for($intStart = $start; $intStart<$end;$intStart->add($interval)->add($cleanupinterval)){
		$endPeriod = clone $intStart;
		$endPeriod ->add($interval);
		if($endPeriod>$end){
			break;
		}
		$slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
	}
	return $slots;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>

  <body>
    <div class="container">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="navbar-header">
             <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo-2.png')}} " height ="40px" width="100px" alt/></a>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
               <li class="nav-item">
                 <a class="nav-link" href="{{ route('Legal_Support_Home') }}">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('Legal_Support_About') }}">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('Legal_Support_Lawyers') }}">Lawyers</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('book',['id'=>Session::get('lawyer_id')]) }}">Calendar</a>
               </li>
             </ul>
          </div>
        </nav>

        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="col-md-12">
		<?php echo isset($msg)?$msg:"";?>
		</div>
		<div class="row">
				<?php $timeslots = timeslots($duration,$cleanup,$start,$end); 
			foreach($timeslots as $ts){
				?>
				<div class ="col-md-2">
				<div class="form-group">
				<?php if(in_array($ts, $bookings ?? ' ')){?>
				<?php echo $msg = "<div class='alert alert-danger'>Slot Taken</div>";?>
				<?php }else{?>
				<button class ="btn btn-success book" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?></button>
				<?php }?>
				</div>
				</div>
			<?php } ?>
        </div><hr><p>
		  <center>
		  	  @foreach($booking as $booking)
		  	    @if($booking->email_of_client == auth()->user()->email)
		  	     <div>
		  	       <button class = "btn btn-primary" onclick="document.getElementById('but').style.display ='block' "> Cancel Booking</button>
		  	     </div><br>
		  	     <form method="POST" action="/delete/{{$booking->id}}/{{$date}}">
		  	     	{{ csrf_field() }}
		  	     	@method('delete')
		           <button style ="display:none;" class="btn btn-danger" type="submit" id="but">Are You Sure ?</button>
		         </form>
		        @endif  
		      @endforeach 
		  </center>
    </div>
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking:<span id="slot"></span></h4>
      </div>
      <div class="modal-body">
	  <div class="row">
	  <div class ="col-md-12">
	   <form action="{{ route('submitbook',$date) }}" method="post">
	  @csrf
         <div class="form-group">
            <label for="">Time Slot</label>
			  <input type="text" required readonly name="timeslot" id="timeslot" class="form-control" >
		</div>
		 <div class="form-group">
            <label for="">Full Name</label>
			  <input type="text"  name="fname" id="fname" class="form-control" value = "{{ Auth::user()->name }}" required readonly="">
		</div>
		
		<div class="form-group">
            <label for="">Email</label>
			  <input type="email"  name="email" id="email" class="form-control" value ="{{ Auth::user()->email }}" required readonly>
		</div>

		<div class="form-group">
            <label for="">Phone</label>
			<input type="text"  name="phone" id="phone" class="form-control" value = "{{ Auth::user()->phone }}" required readonly>
		</div>

		<div class="form-group">
            <label for="">Lawyer Name</label>
			<input type="text" name="lname" id="lname" class="form-control" value = "{{ Session::get('lawyer_name') }}" required readonly>
		</div>

		<div class="form-group">
            <label for="">Type of Lawyer</label>
			<input type="text" name="type" class="form-control" value = "{{ Session::get('lawyer_type') }}" required readonly>
		</div>

		<div class="form-group">
            <label for="">Call Credits</label>
			<input type="text" name="credits"  class="form-control" value = "30 minutes" 
			required readonly>
		</div>
        
	    <input type="hidden" name="status" id="lname" value = "Pending">
	    <input type="hidden" name="user_id"  value = "{{ Auth::user()->id }}">
	    <input type="hidden" name="lawyer_id"  value = "{{ Session::get('lawyer_id') }}">
	    <input type="hidden" name ="lawyer_phone" value="{{ Session::get('lawyer_phone') }}">
	    <input type="hidden" name ="lawyer_email" value = "{{Session::get('lawyer_email') }}">
	    <input type="hidden" name ="lawyer_photo" value = "{{Session::get('lawyer_photo') }}">
	    <input type="hidden" name ="client_photo" value = "{{ Auth::user()->photo }}">
        

		<div class="form-group">
		    <button class ="btn btn-primary" type="submit">Send</button>
		</div>

		</form>
       </div>
	  </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 
	<script>
	$(".book").click(function(){
		var timeslot=$(this).attr('data-timeslot');
		$("#slot").html(timeslot);
		$("#timeslot").val(timeslot);
		$("#myModal").modal("show");	
	})
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'Your Booking Will Be Deleted',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
    </body>

</html>
