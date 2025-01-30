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
			  <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Vertical Form -->
			  <form action="<?php echo base_url().'reg/update'; ?>" method="post">
			  <marquee style="font-size:large; color: red;"><i>!! Update Here !!</i></marquee>

              <div class="row g-3">
                <div class="col-6">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $pat_data->fname;?>">
                </div>
				<div class="col-6">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $pat_data->lname;?>">
                </div>
			  <div class="row g-3">
			    <div class="col-6">
                  <label for="DOB" class="form-label">Date Of Birth</label>
                  <input type="date" class="form-control" name=DOB id="DOB" value="<?php echo date('Y-m-d',strtotime($pat_data->DOB))?>">
                </div>
                <div class= "col-6">
			    	<label for="age" class="col-sm-2 col-form-label">Age</label> 
					<input type ="number" class="form-control" name=age  value="<?php echo $pat_data->age;?>" min="1" max="100">
			    </div>
	          </div>
			  <br>
			  <br>
			  <div class="row g-3">
                  <label class="form-label col-sm-3">Gender-</label>
                   <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" <?php if($pat_data->gender == 'male'){echo 'checked';}?> name="gender" id="1" value="male" read-only>
                      <label class="form-check-label" for id="1">
                        Male
                      </label>
                    </div>
                   </div> 
                   <div class="col-sm-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" <?php if($pat_data->gender == 'female'){echo 'checked';}?> name="gender" id="2" value="female" read-only>
                      <label class="form-check-label" for id="2">
                        Female
                      </label>
                    </div>
                   </div>
                    <div class="col-sm-3">                
                    <div class="form-check">
                      <input class="form-check-input" type="radio" <?php if($pat_data->gender == 'other'){echo 'checked';}?> name="gender" id="3" value="other" read-only>
                      <label class="form-check-label" for id="3">
                        Other
                      </label>
                    </div>
                   </div>
                  </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name=email value="<?php echo $pat_data->email;?>" id="email">
                </div>
                <div class="col-12">
                  <label for="mobile_no" class="form-label">Mobile Number</label>
                  <input type="text" class="form-control"  name="mobile_no"  value="<?php echo $pat_data->mobile_no;?>" id="mobile_no">
                </div>
				<div class="col-12">
                  <label for="State" class="form-label">State</label> 
		        <select id= state class="form-control" name=state>
		        	<option value="" <?php if($pat_data->state == ""){echo 'selected';}?>>Select State</option>
					<option value="andhra pradesh" <?php if($pat_data->state == 'andhra pradesh'){echo 'selected';}?>>Andhra Pradesh</option>
		        	<option value="arunachal pradesh" <?php if($pat_data->state == 'arunachal pradesh'){echo 'selected';}?>>Arunachal Pradesh</option>
					<option value="assam" <?php if($pat_data->state == 'assam'){echo 'selected';}?>>Assam</option>
					<option value="bihar"<?php if($pat_data->state == 'bihar'){echo 'selected';}?>>Bihar</option>
		        	<option value="chhattisgarh"<?php if($pat_data->state == 'chhattisgarh'){echo 'selected';}?>>Chhattisgarh</option>
					<option value="delhi" <?php if($pat_data->state == 'delhi'){echo 'selected';}?>>Delhi</option>
		        	<option value="goa" <?php if($pat_data->state == 'goa'){echo 'selected';}?>>Goa</option>
		        	<option value="gujarat" <?php if($pat_data->state == 'gujarat'){echo 'selected';}?>>Gujarat</option>
		        	<option value="haryana" <?php if($pat_data->state == 'haryana'){echo 'selected';}?>>Haryana</option>
		        	<option value="himachal pradesh" <?php if($pat_data->state == 'himachal pradesh'){echo 'selected';}?>>Himachal Pradesh</option>
					<option value="jharkhand" <?php if($pat_data->state == 'jharkhand'){echo 'selected';}?>>Jharkhand</option>
					<option value="karnataka" <?php if($pat_data->state == 'karnataka'){echo 'selected';}?>>Karnataka</option>
		        	<option value="kerala" <?php if($pat_data->state == 'kerala'){echo 'selected';}?>>Kerala</option>
		        	<option value="madhya pradesh" <?php if($pat_data->state == 'madhya pradesh'){echo 'selected';}?>>Madhya Pradesh</option>
					<option value="maharashtra" <?php if($pat_data->state == 'maharashtra'){echo 'selected';}?>>Maharashtra</option>
                    <option value="manipur" <?php if($pat_data->state == 'manipur'){echo 'selected';}?>>Manipur</option>
					<option value="meghalaya" <?php if($pat_data->state == 'meghalaya'){echo 'selected';}?>>Meghalaya</option>
                    <option value="mizoram" <?php if($pat_data->state == 'mizoram'){echo 'selected';}?>>Mizoram</option>
                    <option value="nagaland" <?php if($pat_data->state == 'nagaland'){echo 'selected';}?>>Nagaland</option>
                    <option value="odisha" <?php if($pat_data->state == 'odisha'){echo 'selected';}?>>Odisha</option>
                    <option value="punjab" <?php if($pat_data->state == 'punjab'){echo 'selected';}?>>Punjab</option>
                    <option value="rajasthan" <?php if($pat_data->state == 'rajasthan'){echo 'selected';}?>>Rajasthan</option>
                    <option value="sikkim" <?php if($pat_data->state == 'sikkim'){echo 'selected';}?>>Sikkim</option>
					<option value="tamil nadu" <?php if($pat_data->state == 'tamil nadu'){echo 'selected';}?>>Tamil Nadu</option>
                    <option value="telangana" <?php if($pat_data->state == 'telangana'){echo 'selected';}?>>Telangana</option>
                    <option value="tripura" <?php if($pat_data->state == 'tripura'){echo 'selected';}?>>Tripura</option>
                    <option value="uttar pradesh" <?php if($pat_data->state == 'uttar pradesh'){echo 'selected';}?>> Uttar Pradesh</option>
                    <option value="west bengal" <?php if($pat_data->state == 'west bengal'){echo 'selected';}?>>West Bengal</option>
                </select>
                </div>

				<div class="col-12">
                  <label for="District" class="form-label">District</label> 
		        <select id= district class="form-control" name=district>
		        	<option value="" <?php if($pat_data->district == ""){echo 'selected';}?>> Select district</option>
		        	<option value="katni" <?php if($pat_data->district == "katni"){echo 'selected';}?>>Katni</option>
		        	<option value="jabalpur" <?php if($pat_data->district == "jabalpur"){echo 'selected';}?>>Jabalpur</option>
		        	<option value="satna" <?php if($pat_data->district == "satna"){echo 'selected';}?>>Satna</option>
		        	<option value="narmadapuram" <?php if($pat_data->district == "narmadapuram"){echo 'selected';}?>>Narmadapuram</option>
		        	<option value="betul" <?php if($pat_data->district == "betul"){echo 'selected';}?>>Betul</option>
		        	<option value="sagar" <?php if($pat_data->district == "sagar"){echo 'selected';}?>>Sagar</option>
                </select>	
                </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
				  <textarea name= "address" class="form-control" rows= "2" id="inputAddress"><?php echo $pat_data->address;?></textarea>
                </div>

				<div> <input type="hidden" name = "id"value="<?php echo $pat_data->ID;?>"></div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
	</div>

