<?php
 

 if(isset($_POST['submit'])) {
	 include_once 'config.php';
  
  // clean user inputs to prevent sql injections
  $fname = trim($_POST['fname']);
  $mname = trim($_POST['mname']);
  $lname = trim($_POST['lname']);
  $gender = trim($_POST['gender']);
  $dob = trim($_POST['dob']);
  $email = trim($_POST['email']);
  $tenth_per = trim($_POST['tenth_per']);
  $tenth_specialization = trim($_POST['tenth_specialization']);
  $tenth_board = trim($_POST['tenth_board']);
  $tenth_year = trim($_POST['tenth_year']);
  $twelth_per = trim($_POST['twelth_per']);
  $twelth_specialization = trim($_POST['twelth_specialization']);
  $twelth_board = trim($_POST['twelth_board']);
  $twelth_year = trim($_POST['twelth_year']);
  $diploma_per = trim($_POST['diploma_per']);
  $diploma_specialization = trim($_POST['diploma_specialization']);
  $diploma_board = trim($_POST['diploma_board']);
  $diploma_year = trim($_POST['diploma_year']);
  $degree = trim($_POST['degree']);
  $degree_specialization = trim($_POST['degree_specialization']);
  $degree_university = trim($_POST['degree_university']);
  $degree_year = trim($_POST['degree_year']);
  $collegeName = trim($_POST['collegeName']);
  $mobile = trim($_POST['mobile']);
  $alt_mobile = trim($_POST['alt_mobile']);
  $address = trim($_POST['address']);
  $city = trim($_POST['city']);
  $remarks = trim($_POST['remarks']);
  
  
  //$date=date("Y-m-d"." "."h:i:s");
 //$date1=date("Ymdhis");
 //This is the directory where images will be saved


  /* CODE TO UPLOAD RESUME...
  if(isset($_FILES['resume'])){
      $errors= array();
      $file_name = $_FILES['resume']['name'];
      $file_size =$_FILES['resume']['size'];
      $file_tmp =$_FILES['resume']['tmp_name'];
      $file_type=$_FILES['resume']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
      
      $expensions= array("docx",".txt",".pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a docx or txt OR pdf file.";
      }
      
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"resume/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }*/

 //basic email validation
  $check="SELECT * FROM registration WHERE email='$email'";
		$rs = mysql_query($check);
		$data = mysql_fetch_array($rs);
		if($data > 0) {
					
			echo "Sorry You Can't Register, This Email Id AlReady is Registerd....!<br/>";
			header( "refresh:10; url=registration.php" );
		}

		else
		{
  

  
  // if there's no error, continue to signup

  
 $sql = "INSERT INTO registration (fname, mname, lname, gender, dob, email, 
			tenth_per, tenth_specialization, tenth_board, tenth_year, twelth_per, twelth_specialization, 
			twelth_board, twelth_year, diploma_per, diploma_specialization, diploma_board, diploma_year, 
			degree, degree_specialization, degree_university, degree_year, collegeName, mobile, alt_mobile, address, city, remarks) VALUES
	('$fname', '$mname', '$lname','$gender','$dob','$email','$tenth_per','$tenth_specialization','$tenth_board',
	'$tenth_year','$twelth_per','$twelth_specialization','$twelth_board','$twelth_year','$diploma_per', 
	'$diploma_specialization','$diploma_board','$diploma_year','$degree',
	'$degree_specialization','$degree_university','$degree_year','$collegeName','$mobile','$alt_mobile',
	'$address','$city','$remarks')" or die ( mysql_error());
    
  
	if(mysql_query($sql)){
		echo"<center><h2>Thank you for your registration, we will give you back very soon...!</h2></center>";
		header( "refresh:10; url=index.html" );
	}
}
 }

   
 
 
?>