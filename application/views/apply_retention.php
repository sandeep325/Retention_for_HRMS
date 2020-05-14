<!DOCTYPE html>
<html>
<head>
	<title>Apply for retention </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<nav  class="navbar navbar-expand-sm navbar-dark bg-dark">
	<a href="#" class="navbar-brand">Indovision Services Pvt. Ltd.</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="mymenu">
	<ul class="navbar-nav ml-auto">
		<i class="navbar-item"><a href="#" class="nav-link">Support no Gmail &nbsp;<i class='far fa-envelope' style='font-size:20px'></i></a></i>
		<i class="navbar-item"><a href="#" class="nav-link">Welcome User&nbsp;<i class='far fa-user' style='font-size:20px'></i></a></i>
		<i class="navbar-item"><a href="#" class="nav-link">Logout</a></i>

	</ul>
	</div>
</nav>
  <?php   $msg=$this->session->flashdata('msg');
        $msgf=$this->session->flashdata('msgf');
  if ($msg !="")
  {
    echo "<center>";
    echo "<div class=' mt-2 alert alert-success alert-dismissible fade show w-50 p-3'> <button type='button' class='close' data-dismiss='alert'>&times;</button>$msg</div>";
    echo "</center>";
  }
  if($msgf!="")
  {
    echo "<center>";
    echo "<div  class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$msgf</div>";
   echo "</center>";
  }
  ?>

<div class="container">
	  <div class="row justify-content-center">  <!--card in center-->
            <div class="col-sm-8">
		<div class="card mt-4" style="border: 1px solid lightblue;">
 <!--  <div class="card-header">
   Apply for Retention Bonus
  </div> -->
  <div class="card-body">
    <h5 class="card-title" align="center" style="text-decoration:underline; ">Apply for Retention Bonus</h5><hr>
     <form method="post" action="<?php echo base_url().'Retention/Emp_apply'; ?>">
      <div class="form-group row ">
        <label class="col-sm-3 form-control-lable">Employee id:</label>
       <div class="col-sm-6"><input type="text" name="emp_id" value="" class="form-control"></div> 
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Employee name:</label>
       <div class="col-sm-6"><input type="text" name="emp_name" value="" class="form-control">	</div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Retention reason:</label>
        <div class="col-sm-6"><select name="retention_reason" value=" " class="form-control" required>

            <option value="Training">Training</option>
            <option value="OJT">OJT</option>
            <option value="Recommendation">Recommendation</option>
          
           </select>
        </div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Mail id:</label>
       <div class="col-sm-6"> <input type="email" name="mail_id" value="" class="form-control">	</div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Training start date:</label>
        <div class="col-sm-6"><input type="date" name="training_start_date" value="" class="form-control"></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Training end date:</label>
        <div class="col-sm-6"><input type="date" name="training_end_date" value="" class="form-control"></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Installment amount:</label>
       <div class="col-sm-6"> <input type="text" name="installment_amount" value="NULL" class="form-control" disabled><span style="font-size:15px; color:red;">*This filed fill by Team leader*</span>	</div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Purpose of visit:</label>
        <div class="col-sm-6"><input type="text" name="purpose_of_visit" value="" class="form-control">	</div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Project leader:</label>
       <div class="col-sm-6"> <input type="text" name="project_leader" value="" class="form-control"></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Remark:</label>
       <div class="col-sm-6"> <textarea name="remark" class="form-control" placeholder="Enter Remark..." spellcheck="false"></textarea></div>	
      </div>
         
        <div class="form-group row" style="margin-left:10px;">
          <div class="col-sm-9" align="center">
      <input  type="reset" name="reset" class="btn btn-danger " value="Cancel" style="color:white;">&nbsp;&nbsp;
      <input  type="submit" name="submit-data"class="btn btn-success "  value="Submit"style="color:white;">
    </div>
    </div>
  </form>
</div>

</div>
 </div>
</div>
</div>
</body>
</html>