<!-- End Table with stripped rows -->	  
</main>

 <?php 
//defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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


	#body {
		margin: 0 15px 0 15px;
		min-height: 200px;
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
<form action="<?php echo base_url().'reg/update'; ?>" method="post">
<div id="container">
	<h1 style= "color: purple; text-align:center; text-size: x-large;"><b>~ REGISTRATION ~</b></h1>
    <marquee style="font-size:large; color: red;"><i>!! Update Here !!</i></marquee>
<br> -->
	<!-- <div id="body">
	<div>
      <h2 class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6"  >
		<label>First name - <input type="text" name="fname" value="<?php echo $pat_data->fname;?>" > </label></div>	
	    <div class="col-lg-6 col-md-6 col-sm-6">	
	    <label>Last name - <input type="text" name="lname" value="<?php echo $pat_data->lname;?>"> </label></div>
      </h2>
    </div>
	<br>
	<br>
<h2>
    <div class="row">
	    <div class="col-lg-4">
		<label>Date of birth - <input type = "date" name="DOB" value="<?php echo date('Y-m-d',strtotime($pat_data->DOB))?>"></label></div>
        <div class="col-lg-2">
		<label>Age - <input type ="number" value="<?php echo $pat_data->age;?>"  min="1" max="100"></label></div>
