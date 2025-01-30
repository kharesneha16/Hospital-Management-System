<main id="main" class="main">
<style>
      .pagetitle h1 {
    font-size: 24px;
    margin-bottom: 0;
    font-weight: 600;
    color: #012970;
      }
</style>

<body>
<div class="pagetitle">
        <h1>Patient's registration form</h1>
      </div>
<div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>

    <!-- Vertical Form -->
		<form action="<?php echo base_url().'reg/regs'; ?>" method="post" class="row g-3">
            <div class="row g-3">
                <div class="col-6">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" placeholder="enter your first name" id="fname">
                </div>
				<div class="col-6">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lname" placeholder="enter your last name" id="lname">
                </div>
	        </div>

			<div class="row g-3">
			    <div class="col-6">
                  <label for="DOB" class="form-label">Date Of Birth</label>
                  <input type="date" class="form-control" name=DOB id="DOB">
                </div>
                <div class= "col-6">
			    	<label for="age" class="col-sm-2 col-form-label">Age</label> 
					<input type ="number" class="form-control" name=age  placeholder="enter your age " min="1" max="100">
			    </div>
	        </div>
			 
			    <div class="row g-3">
                  <legend class="col-form-label col-sm-2 pt-0">Gender-</legend>
                  <div class="col-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="1" value="male" >
                      <label class="form-check-label" for id="1">
                        Male
                      </label>
                    </div>
	              </div>
				  <div class="col-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="2" value="female">
                      <label class="form-check-label" for id="2">
                        Female
                      </label>
                    </div>
	               </div>
				   <div class="col-2">
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gender" id="3" value="other" >
                      <label class="form-check-label" for id="3">
                        Other
                      </label>
                    </div>
                  </div>
	            </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name=email placeholder="enter your email" id="email">
                </div>
                <div class="col-12">
                  <label for="mobile_no" class="form-label">Mobile Number</label>
                  <input type="text" class="form-control"  name=mobile_no placeholder="enter your mobile number" id="mobile_no">
                </div>
				<div class="col-12">
                  <label for="State" class="form-label">State</label> 
		        <select id= state class="form-control" name=state>
		        	<option value="" >Select State</option>
					<option value="andhra pradesh">Andhra Pradesh</option>
		        	<option value="arunachal pradesh">Arunachal Pradesh</option>
					<option value="bihar">Bihar</option>
		        	<option value="chhattisgarh">Chhattisgarh</option>
					<option value="delhi">Delhi</option>
		        	<option value="goa">Goa</option>
		        	<option value="gujarat">Gujarat</option>
		        	<option value="haryana">Haryana</option>
		        	<option value="himachal pradesh">Himachal Pradesh</option>
					<option value="jharkhand">Jharkhand</option>
					<option value="karnataka">Karnataka</option>
		        	<option value="Kerala">Kerala</option>
		        	<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
                    <option value="manipur">Manipur</option>
					<option value="meghalaya">Meghalaya</option>
                    <option value="mizoram">Mizoram</option>
                    <option value="nagaland">Nagaland</option>
                    <option value="odisha">Odisha</option>
                    <option value="punjab">Punjab</option>
                    <option value="rajasthan">Rajasthan</option>
                    <option value="sikkim">Sikkim</option>
					<option value="tamil nadu">Tamil Nadu</option>
                    <option value="telangana">Telangana</option>
                    <option value="tripura">Tripura</option>
                    <option value="uttar pradesh"> Uttar Pradesh</option>
                    <option value="west bengal">West Bengal</option>
                </select>
                </div>

				<div class="col-12">
                  <label for="District" class="form-label">District</label> 
		        <select id= district class="form-control" name=district>
		        	<option value=""> Select district</option>
		        	<option value="katni">Katni</option>
		        	<option value="jabalpur">Jabalpur</option>
		        	<option value="satna">Satna</option>
		        	<option value="Narmadapuram">Narmadapuram</option>
		        	<option value="Betul">Betul</option>
		        	<option value="sagar">Sagar</option>
                </select>	
                </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
				  <textarea name= "address" class="form-control" placeholder="enter your address" rows= "2" id="inputAddress"></textarea>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
        </form><!-- Vertical Form -->

            </div>
	</div>
	</div>	
