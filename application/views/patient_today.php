<main id="main" class="main">
<body>
<div class="pagetitle">
        <h1>Patients Today</h1>
      </div>
      <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>List</b></h4>

 <!-- Table with stripped rows -->
 <div class="row g-3">
 <div class="col-12">
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
			<th scope="col">Action</th>
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
			  <td><?php echo ucwords($a_data->gender);?></td>
			  <td><?php echo $a_data->specialization;?></td>
			  <td><?php echo $a_data->fees;?></td>
			  <td><?php echo date('d/m/Y',strtotime($a_data->date));?></td>
			  <td><?php echo $a_data->time;?></td>
			  <td><a href="<?php echo base_url().'Pat_visit/view/'.$a_data->id;?>">Proceed</a></td>
        </tr>
        <?php }?>
    </tbody>
</table>
</div>
</div>
</div>
</body>
</main>