<h2> -->
        <!-- <div class="col-lg-6">
	<label>Gender -
	    <label for id=1> <input type="radio" <?php if($pat_data->gender == 'male'){echo 'checked';}?> value="male" name="gender" id=1 >Male</label>
		<label for id=2> <input type ="radio" <?php if($pat_data->gender == 'female'){echo 'checked';}?> value="female" name="gender" id=2 >Female </label>
		<label for id=3> <input type ="radio" <?php if($pat_data->gender == 'other'){echo 'checked';}?> value="other" name= "gender" id = 3>Other </label>	
        </label>
        </div></h2>
</h2>
<br>
<br>
	<h2>
		<div class="row">
			<div class="col-lg-6">
		<label>Email - <input type="email" name=email value="<?php echo $pat_data->email;?>" ></label></div>
	        <div class="col-lg-6">
		<label>Mobile No.- <input type="text" name=mobile_no value="<?php echo $pat_data->mobile_no;?>"></label>
            </div>
        </div>	
	</h2>
<br>
<br> -->
	<!-- <h2>
	<div class="row">
	    <div class="col-lg-4 col-sm-4">
		State - 
		<select id= state name=state>
			<option value="" <?php if($pat_data->state == ""){echo 'selected';}?>>Select State</option>
			<option value="assam" <?php if($pat_data->state == 'assam'){echo 'selected';}?>>Assam</option>
			<option value="delhi" <?php if($pat_data->state == 'delhi'){echo 'selected';}?>>Delhi</option>
			<option value="madhya pradesh" <?php if($pat_data-> state == 'madhya pradesh'){echo 'selected';}?>>Madhya Pradesh</option>
			<option value="kerala" <?php if($pat_data->state == 'kerala'){echo 'selected';}?>>Kerala</option>
        </select>
        </div> -->
	<!-- <div class="col-lg-4 col-sm-4">
	    District-
		<select id= district name=district>
			<option value="" <?php if($pat_data->district == ""){echo 'selected';}?>> Select district</option>
			<option value="katni" <?php if($pat_data->district == "katni"){echo 'selected';}?>>Katni</option>
			<option value="jabalpur" <?php if($pat_data->district == "jabalpur"){echo 'selected';}?> >Jabalpur</option>
			<option value="satna" <?php if($pat_data->district == "satna"){echo 'selected';}?>>Satna</option>
			<option value="Narmadapuram" <?php if($pat_data->district == "Narmadapuram"){echo 'selected';}?>>Narmadapuram</option>
			<option value="Betul" <?php if($pat_data->district == "Betul"){echo 'selected';}?>>Betul</option>
			<option value="sagar" <?php if($pat_data->district == "sagar"){echo 'selected';}?>>Sagar</option>

        </select> -->
    <!-- </div>
	<div class="col-lg-4">
	Address -
		<textarea name= "address"  rows= "2" >
		<?php echo $pat_data->address;?>
		</textarea>
    </div>
	<div> <input type="hidden" name = "id"value="<?php echo $pat_data->ID;?>"></div>
    <hr>
	<br>
	<h2 style="text-align: center;">
    <button type='submit'>Submit</button>
    </h2>
</div>
</form>
<hr>
<br>
</body>
</html> -->
<script>
	// load();
	function load(){
		alert("hi sneha");
		console.log("hi sneha");
	}

	function getvalue(){
		var fname = document.getElementById=('#fname');
		alert(fname);
	}
</script>