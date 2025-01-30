<main id="main" class="main">
<body>
<div class="pagetitle">
    <h1>PATIENT</h1>
</div>
      <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>DETAILS</b></h4>

              <form action="<?php echo base_url().'Pat_visit/save'; ?>" method="post">

              <span class="row g-3">
                <div class="col-2">
                  <label for="fname" class="col-form-label">Name</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="fname" id="fname" value="<?php echo ucwords($a_data->fname);?> <?php echo ucwords($a_data->lname);?>" readonly>
                </div>
                <div class="col-1">
                  <label for="gender" class=" col-form-label">Gender</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="gender" id="gender" value="<?php echo ucwords($a_data->gender);?>" readonly>
                </div>
              </span>  
<br>             
              <span class="row g-3">
                <div class="col-2">
                  <label for="DOB" class= "col-form-label">Date Of Birth</label>
                </div>
                 <div class="col-4">
                  <input type="date" class="form-control" name="DOB" id="DOB" value="<?php echo date('Y-m-d',strtotime($a_data->DOB))?>" readonly>
                 </div>
                <div class=" col-1">  
                  <label for="age" class=" col-form-label">Age</label> 
                </div>
                 <div class= "col-5">
					        <input type ="number" class="form-control" id="age" name="age"  value="<?php echo $a_data->age;?>" min="1" max="120" readonly>
	              </div>
              </span>
<br>
              <span class="row g-3">
                <div class="col-2">
                  <label for="specialization" class="col-form-label">Specialization</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="Specialization" id="Specialization" value="<?php echo $a_data->specialization;?>" readonly>
                </div>

                <div class="col-1">
                  <label for="fees" class="col-form-label">Fees</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="fees" id="fees" value="<?php echo $a_data->fees;?>" readonly>
                </div>
              </span>  
<br>
              <span class="row g-3">
                <div class="col-2">
                  <label for="date" class=" col-form-label">Date</label>
                </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="date" id="date" value="<?php echo date('d/m/Y',strtotime($a_data->date));?>" readonly>
                  </div>

                <div class="col-1">
                  <label for="time" class="col-form-label">Time Slot</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="time" id="time" value="<?php echo $a_data->time;?>" readonly>
                </div>
              </span>  
          <!-- End Horizontal Form -->
              </div>
      </div>

      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><b>MEDICINES</b></h4>
        
           <div class="row g-3">
            <div class="col-2">
            <label for="name" class="col-form-label">Medicine Name</label></div>
            <div class="col-10">
              <select class="form-select" id="name" multiple aria-label="multiple select example" name="name" required>
                <option selected>Select Medicine</option>
                
                <?php foreach($med_data as $med){ ?>
                  <option value="<?php echo $med->id;?>"><?php echo $med->name;?> <?php echo $med->mg;?> mg</option>
                  <?php
              }
              ?>
              </select>
            </div> 
    
            <div class="row g-3">
            <div class="col-2">
                  <legend class="col-form-label">Admit</legend></div>
                  <div class= "col-10">
                  <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="admit" name="admit" checked>
                      <label class="form-check-label" for="admit">YES</label>
                  </div>
                  </div>
	           </div>

        <div class="row g-3">
          <div class="col-2">
            <label>Advice</label></div>
            <div class="col-10">
            <textarea class="form-control" id="advice" name="advice" style="height: 100px"></textarea>
          </div>
        </div>

        <div><input type="hidden" name= "id"value="<?php echo $a_data->id;?>"></div>
        <div><input type="hidden" name= "patient_id"value="<?php echo $a_data->patient_id;?>"></div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary" onclick="visit()">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
  </form>
      </div>
      </div>
</div>
<!-- table       -->
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><b></b></h4>
  <table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Sno</th>
        <th scope="col">Name</th>
		    <th scope="col">Gender</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Age</th>
        <th scope="col">Specialization</th>
        <th scope="col">Fees</th>
        <th scope="col">Date</th>
        <th scope="col">Time Slot</th>
        <th scope="col">Medicine</th>
        <th scope="col">Mg</th>
        <th scope="col">Admit</th>
        <th scope="col">Advice</th>
        <th scope="col">Report</th>
      </tr>
    </thead>  
    <tbody>
      <tr>
    <?php
	  $sno=1;
    foreach($visit_data as $v_data){?>
    <tr>
      <td><?php echo $sno++;?></td>
      <td><?php echo ucwords($v_data->fname);?> <?php echo ucwords($v_data->lname);?></td>
      <td><?php echo ucwords($v_data->gender);?></td>
      <td><?php echo ucwords($v_data->DOB)?></td>
      <td><?php echo ucwords($v_data->age)?></td>
      <td><?php echo ucwords($v_data->specialization)?></td>
      <td><?php echo ucwords($v_data->fees)?></td>
      <td><?php echo ucwords($v_data->date)?></td>
      <td><?php echo ucwords($v_data->time)?></td>
      <td><?php echo ucwords($v_data->name)?></td>
      <td><?php echo ucwords($v_data->mg)?></td>
      <td><?php echo ucwords($v_data->admit)?></td>
      <td><?php echo ucwords($v_data->advice)?></td>
      <td><a href="<?php echo base_url().'Report/view/'.$v_data->visit_id;?>">View</a></td>
    </tr>
    <?php }?>
      </tr>  
    </tbody>
          </div>
        </div> 
</body>
</main>  

<script>
  $("#visit").show();

  function visit(){
    alert("Successfully Submitted")
    $("#visit").show();
  }
 </script> 