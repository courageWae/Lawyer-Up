<?php
function build_calendar($month, $year) { 
   //include("includes/db.php");
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	 
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
	 
     $numberDays = date('t',$firstDayOfMonth);
	
     $dateComponents = getdate($firstDayOfMonth);

     $monthName = $dateComponents['month'];


     $dayOfWeek = $dateComponents['wday'];

     // Create the table headers
     
    $datetoday = date('Y-m-d');
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.= "<button class='changemonth btn btn-xs btn-primary' data-month='".date('m', mktime(0, 0, 0, $month-1, 1, $year))."'data-year='".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</button> ";
    $calendar.= "<button class='changemonth btn btn-xs btn-primary' data-month='".date('m')."'data-year='".date('Y')."'>Current Month</button> ";
    $calendar.= "<button class='changemonth btn btn-xs btn-primary' data-month='".date('m', mktime(0, 0, 0, $month+1, 1, $year))."'data-year='".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</button></center><br>";
    
    
        
      $calendar .= "<tr>";

     // Create the calendar headers

     foreach($daysOfWeek as $day) {
          $calendar .= "<th  class='header'>$day</th>";
     } 

     // Create the rest of the calendar


     $currentDay = 1;

     $calendar .= "</tr><tr>";



     if ($dayOfWeek > 0) { 
         for($k=0;$k<$dayOfWeek;$k++){
                $calendar .= "<td  class='empty'></td>"; 

         }
     }
    
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {



          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
          
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
          if($dayname=='saturday' || $dayname=='sunday'){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Holiday</button>";
         } else if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
         }
		 else{
			 $totalbookings = checkSlots($mysqli, $date);
			 if($totalbookings==12){
				$calendar.="<td class='$today'><h4>$currentDay</h4> <a href='#' class='btn btn-danger btn-xs'>Bookings full</a>"; 
			 }
			
            else{ 
			 $availableslots = 12-$totalbookings;
			$calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a><br><small><i>$availableslots Slots left</i></small>";
         }
		 }
            
            
           
            
          $calendar .="</td>";
 
          $currentDay++;
          $dayOfWeek++;

     }
     
     



     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>"; 

         }

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table>";

     echo $calendar;

}
 function checkSlots($mysqli, $date){

    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $totalbookings = 0;
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $totalbookings++;
            }
            
            $stmt->close();
        }
    }
	return $totalbookings;
 }  
$dateComponents = getdate();
	 if(isset($_POST['month']) && isset($_POST['year'])){
		 $month = $_POST['month']; 			     
		 $year = $_POST['year'];
	 }else{
		 $month = $dateComponents['mon']; 			     
		 $year = $dateComponents['year'];
	 }
	echo build_calendar($month,$year);
?>