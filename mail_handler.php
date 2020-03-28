<?php
	if(isset($_POST['submit']))
		{
			// Collect data from HTML Form

			$child_name_last=$_POST['child_name_last'];
			$child_name_first=$_POST['child_name_first'];
			$age=$_POST['age'];
			$date_of_birth=$_POST['dob'];
			$grade=$_POST['grade'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$zipcode=$_POST['zipcode'];
			$parents_name_last=$_POST['parents_name_last'];
			$parents_name_first=$_POST['parents_name_first'];
			$home_phone=$_POST['home_phone'];
			$parents_cell=$_POST['parents_cell'];
			$parents_work=$_POST['parents_work'];
			$medical_condition=$_POST['medical_condition'];
			$emrgncy_name1=$_POST['emrgncy_name1'];
			$emrgncy_contact1=$_POST['emrgncy_contact1'];
			$emrgncy_name2=$_POST['emrgncy_name2'];
			$emrgncy_contact2=$_POST['emrgncy_contact2'];
			$T_Shirt=$_POST['vbc'];
			$volunteer=$_POST['volunteer'];
			$email=$_POST['email'];
		
			// Email Options

			$to='pastor@newgateintl.org';  // Admin email
			$subject='Form Submission';    
			$message="child_name_last:".$child_name_last."\n"."child_name_first:".$child_name_first."\n"."age:".$age."\n"."date_of_birth:". $date_of_birth."\n"."grade:".$grade."\n"."address:".$address."\n"."city:".$city."\n"."zipcode:".$zipcode."\n"."parents_name_last:".$parents_name_last."\n"."parents_name_first:".$parents_name_first."\n"."home_phone:".$home_phone."\n"."parents_cell:".$parents_cell."\n"."parents_work:".$parents_work."\n"."medical_condition:".$medical_condition."\n"."emrgncy_name1:".$emrgncy_name1."\n"."emergency_contact1:".$emrgncy_contact1."\n"."emrgncy_name2:".$emrgncy_name2."\n"."emergency_contact2:".$emrgncy_contact2."\n"."T_Shirt:".$T_Shirt."\n"."volunteer:".$volunteer."\n"."email:".$email."\n";
			$headers="From: ".$email;

			// Mail Function
			
			if(mail($to, $subject, $message, $headers)){
				echo "<h1>Successful</h1>";
			}
			else{
				echo "Something Went Wrong";
			}

		}
?>
