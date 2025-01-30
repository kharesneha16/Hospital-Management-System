<main id="main" class="main">
<body>
<div class="pagetitle">
        <h1>Medicines</h1>
      </div>
<!-- <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4> -->

<form action="<?php echo base_url().'Med/save'; ?>" method="post">
                <div class="col-md-12">
                  <div class= "form-floating">
                  <input type="text" class="form-control" name="name" id="name">
                  <label for="name">Medicine Name</label>
                  </div>
                </div>
<br>
                <div class="col-md-12">
                <div class= "form-floating">
                  <select class="form-select" id="form-select" aria-label="Default select example" name="mg">                  
                  <option value="" >Select</option>
                  <option value="0.5">0.5</option>
                  <option value="1">1</option>
                  <option value="2">2</option> 
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
                <label for="form-select">Mg</label>
                </div>
                </div>
                <br>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
  </div>

</form>
</div>
</div>
<br>
<div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <div class="pagetitle">
 <div class="row"> 
  <div class="col-10">
     <h1>List of Medicines</h1>  
  </div>
</div>
<div><nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Medicines</li>
    </ol>
</div></nav>
<!-- table -->
<table class="table table-striped">
<thead>
       <tr>
        <th scope="col">Sno</th>
        <th scope="col">Name</th>
		    <th scope="col">Mg</th>
        <th scope="col">Action</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    
    <tbody>
      <?php
	  $sno=1;
    foreach($med_data as $m_data){?>
    <tr>
      <td><?php echo $sno++;?></td>
      <td><?php echo ucwords($m_data->name)?>
      <td><?php echo ucwords($m_data->mg)?>
      <td><a href="<?php echo base_url().'Med/editview/'.$m_data->id; ?>">Edit</a></th>
      <td><a href="#" onclick="archiveFunction(<?php echo $m_data->id; ?>)">Delete</a></th>
    </tr>
    <?php }?>  
</tbody>
</table> 
<!-- End Table with stripped rows -->	  
</div>
</main>

<script>
  function archiveFunction(id) {
    // alert();
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).console.log(e);

};
</script>