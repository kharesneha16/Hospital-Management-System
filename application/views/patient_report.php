<main id="main" class="main">
<body>

<div class="pagetitle">
    <h1>PATIENT</h1>
</div>
      <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>REPORT</b></h4>

              <div><input type="hidden" name="id" value="<?php echo $v_data->a;?>"></div>

              <span class="row g-3">
                <div class="col-2"><label>Name</label></div>
                <div class="col-4"><?php echo ucwords($v_data->fname);?><?php echo ucwords($v_data->lname);?></div>

                <div class="col-1"><label>Gender</label></div>
                <div class="col-5"><?php echo ucwords($v_data->gender);?></div>
              </span>
<br>
              <span class="row g-3">
                <div class="col-2"><label>Date Of Birth</label></div>
                 <div class="col-4"><?php echo date('Y-m-d',strtotime($v_data->DOB));?></div>
                
                <div class=" col-1"><label>Age</label></div>
                 <div class= "col-5"><?php echo $v_data->age;?></div>
              </span>
<br>
              <span class="row g-3">
                <div class="col-2"><label>Specialization</label></div>
                <div class="col-4"><?php echo $v_data->specialization;?></div>

                <div class="col-1"><label>Fees</label></div>
                <div class="col-5"><?php echo $v_data->fees;?></div>
              </span> 
<br>
              <span class="row g-3">
                <div class="col-2"><label>Date</label></div>
                  <div class="col-4"><?php echo date('d/m/Y',strtotime($v_data->date));?></div>

                <div class="col-1"><label>Time Slot</label></div>
                <div class="col-5"><?php echo $v_data->time;?></div>
              </span>
<br>
              <span class="row g-3">
                <div class="col-2"><label>Medicine Name </label></div>
                <div class="col-4"><?php echo $v_data->name;?></div>

                <div class="col-1"><label>Admit</label></div>
                <div class="col-4"><?php echo $v_data->admit;?></div>
              </span>
<br>
              <span class="row g-3">
                <div class="col-2"><label>Admit</label></div>
                <div class="col-10"><?php echo $v_data->advice;?></div>
              </span>

            </div>
      </div>  
</body>
</main>    