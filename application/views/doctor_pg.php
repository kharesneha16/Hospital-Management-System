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
      <!-- Floating Labels Form -->
      <form action="<?php echo base_url().'doctor/save'; ?>" method="post" class="row g-3">
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor Name">
            <label for="doctor">Doctor Name</label>
          </div>
        </div>
          <div class="col-md-12">
            <div class="form-floating">
            <select class="form-select" id="specialization" aria-label="Default select example" name="specialization"
             placeholder="Specialization">
              <option selected>Select specialization</option>
              <option value="Pathologists" >Pathologists</option>
              <option value="Pediatricians" >Pediatricians</option>
              <option value="Cardiologists" >Cardiologists</option>
              <option value="Dermatologists" >Dermatologists</option>
              <option value="Endocrinologists" >Endocrinologists</option>
              <option value="Neurologists">Neurologists</option>
              <option value="Nephrologists" >Nephrologists</option>
              <option value="Plastic Surgeons" >Plastic Surgeons</option>
              <option value="Psychiatrists" >Psychiatrists</option>
            </select>
            <label for="form-select">Specialization</label>
            </div>
          </div>
       <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
   </form><!-- End floating Labels Form -->

<div class="pagetitle">
<div class="row"> 
  <div class="col-10">
     <h1>List of Doctors</h1>  
  </div> 
  <div class="col-2">
     <button type="submit" class="btn btn-primary pull-right">ADD DOCTOR</button>
  </div>
</div>
</div>
<div> <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Doctor's</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">List of Doctors</h5>

          <div class="search-bar" style="alignment:right;">
      <form action="<?php echo base_url().'doctor/docs'; ?>" class="search-form d-flex align-items-center" 
      method="POST">
        <input type="text" name="query" value='<?php echo $query;?>' placeholder="Search by Name" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto" style="alignment:right;">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col">Sno</th>
              <th scope="col">Doctor</th>
              <th scope="col">Specialization</th>
              <th scope="col">Action</th>
              <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $sno=1;
              foreach($doc_data as $d_data){?>
                <tr>
                   <td><?php echo $sno++;?></td>
                   <td><?php echo ucwords($d_data->doctor);?></td>
                   <td><?php echo $d_data->specialization;?></td>
             			 <td><a href="<?php echo base_url().'doctor/edits/'.$d_data->id; ?>">edit </a></td>
                   <td><a href="<?php echo base_url().'doctor/deletes/'.$d_data->id; ?>"> Delete</a></td>
                   </tr>
               <?php }?>
             </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>

</main>
<!-- End #main -->
</body>    

<!-- <html>
<head> -->
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="utf-8">
<title>doctors</title> -->
<!-- </head>
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
}
  </style> -->
<!-- <body>
  <form action="<?php echo base_url().'doctor/save'; ?>" method="post">
    <h2>Doctor-
        <input type="text" name="doctor">
    </h2>
    <h2>Specialization-
        <select name="specialization">
          <option value="">Select specialization</option>
          <option value="Pathologists" >Pathologists</option>
          <option value="Pediatricians" >Pediatricians</option>
          <option value="Cardiologists" >Cardiologists</option>
          <option value="Dermatologists" >Dermatologists</option>
          <option value="Endocrinologists" >Endocrinologists</option>
          <option value="Neurologists">Neurologists</option>
          <option value="Nephrologists" >Nephrologists</option>
          <option value="Plastic Surgeons" >Plastic Surgeons</option>
          <option value="Psychiatrists" >Psychiatrists</option>
        </select>  
    </h2>
    <h2 style="text-align: center;">
    <button type='submit'>Submit</button>
    </h2>
  </form>
</body>
</html> -->