<br>
<br>
	<div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
<!-- Table with stripped rows -->
	<table class="table table-striped">
      <thead>
       <tr>
        <th scope="col">Sno</th>
        <th scope="col">Firstname</th>
		<th scope="col">Lastname</th>
		<th scope="col">Date of birth</th>
		<th scope="col">Age</th>
		<th scope="col">Gender</th>
		<th scope="col">Email</th>
		<th scope="col">Mobile no.</th>
		<th scope="col">State</th>
		<th scope="col">District</th>
		<th scope="col">Address</th>
		<th scope="col">Action</th>
		<th scope="col">Delete</th>
		<th appointment="col">appointment</th>
        </tr>
        </thead>
	  <tbody>
	<?php
	  $sno=1;
		 foreach($pat_data as $p_data){?>
        <tr>
            <td><?php echo $sno++;?></td>
			<td><?php echo ucwords($p_data->fname);?></td>
			<td><?php echo ucwords($p_data->lname);?></td>
			<td><?php echo date('d/m/Y',strtotime($p_data->DOB)) ;?></td>
			<td><?php echo $p_data->age;?></td>
			<td><?php echo $p_data->gender;?></td>
			<td><?php echo $p_data->email;?></td>
			<td><?php echo $p_data->mobile_no;?></td>
			<td><?php echo ucwords($p_data->state);?></td>
			<td><?php echo ucwords($p_data->district);?></td>
			<td><?php echo ucwords($p_data->address);?></td>
			<td><a href="<?php echo base_url().'reg/editRegs/'.$p_data->ID; ?>">Edit </a></td>
			<td><a href="<?php echo base_url().'reg/deleteRegs/'.$p_data->ID; ?>"> Delete </a></td>
			<td><a href="<?php echo base_url().'appoint/view/'.$p_data->ID; ?>">Appointment</a></td>
		</tr>
		<!-- <td><?php //echo $p_data->lname;?></td> -->
	<?php }?>
	  </tbody>
	</table>
	 </div>
</body>
<!-- End Table with stripped rows -->	  
</main>



<!-- <?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	Latest compiled and minified CSS
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

Optional theme
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

Latest compiled and minified JavaScript
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


	<style type="text/css">

	::selection { background-color: red ; color: white; }
	::-moz-selection { background-color: red ; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	#container {
		margin: 20px;
		border: 2px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		box-sizing: border-box;
  width: 100%;
  length: 100%;
	}
	
	.name{
		color:black;
	}

	footer{
  font-size: 14px;
	}


	</style>
</head>

<body>
<form action="<?php echo base_url().'reg/regs'; ?>" method="post">
<div id="container">
	<h1 style= "color: purple; text-align:center; text-size: x-large;"><b>~ REGISTRATION ~</b></h1>
    <marquee style="font-size:large; color: red;"><i>!! REGISTER YOURSELF !!</i></marquee>
<br>
	<div id="body">
	<div>
      <h2 class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6"  >
		<label>First name - <input type="text" name="fname" placeholder="enter your first name" > </label></div>	
	  <div class="col-lg-6 col-md-6 col-sm-6">	
	    <label>Last name - <input type="text" name="lname" placeholder="enter your last name"> </label>
      </div>
      </h2>
    </div>
	<br>
	<br>
<h2>
    <div class="row">
	    <div class="col-lg-4">
		<label>Date of birth - <input type = "date" name=DOB ></label></div>
        <div class="col-lg-2">
		<label>Age - <input type ="number" name=age placeholder="enter your age " min="1" max="100"></label></div>
