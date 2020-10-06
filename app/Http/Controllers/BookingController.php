<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Booking;
use DateTime;
use DatePeriod;
use DateInterval;

class BookingController extends Controller
{

	public function __construct()
    {
        $this->middleware('user');
    }
    public function book($id)
    {   
    	$lawyer = User::findOrFail($id);
    	return view('user.booking.booking')->with('lawyer',$lawyer);
    }

    public function calender()
    {
    	return view('user.booking.calender');
    }

    public function build_calendar($month, $year,$lawyer_id) { 
   	// include("includes/db.php");
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
			 $totalbookings = $this->checkSlots($date,$lawyer_id);
			 if($totalbookings==12){
				$calendar.="<td class='$today'><h4>$currentDay</h4> <a href='#' class='btn btn-danger btn-xs'>Bookings full</a>"; 
			 }
			
            else{ 
			 $availableslots = 12-$totalbookings;
			$calendar.="<td class='$today'><h4>$currentDay</h4> <a href='../booking/".$date."/".$lawyer_id."' class='btn btn-success btn-xs'>Book</a><br><small><i>$availableslots Slots left</i></small>";
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

	public function checkSlots($date,$lawyer_id){
		$lawyer_id=$lawyer_id;
		$stmt = Booking::where('date',$date)->where('lawyer_id',$lawyer_id)->get();
		$totalbookings = 0;
		if ($stmt) {
			$result=$stmt;

			if (count($result)>0) {
				# code...
				foreach ($result as $res) {
					# code...
					$totalbookings++;
				}
			}
		}
		return $totalbookings;
	 }  

	public function getdate(Request $request){
		$lawyer_id = $request->get('lawyer_id');
		$month = $request->get('month');
		$year=$request->get('year');
		$dateComponents = getdate();
		if ($month && $year) 
		{
			$month = $month; 			     
			$year = $year;
		} else {
			# code...
			$month = $dateComponents['mon']; 			     
			$year = $dateComponents['year'];
		}

		return $this->build_calendar($month,$year,$lawyer_id);
	}

	//////////////book/////////////////////////////////////

	    // include("includes/db.php");
	public function booking($date,$lawyer_id)
	{
	    $booking = Booking::where('email_of_client',auth()->user()->email)->get();
		$lawyer_id=$lawyer_id;
		if ($date) {
			$date = $date;
			$stmt = Booking::where('date',$date)->where('lawyer_id',$lawyer_id)->get();
			$bookings = array();
			if ($stmt) {
				$result = $stmt;
				if (count($result)>0) {
					foreach ($result as $res) {
					  $bookings[]=$res['timeslot'];
					}
				}
			}
			return view('user.booking.book',['date' => $date,'bookings'=>$bookings,'booking' => $booking]);
		}	
	}

	public function submitbook(Request $request, $date)
	{
	    $booking = Booking::where('email_of_client',auth()->user()->email)->get();
	    $BOOK = Booking::where('email_of_client',auth()->user()->email)->first();
    	$date = $date;
		$timeslot = $request->timeslot;
		$stmt = Booking::where('date',$date)->where('timeslot',$timeslot)->get();
		if ($stmt) {
			$result = $stmt;
			if (count($result)>0) {
				$msg = "<div class='alert alert-danger'>Already Taken</div>";
				$bookings[] = " ";
			}
			else if($BOOK != null)
			{   
				if($BOOK->created_at->toDateString() == now()->toDateString())
				{
				  $msg = "<div class='alert alert-danger'>Sorry You Can Only Book one Lawyer a Day</div>";
				  $bookings[] = " ";
			    }
			}
			else
			{
				
				$stmt = new Booking;
				$stmt->name_of_client = $request->fname;
				$stmt->user_id = $request->user_id;
				$stmt->email_of_client = $request->email;
				$stmt->phone_of_client = $request->phone;
				$stmt->photo_of_client = $request->client_photo;
				$stmt->phone_of_lawyer = $request->lawyer_phone;
				$stmt->email_of_lawyer = $request->lawyer_email;
				$stmt->photo_of_lawyer = $request->lawyer_photo;
				$stmt->name_of_lawyer = $request->lname;
				$stmt->lawyer_id = $request->lawyer_id;
				$stmt->type_of_lawyer = $request->type;
				$stmt->call_credits = $request->credits;
				$stmt->status = $request->status;
				$stmt->date = $date;
				$stmt->timeslot = $request->timeslot;
				$stmt->save();

				$msg = "<div class='alert alert-success'>You Booked a Lawyer Successfully</div>";
    			$bookings[] = $timeslot;
			}
		}
		return view('user.booking.book',['date' => $date,'bookings'=>$bookings, 'msg' => $msg, 'booking' => $booking]);

	}
      
    public function destroy($id,$date)
      {
         $book = Booking::find($id);
          if($book != null){
          	$book->delete();
          }
		return redirect()->back();      
    }	 
}
