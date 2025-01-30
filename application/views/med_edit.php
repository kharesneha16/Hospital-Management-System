<main id="main" class="main">
<body>
<div class="pagetitle">
        <h1>Update Medicines</h1>
      </div>
<!-- <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4> -->

<form action="<?php echo base_url().'Med/update'; ?>" method="post" class="row g-3">
                <div class="col-md-12">
                  <div class= "form-floating">
                  <input type="text" name="name" class="form-control" value="<?php echo $med_data->name;?>" id="floatingName">
                  <label for="floatingName">Medicine Name</label>
                  </div>
                </div>
<br>
                <div class="col-md-12">
                <div class= "form-floating">
                  <select class="form-select" id="form-select" aria-label="Default select example" name="mg">                  
                  <option value="<?php if($med_data->mg == ""){echo 'selected';}?> ">Select</option>
                  <option value="0.5"<?php if($med_data->mg == "0.5"){echo 'selected';}?>>0.5</option>
                  <option value="1"<?php if($med_data->mg == "1"){echo 'selected';}?>>1</option>
                  <option value="2"<?php if($med_data->mg == "2"){echo 'selected';}?>>2</option> 
                  <option value="5"<?php if($med_data->mg == "5"){echo 'selected';}?>>5</option>
                  <option value="10"<?php if($med_data->mg == "10"){echo 'selected';}?>>10</option>
                  <option value="50"<?php if($med_data->mg == "50"){echo 'selected';}?>>50</option>
                  <option value="100"<?php if($med_data->mg == "100"){echo 'selected';}?>>100</option>
                </select>
                <label for="form-select">Mg</label>
                </div>
                </div>
                <br>

                <div> <input type="hidden" name = "id" value="<?php echo $med_data->id;?>"></div>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button></form>
</div>
</div>
 
</body>
</main>

<!-- <script>
  function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "But you will still be able to retrieve this file.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, archive it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
}
</script> -->