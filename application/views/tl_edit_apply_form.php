<!DOCTYPE html>
<html>
<head>
	<title>Tl update emp info </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav  class="navbar navbar-expand-sm navbar-dark bg-dark">
	<a href="#" class="navbar-brand">Indovision Services Pvt. Ltd.</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="mymenu">
	<ul class="navbar-nav ml-auto">
<i class="navbar-item"><a href="#" class="nav-link">Support no Gmail &nbsp;<i class="fa fa-envelope-o" style='font-size:22px'></i></a></i>
    <i class="navbar-item"><a href="#" class="nav-link">Welcome Team leader&nbsp;<i class="fa fa-user" style='font-size:22px'></i></a></i>
    <i class="navbar-item"><a href="#" class="nav-link">Logout</a></i>

	</ul>
	</div>
</nav>
<section class="row">
<ul class="nav flex-column mt-3 ml-3">
          <li class="nav-item bg-white rounded" style="border:1px blue solid;">
                    <a class="nav-link" href="#">

                      <span class="fas fa-tachometer-alt"> Dashboard</span>
                    </a>
              </li>
              
        <li class="nav-item bg-light rounded" style="margin-top:5px;border:1px solid #D6E9C6;">
              <a  class="nav-link text-success"  data-toggle="collapse" href="#Menu">
                Retention Bonus <span class="fas fa-plus"></span>
              </a> 
              
              <div class="collapse" id="Menu">
              <ul class="nav flex-column bg-white rounded" >

                       <li class="nav-item"> 
                        <?php   $ses_retention_empid=$this->session->userdata('empid');?>
                       <a class="nav-link text-success" href="<?php echo base_url().'Retention/EmpRetention/'.$ses_retention_empid ;?>">
                      <i class="  fas fa-file-alt"></i> Apply Form</a>
                       </li>
                
                     
                     <li class="nav-item">
                        <a class="nav-link text-success" href="<?php echo base_url().'Retention/Emp_view/'.$ses_retention_empid;?>">  
                        <i class="fas fa-book-reader"></i> Bonus Status</a>
                      </li>

                    <li class="nav-item"> 
                           <a class="nav-link text-success" href="<?php echo base_url().'Retention/Team_member';?>">
                        <i class="fas fa-users"></i> Staff Request</a>
                     </li>
                 

                     <li class="nav-item"> 
                        <a class="nav-link text-success" href="<?php echo base_url().'Retention/Payment_request/'.$ses_retention_empid;?>">
                       <i class="  fas fa-rupee-sign"></i> Payment Request</a>
                    </li>


              </ul>
            </div>

       </li>
 </ul>



<div class="container">
	  <div class="row justify-content-center">  <!--card in center-->
            <div class="col-sm-8">
		<div class="card mt-4" style="border: 1px solid lightblue;">
 <!--  <div class="card-header">
   Apply for Retention Bonus
  </div> -->
  <div class="card-body">
    <h5 class="card-title" align="center" style="text-decoration:underline; ">Retention Bonus</h5><hr>
     <form method="post" action="<?php echo  base_url().'Retention/Tl_update_emp/'?>" autocomplete="off">
       
   <?php
  foreach ($data as $rows) {
    ?>
      <div class="form-group row ">

        <label class="col-sm-3 form-control-lable">Employee id:</label>
       <div class="col-sm-6"><input type="text" name="emp_id" value="<?php $empid=$rows->emp_id; echo $empid;?>" class="form-control" readonly></div> 
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Employee name:</label>
       <div class="col-sm-6"><input type="text" name="emp_name" value="<?php echo $rows->emp_name;?>" class="form-control" readonly>	</div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Mail id:</label>
       <div class="col-sm-6"> <input type="email" name="mail_id" value="<?php echo $rows->mail_id;?>" class="form-control" readonly>  </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Retention reason:</label>
        <div class="col-sm-6"><input name="retention_reason" value="<?php echo $rows->retention_reason;?>" class="form-control" readonly>

        </div>	
      </div>
      
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Training start date:</label>
        <div class="col-sm-6"><input type="date" name="training_start_date" min="<?php echo date('Y-m-d',strtotime('-2 years'));?>" max="<?php echo date('Y-m-d');?>" value="<?php echo $rows->training_start_date;?>" class="form-control" required></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Training end date:</label>
        <div class="col-sm-6"><input type="date" name="training_end_date" min="<?php echo date('Y-m-d',strtotime('-2 years'));?>" max="<?php echo date('Y-m-d');?>" value="<?php echo $rows->training_end_date;?>" class="form-control" required></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Installment amount:<span style="font-size:20px; color:red;">*</span></label>
       <div class="col-sm-6"> <input type="text" pattern="\d*" maxlength="6" name="installment_amount"  value="<?php echo $rows->installment_amount;?>" class="form-control" required>	</div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Purpose of visit:</label>
        <div class="col-sm-6"><input type="text" name="purpose_of_visit" value="<?php echo $rows->purpose_of_visit;?>" class="form-control"required>	</div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Project leader:</label>
       <div class="col-sm-6"> <input type="text" name="project_leader" value="<?php echo $rows->project_leader;?>" class="form-control" required></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Remark:</label>
       <div class="col-sm-6"> <textarea name="remark" class="form-control"><?php echo $rows->remark;?></textarea></div>	
      </div>
         
        <div class="form-group row" style="margin-left:10px;">
          <div class="col-sm-9" align="center">
      <a  href="<?php echo base_url().'Retention/Team_member/';?>" type="reset"  class="btn btn-danger "  style="color:white;">Cancel</a>&nbsp;&nbsp;
      <input  type="submit" name="update_data"class="btn btn-success "  value="Submit"style="color:white;">
    </div>
    </div>
  <?php } ?>
  </form>
</div>

</div>
 </div>
</div>
</div>
</body>
</section>
</html>