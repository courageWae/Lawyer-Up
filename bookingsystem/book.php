<?php
    include("includes/db.php");
if(isset($_GET['date'])){
    $date = $_GET['date'];
	$stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$timeslot = $_POST['timeslot'];
		$stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
        $msg = "<div class='alert alert-danger'>Already Taken</div>";
        }else{
	$stmt = $mysqli->prepare("INSERT INTO bookings (fname, lname, email, phone, date, timeslot) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('ssssss', $firstname,$lastname, $email, $phone, $date,$timeslot);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $bookings[] = $timeslot;
	$stmt->close();
    $mysqli->close();
		}
}
  
}
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

  <body>
    <div class="container">
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
				<?php if(in_array($ts, $bookings)){?>
			
				<?php echo $msg = "<div class='alert alert-danger'>Slot Taken</div>";?>
				<?php }else{?>
				<button class ="btn btn-success book" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?></button>
				<?php }?>
				</div>
				</div>
			<?php } ?>
        </div><hr><p>
		  <center><button type="button" class="btn btn-danger" onclick="window.location.href='index.php'" >Cancel Booking</button><center>
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
	   <form action="" method="post">
         <div class="form-group">
            <label for="">Time Slot</label>
			  <input type="text" required readonly name="timeslot" id="timeslot" class="form-control" >
		</div>
		 <div class="form-group">
            <label for="">First Name</label>
			  <input type="text" required name="fname" id="fname" class="form-control" >
		</div>
		<div class="form-group">
            <label for="">Last Name</label>
			  <input type="text" required name="lname" id="lname" class="form-control" >
		</div>
		<div class="form-group">
            <label for="">Email</label>
			  <input type="email" required name="email" id="email" class="form-control" >
		</div>
		<div class="form-group">
            <label for="">Phone</label>
			  <input type="text" required name="phone" id="phone" class="form-control" >
		</div>
		<div class="form-group">
				<button class ="btn btn-primary" type="submit" name="submit" >Send</button>
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
 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
	<script>
	$(".book").click(function(){
		var timeslot=$(this).attr('data-timeslot');
		$("#slot").html(timeslot);
		$("#timeslot").val(timeslot);
		$("#myModal").modal("show");
		
	})
	</script>
	
    </body>
</html>
