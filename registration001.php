<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="shortcut icon" href="logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dcalendar.picker.css" rel="stylesheet">
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/dcalendar.picker.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	$(function() {
		//calendar call function
		$('.datepicker').dcalendar();
		$('.datepicker').dcalendarpicker();

		    var max_fields = 10; //maximum input boxes allowed
		    var x = 1; //initlal text box count
		
		$('#add').click(function () {		   
			if(x < max_fields){ //max input box allowed
			    x++; //text box increment
			    $("#addblock").before('<div class="col-md-12 col-sm-12" id="deceased">	<a href="#" class="remove_field" title="Remove">X</a>	<div class="form-group col-md-3 col-sm-3">            <label for="name">Name*</label>            <input type="text" class="form-control input-sm" id="name" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="gender">Gender*</label>            <input type="text" class="form-control input-sm" id="gender" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="age">Age*</label>            <input type="text" class="form-control input-sm" id="age" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOB">Date of Birth or Exact Birth Year*</label>            <input type="text" class="form-control input-sm datepicker" id="DOB'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOD">Date of Death or Exact Death Year*</label>             <input type="text" class="form-control input-sm datepicker" id="DOD'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="mother">Deceased Person\'s Mother Name*</label>            <input type="text" class="form-control input-sm" id="mother" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="father">Deceased Person\'s Father Name*</label>            <input type="text" class="form-control input-sm" id="father" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">	    <label for="photo">Upload Photo*</label>	    <input type="file" id="photo">	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>	</div></div>');

				$('.datepicker').dcalendarpicker();
			}  else{
				alert("Only 10 Names Allowed");
			}  
		});
		$(document).on('click', '.remove_field', function(e){
		        e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});

		
	});
	</script>
  </head>
  <body>
 
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h1 class="panel-title">Registration Form</h1>
	</div>