<h2>
        <div class="col-lg-6">
	<label>Gender -
	    <label for id=1> <input type="radio" value=male name=gender id=1 >Male</label>
		<label for id=2> <input type ="radio" value= female name="gender" id=2 >Female </label>
		<label for id=3> <input type ="radio" value=other name= gender id = 3>Other </label>	
        </label>
        </div></h2>
</h2>
<br>
<br> -->
	<!-- <h2>
		<div class="row">
			<div class="col-lg-6">
		<label>Email - <input type="email" name=email placeholder="enter your email" ></label></div>
	        <div class="col-lg-6">
		<label>Mobile No.- <input type="text" name=mobile_no placeholder="enter your mobile number" ></label>
            </div>
        </div>	
	</h2>
<br>
<br>
	<h2>
	<div class="row">
	    <div class="col-lg-4 col-sm-4">
		State - 
		<select id= state name=state>
			<option value="" >Select State</option>
			<option value="assam">Assam</option>
			<option value="delhi">Delhi</option>
			<option value="madhya pradesh">Madhya Pradesh</option>
			<option value="Kerala">Kerala</option>
        </select>
        </div>
	<div class="col-lg-4 col-sm-4">
	    District-
		<select id= district name=district>
			<option value=""> Select district</option>
			<option value="katni">Katni</option>
			<option value="jabalpur">Jabalpur</option>
			<option value="satna">Satna</option>
			<option value="Narmadapuram">Narmadapuram</option>
			<option value="Betul">Betul</option>
			<option value="sagar">Sagar</option>

        </select>
    </div>
	<div class="col-lg-4">
	Address -
		<textarea name= "address" placeholder="enter your address" rows= "2" ></textarea>
    </div>
	<hr>
	<br>
	<h2 style="text-align: center;"> -->
    <!-- <button type='submit'>Submit</button>
    </h2>
</div>
</form> --> -->
<!-- 
<div>
<h2 style="text-align: center;">
<a href="<?php echo base_url().'doctor/docs';?>">
<input type="button" value="DOCTOR">
</a></h2>
</div>

<div>
<h2 style="text-align: center;">
	<a href="<?php echo base_url().'home_c/view';?>">
	<input type="button" value="HOME">
</a></h2>
</div>
<hr>
<br> -->
<!-- <table>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
	<div class="col-lg">
	<thead>
		<tr>
		<th>firstname</th>
		<th>lastname</th>
		<th>date of birth</th>
		<th>age</th>
		<th>gender</th>
		<th>email</th> -->
		<!-- <th>mobile no.</th>
		<th>state</th>
		<th>district</th>
		<th>address</th>
		<th>action</th>
		<th>delete</th>
        </tr>
	</thead> -->
	<!-- <tbody>
		<?php foreach($pat_data as $p_data){?>
		<tr>
			<td><?php echo $p_data->fname;?></td>
			<td><?php echo $p_data->lname;?></td>
			<td><?php echo date('d/m/Y',strtotime($p_data->DOB)) ;?></td>
			<td><?php echo $p_data->age;?></td>
			<td><?php echo $p_data->gender;?></td>
			<td><?php echo $p_data->email;?></td>
			<td><?php echo $p_data->mobile_no;?></td>
			<td><?php echo $p_data->state;?></td> -->
			<!-- <td><?php echo $p_data->district;?></td>
			<td><?php echo $p_data->address;?></td>
			<td><a href="<?php echo base_url().'reg/editRegs/'.$p_data->ID; ?>">Edit </a></td>
			<td><a href="<?php echo base_url().'reg/deleteRegs/'.$p_data->ID; ?>"> Delete </td>
		</tr>
		<td><?php //echo $p_data->lname;?></td> 
		<?php }?>
	</tbody>
</div>
</table>
</body>
<br>
<hr>
<footer style="text-align:right;">contact for enquiry:XXXXXXX456</footer>   
</html> -->
