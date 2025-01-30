<main id="main" class="main">
    <!-- <p>hello</p> -->
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
        <h1>Book Your Appointment</h1>
      </div>
<div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>

              <!-- Vertical Form -->
			  <form action="<?php echo base_url().'appoint/save'; ?>" method="post">
			  <!-- <marquee style="font-size:large; color: red;"><i>!! Update Here !!</i></marquee> -->

              <div class="row g-3">
                <div class="col-6">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" id="fname" value="<?php echo ucwords($pat_data->fname);?>" readonly>
                </div>
				<div class="col-6">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="lname" value="<?php echo ucwords($pat_data->lname);?>" readonly>
                </div>
			  <div class="row g-3">
			    <div class="col-6">
                  <label for="DOB" class="form-label">Date Of Birth</label>
                  <input type="date" class="form-control" name=DOB id="DOB" value="<?php echo date('Y-m-d',strtotime($pat_data->DOB))?>" readonly>
                </div>
                <div class= "col-6">
			    	<label for="age" class="form-label">Age</label> 
					<input type ="number" class="form-control" name=age  value="<?php echo $pat_data->age;?>" min="1" max="100" readonly>
			    </div>
	          </div>
			  <br>
			  <br>
        <br>
           <div class="row g-3">
                  <label class="form-label col-1">Gender-</label>
                   <div class="col-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" <?php if($pat_data->gender == 'male'){echo 'checked';}?> name="gender" id="1" value="male" readonly>
                      <label class="form-check-label" for id="1">
                        Male
                      </label>
                    </div>
                   </div> 
                   <div class="col-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" <?php if($pat_data->gender == 'female'){echo 'checked';}?> name="gender" id="2" value="female" readonly>
                      <label class="form-check-label" for id="2">
                        Female
                      </label>
                    </div>
                   </div>
                    <div class="col-7">                
                    <div class="form-check">
                      <input class="form-check-input" type="radio" <?php if($pat_data->gender == 'other'){echo 'checked';}?> name="gender" id="3" value="other" readonly>
                      <label class="form-check-label" for id="3">
                        Other
                      </label>
                    </div>
                   </div>
                  </div>

          <div class="row g-3">
            <div class="col-6">
            <label for="form-select">Specialization</label>
            <select class="form-select" id="Specialization" onchange="time_slot()" aria-label="Default select example" name="specialization"
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
            </div>
            <div class="col-6">
              <label for="form-check-label">Fees</label>
               <select class="form-select" id="fees" name="fees" placeholder="Select Fees">
                <option selected>Select Fees</option>
                <option value="300"> 300</option>
                <option value="500"> 500</option>
                <option value="1000"> 1000</option>
                <option value="1200"> 1200</option>
               </select>
            </div>
          </div>
        <div class="row g-3">
          <div class ="col-6" id="date_div">
          <label for="date" class="form-label">Date</label>
          <input type="date" class="form-control" id="date" name="date">
          </div> 
            <div class="col-6" id="time_div">
              <label for="time" class="form-label" >Time slot</label>
              <input type="time" class="form-control" id="time" name="time">
            </div>      
        </div>    
          
          <div> <input type="hidden" name = "id" value="<?php echo $pat_data->ID;?>"></div>
          
      <div class="text-center">
      <button type="submit" class="btn btn-primary" onclick="receipt()">Submit</button>
      <button type="reset" class="btn btn-danger">Reset</button>
      <!-- <input type="button" value="Print Receipt" class="btn btn-success" <?php echo base_url().'appoint/receipt_view/';?>>    -->
      <!-- <a href="<?php echo base_url().'appoint/receipt_view/'.$pat_data->ID;?>" value="Print Receipt" class="btn btn-success" id="receipt">Print Receipt</a>          -->
      </div>


    </form>
</div> 
</div> 

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
		    <th scope="col">Specialization</th>
		    <th scope="col">Fees</th>
		    <th scope="col">Date</th>
		    <th scope="col">Time slot</th>
        <th scope="col">Print slip</th>
       </tr>
      </thead>
	  <tbody>
	<?php
	  $sno=1;
		 foreach($a_data as $a_data){?>
        <tr>
            <td><?php echo $sno++;?></td>
			      <td><?php echo ucwords($a_data->fname);?></td>
			      <td><?php echo ucwords($a_data->lname);?></td>
			      <td><?php echo date('d/m/Y',strtotime($a_data->DOB)) ;?></td>
			      <td><?php echo $a_data->age;?></td>
			      <td><?php echo $a_data->gender;?></td>
			      <td><?php echo $a_data->specialization;?></td>
			      <td><?php echo $a_data->fees;?></td>
			      <td><?php echo date('d/m/Y',strtotime($a_data->date));?></td>
			      <td><?php echo $a_data->time;?></td>
            <td><a href="<?php echo base_url().'appoint/receipt_view/'.$a_data->id; ?>">Print slip</a></td>
		    </tr>
	<?php }?>
	  </tbody>
	</table>
	 </div>
</body>
</main>

<script>

    $("#date_div").hide();
    $("#time_div").hide();

  function time_slot(){
    // alert()
    $("#date_div").show();
    $("#time_div").show();
  }

    $("#receipt").show();

    function receipt(){
      alert("Appointment is successful")
      $("#receipt").show();
    }
  // function date(){
  //   alert()

</script>