<div class="panel-body">
    <form action="submit.php" method="post" enctype="multipart/form-data">
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-4 col-sm-4">
            <label for="name">First Name <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" name="fname" id="name" placeholder="Enter First Name" required>
        </div>
		<div class="form-group col-md-4 col-sm-4">
            <label for="name">Middle Name	</label>
            <input type="text" class="form-control input-sm" name="mname" id="name" placeholder="Enter Middle Name" >
        </div>
		<div class="form-group col-md-4 col-sm-4">
            <label for="name">Last Name	<span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" name="lname" id="name" placeholder="Enter Last Name" required>
        </div>
		
			<div class="form-group col-md-4 col-sm-4">
			<div class="col-md-12 col-sm-12">
            <label for="name">Gender <span style="color:red;">*</span></label> <br>          
				<input type="radio" name="gender" id="Training-0" value="male" checked="checked" required>
				Male				
				<input type="radio" name="gender" id="Training-1" value="female">Female </div>
        </div>
		<div class="form-group col-md-4 col-sm-4">
            <label for="mobile">Date of Birth <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm datepicker" name="dob" id="DOB" placeholder="" required>
        </div>
			<div class="form-group col-md-4 col-sm-4">
            <label for="name">Email <span style="color:red;">*</span></label>
            <input type="email" name="email" class="form-control input-sm" id="email" placeholder="Enter Email Address" required>
        </div>
			


			<div class="col-md-12 col-sm-12" id="deceased">
	<div class="form-group col-md-3 col-sm-3">
            <label for="name">10<sup>th</sup> Percentage (%) <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" name="tenth_per" id="name" placeholder="%" required>
        </div>
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Specialization <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" name="tenth_specialization"  placeholder="Enter Specialization" required>
        </div>
		
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Board of Exam <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" name="tenth_board" placeholder=" Enter Board Name" required>
        </div>
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Year of Passing <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm datepicker" name="tenth_year" id="DOB" placeholder="" required>
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="gender">12<sup>th</sup> Percentage (%) </label>
            <input type="text" class="form-control input-sm" name="twelth_per" placeholder="%" >
        </div>
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Specialization </label>
            <input type="text" class="form-control input-sm" name="twelth_specialization" placeholder="Enter Specialization">
        </div>
	
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Board of Exam </label>
            <input type="text" class="form-control input-sm" name="twelth_board" placeholder="Enter Board Name" >
        </div>
			<div class="form-group col-md-3 col-sm-3">
            <label for="name">Year of Passing </label>
            <input type="text" class="form-control input-sm datepicker" name="twelth_year" id="DOB" placeholder="" >
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="age">Diploma Percentage (%) </label>
            <input type="text" class="form-control input-sm" name="diploma_per" id="age" placeholder="%">
        </div>
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Specialization </label>
            <input type="text" class="form-control input-sm" name="diploma_specialization" placeholder="Enter Specialization" >
        </div>
		

		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Board/University </label>
            <input type="text" class="form-control input-sm" id="name" name="diploma_board" placeholder="Enter Board/University Name" >
        </div>
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Year of Passing </label>
            <input type="text" class="form-control input-sm datepicker" name="diploma_year"  id="DOB" placeholder="" >
        </div>
	
		 <div class="form-group col-md-3 col-sm-3">
            <label for="degree">Degree Percentage <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" id="email" name="degree" placeholder="%" required>
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Degree Name/ Specialization <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" id="email" name="degree_specialization" placeholder="Enter Degree and Specialization" required >
        </div>
		
		<div class="form-group col-md-3 col-sm-3">
            <label for="name">Board/ University <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm" name="degree_university" id="name" placeholder="Enter Board/ University Nmae" required>
        </div>
		<div class="form-group col-md-3 col-sm-3">
            <label for="mobile">Year of Passing <span style="color:red;">*</span></label>
            <input type="text" class="form-control input-sm datepicker" name="degree_year" id="DOB" placeholder="" required >
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="mobile">College Name <span style="color:red;">*</span></label>
<input type="text" class="form-control input-sm " name="collegeName" id="DOB" placeholder="Enter College Name">

            <!--<select name='collegeName' class='form-control input-sm' tabindex='14' id="getFname" onchange="admSelectCheck(this);" required >
	<option>Please Select College</option>
	<option value='Manoharbhai Patel Institute of Engineering &amp; Technology, Gondia' >Manoharbhai Patel Institute of Engineering &amp; Technology, Gondia</option>
	<option value='Jhulelal Institute of Technology, Nagpur' >Jhulelal Institute of Technology, Nagpur</option><option value='Anjuman College of Engineering' >Anjuman College of Engineering</option>
	<option value='SB Jain Institute of Technology, Maagement and Research, Nagpur' >SB Jain Institute of Technology, Maagement and Research, Nagpur</option>
	<option value='Bapurao Deshmukh College of Engg, Wardha' >Bapurao Deshmukh College of Engg, Wardha</option>
	<option value='KDKCOE' >KDKCOE</option>
	<option value='KDK, Womens' >KDK, Womens</option>
	<option value='Umrer College of Engg,Umrer' >Umrer College of Engg,Umrer</option>
	<option value='J D College Of Engineering &amp; Management, Nagpur' >J D College Of Engineering &amp; Management, Nagpur</option>
	<option value='Gurunanak institute of technology' >Gurunanak institute of technology</option>
	<option value='KITS, Ramtek' >KITS, Ramtek</option>
	<option value='Govindrao Wanjari College of Engineering' >Govindrao Wanjari College of Engineering</option>
	<option value='St Vincent Palloti college of engg' >St Vincent Palloti college of engg</option>
	<option value='Nagpur institute of technology,Kalmeshwar Road' >Nagpur institute of technology,Kalmeshwar Road</option>
	<option value='Pandav College of Engineering' >Pandav College of Engineering</option>
	<option value='Madhukarrao Padav College of Engioneering' >Madhukarrao Padav College of Engioneering</option>
	<option value='Wainganga College of Engineering' >Wainganga College of Engineering</option>
	<option value='Tulsiram Gaekwad Patil college of engg' >Tulsiram Gaekwad Patil college of engg</option>
	<option value='Suryodaya College of Engineering' >Suryodaya College of Engineering</option>
	<option value='MIET Bhandara' >MIET Bhandara</option>
	<option value='Shri Shankarprasad Agnihotri College of Engineering. (SPACE)' >Shri Shankarprasad Agnihotri College of Engineering. (SPACE)</option>
	<option value='ITM College of Engineering' >ITM College of Engineering</option>
	<option value='Rajiv Gandhi College of Engineering, Chandrapur' >Rajiv Gandhi College of Engineering, Chandrapur</option>
	<option value='Ballarpur Institute of Technology, Ballarpur' >Ballarpur Institute of Technology, Ballarpur</option>
	<option value='Namdeorao Poraddiwar College of Engineering, Gadchiroli' >Namdeorao Poraddiwar College of Engineering, Gadchiroli</option>
	<option value='PR Pote College of Engineering, Amravati' >PR Pote College of Engineering, Amravati</option>
	<option value='Prof Ram Meghe College of Engineering' >Prof Ram Meghe College of Engineering</option>
	<option value='Babasaheb Naik College of Engineering, Pusad' >Babasaheb Naik College of Engineering, Pusad</option>
	<option value='Shegaon College of Engioneering' >Shegaon College of Engioneering</option>
	<option value='Mauli College of Engineering' >Mauli College of Engineering</option><option value='JDIET, Yavatmal' >JDIET, Yavatmal</option>
	<option value='Siddhivinayak Technical Campus, Khamgaon' >Siddhivinayak Technical Campus, Khamgaon</option>
	<option value='Sipna College of Engineering' >Sipna College of Engineering</option>
	<option value='Chhatrapati Shivaji Institute of Technology' >Chhatrapati Shivaji Institute of Technology</option>
	<option value='Rungta College of Engineering and Technology(R2)' >Rungta College of Engineering and Technology(R2)</option>
	<option value='Rungta College of Engineering and Technology(R3)' >Rungta College of Engineering and Technology(R3)</option>
	<option value='Raipur Institute of Technology' >Raipur Institute of Technology</option>
	<option value='MM College Of Technology' >MM College Of Technology</option>
	<option value='Chhattisgarh Engineering College' >Chhattisgarh Engineering College</option>
	<option value='Chhattishgarh Institute of Technology' >Chhattishgarh Institute of Technology</option>
	<option value='Other' id="admOption" >Other</option></select>--->
        </div>
		
		<!--<div class="form-group col-md-6 col-sm-6" id="admDivCheck" style="display:none" >
            <label for="name">Specify College Name	</label>
            <input type="text" class="form-control input-sm" id="name" name="collegeName" placeholder="Enter College Name" >
        </div>
		<script type="text/javascript">
		function admSelectCheck(nameSelect)
				{
					var val = nameSelect.options[nameSelect.selectedIndex].value;
					document.getElementById("admDivCheck").style.display = val == 'Other' ? "block" : 'none';
				}
		</script>--->
	
		</div>
			<div class="form-group col-md-6 col-sm-6">
            <label for="name">Mobile <span style="color:red;">*</span>	</label>
            <input type="text" name="mobile" class="form-control input-sm" id="name" placeholder="Enter Mobile Number" required>
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="name">Alternate Mobile	</label>
            <input type="text" name="alt_mobile" class="form-control input-sm" id="name" placeholder="Enter Alternate Mobile Number" >
        </div>
			<div class="form-group col-md-6 col-sm-6">
	      <label for="address">Address</label>
	      <textarea type="text" class="form-control input-sm" name="address" placeholder="Enter Address" id="address" rows="3" ></textarea>
	   </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="city">City <span style="color:red;">*</span></label>
            <input type="text" name="city" class="form-control input-sm" id="city" placeholder="Enter City Name" required>
        </div>
<div class="form-group col-md-6 col-sm-6">
            <label for="city">Remarks</label>
            <textarea type="text" name="remarks" class="form-control input-sm"  placeholder="Enter Remarks"></textarea>
        </div>
		
</div>



		<div class="col-md-12 col-sm-12">
			<div class="form-group col-md-3 col-sm-3 pull-left" >
					<input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
			</div>
		</div>
</form>
</div>

</div>

</body>
</html>