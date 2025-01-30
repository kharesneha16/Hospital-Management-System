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
        <h1>Doctors</h1>
      </div> 
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Your Details</h5>
      <!-- Floating Labels Form -->
      <form action="<?php echo base_url().'doctor/updates'; ?>" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="doctor" class="col-sm-2 col-form-label">Doctor Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor Name"
             value="<?php echo ucwords($doc_data->doctor);?>">
            </div>
        </div>

        <div class="col-md-2">
        <label for="specialization" class="form-label">Specialization</label></div>
        <div class="col-sm-10">
        <div class="form-floating">
        <select class="form-select" id="specialization" aria-label="Default select example" name="specialization"
        placeholder="Specialization">
          <option value="" <?php if($doc_data->specialization == ""){echo 'selected';}?>>Select specialization</option>
          <option value="Pathologists" <?php if($doc_data->specialization == "Pathologists"){echo 'selected';}?>>Pathologists</option>
          <option value="Pediatricians" <?php if($doc_data->specialization == "Pediatricians"){echo 'selected';}?>>Pediatricians</option>
          <option value="Cardiologists" <?php if($doc_data->specialization == "Cardiologists"){echo 'selected';}?>>Cardiologists</option>
          <option value="Dermatologists"<?php if($doc_data->specialization == "Dermatologists"){echo 'selected';}?>>Dermatologists</option>
          <option value="Endocrinologists"<?php if($doc_data->specialization == "Endocrinologists"){echo 'selected';}?>>Endocrinologists</option>
          <option value="Neurologists"<?php if($doc_data->specialization == "Neurologists"){echo 'selected';}?>>Neurologists</option>
          <option value="Nephrologists"<?php if($doc_data->specialization == "Nephrologists"){echo 'selected';}?>>Nephrologists</option>
          <option value="Plastic Surgeons"<?php if($doc_data->specialization == "Plastic Surgeons"){echo 'selected';}?>>Plastic Surgeons</option>
          <option value="Psychiatrists"<?php if($doc_data->specialization == "Psychiatrists"){echo 'selected';}?>>Psychiatrists</option>
        </select>  
        </div>
          <div> <input type="hidden" name = "id"value="<?php echo $doc_data->id;?>"></div>
          <br>
          <br>
          <br>
       <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- End floating Labels Form -->
      </div>

</div>
</div>

    </main>
   
   <!-- <html>
<head>
	 Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="utf-8">
<title>doctors</title>
</head>
<style type="text/css">

	::selection { background-color: red ; color: white; }
	::-moz-selection { background-color: red ; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 25px;
} -->
   <!-- </style>
  <body>
  <form action="<?php echo base_url().'doctor/updates'; ?>" method="post">
    <h2>Doctor-
        <input type="text" name="doctor" value="<?php echo $doc_data->doctor;?>">
    </h2>
    <h2>Specialization-
        <select name="specialization">
          <option value="" <?php if($doc_data->specialization == ""){echo 'selected';}?>>Select specialization</option>
          <option value="Pathologists" <?php if($doc_data->specialization == "Pathologists"){echo 'selected';}?>>Pathologists</option>
          <option value="Pediatricians" <?php if($doc_data->specialization == "Pediatricians"){echo 'selected';}?>>Pediatricians</option>
          <option value="Cardiologists" <?php if($doc_data->specialization == "Cardiologists"){echo 'selected';}?>>Cardiologists</option>
          <option value="Dermatologists"<?php if($doc_data->specialization == "Dermatologists"){echo 'selected';}?>>Dermatologists</option>
          <option value="Endocrinologists"<?php if($doc_data->specialization == "Endocrinologists"){echo 'selected';}?>>Endocrinologists</option>
          <option value="Neurologists"<?php if($doc_data->specialization == "Neurologists"){echo 'selected';}?>>Neurologists</option>
          <option value="Nephrologists"<?php if($doc_data->specialization == "Nephrologists"){echo 'selected';}?>>Nephrologists</option>
          <option value="Plastic Surgeons"<?php if($doc_data->specialization == "Plastic Surgeons"){echo 'selected';}?>>Plastic Surgeons</option>
          <option value="Psychiatrists"<?php if($doc_data->specialization == "Psychiatrists"){echo 'selected';}?>>Psychiatrists</option>
        </select>  
    </h2>
    <div> <input type="hidden" name = "id"value="<?php echo $doc_data->id;?>"></div>
    
    <h2 style="text-align: center;">
    <button type='submit'>Submit</button>
    </h2> -->
 <!-- </form>
  </body>
</html>  -->