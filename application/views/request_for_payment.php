<!DOCTYPE html>
<html>
<head>
	<title>payment_request</title>
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
		<i class="navbar-item"><a href="#" class="nav-link">Welcome User&nbsp;<i class="fa fa-user" style='font-size:22px'></i></a></i>
		<i class="navbar-item"><a href="#" class="nav-link">Logout</a></i>

	</ul>
	</div>
</nav>

<ul class="nav flex-column ">
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


<?php
$true_msg=$this->session->flashdata('true_msg');
$false_msg=$this->session->flashdata('false_msg');
if($true_msg!="")
{
    echo "<center>";
    echo "<div class=' mt-2 alert alert-success alert-dismissible fade show w-50 p-3'> <button type='button' class='close' data-dismiss='alert'>&times;</button>$true_msg</div>";
    echo "</center>";
  }
  if($false_msg!="")
    {
    echo "<center>";
    echo "<div class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'> <button type='button' class='close' data-dismiss='alert'>&times;</button>$false_msg</div>";
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
    <h5 class="card-title" align="center" style="text-decoration:underline;">Request for payment</h5><hr>
     <form method="post" action="<?php echo base_url().'Retention/PaymentRequest_send';?>" enctype="multipart/form-data">
     <?php foreach($data as $row)
        {?>
       <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Employee name:</label>
       <div class="col-sm-6"><input type="text" name="emp_name" style="text-transform: capitalize;" value="<?php echo $row->emp_name;?>" class="form-control" readonly>	</div>
      </div>
      <div class="form-group row ">
        <label class="col-sm-3 form-control-lable">Employee code:</label>
       <div class="col-sm-6"><input type="text" name="emp_code" value="<?php echo $row->emp_id;?>" class="form-control" readonly></div> 
      </div>
    
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Training name:</label>
        <div class="col-sm-6"><input type="text" name="t_name" style="text-transform: capitalize;" value="<?php echo $row->traning_name;?>" class="form-control" readonly></div>	
      </div>
      
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Installment amount:</label>
        <div class="col-sm-6"><input type="text" name="installment_amount" style="text-transform: capitalize;" value="<?php echo $row->installment_amount;?>" class="form-control" readonly></div>  
      </div>


      <?php  }  ?>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Attache training document:<span style="font-size:20px; color:red;">*</span></label>
        <div class="col-sm-6"><input type="file" name="training_doc[]" value="" class="form-control" required/></div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">EP approval:<span style="font-size:20px; color:red;">*</span></label>
       <div class="col-sm-6"> <input type="file" name="ep_approval[]" value="" class="form-control" required/></div>	
            </div>
       <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Other&nbsp;document:</label>
       <div class="col-sm-6"> <input type="file" name="other_document[]" value="" class="form-control"></div>	
      </div>
      <div class="form-group row">
        <label class="col-sm-3 form-control-lable">Remark:</label>
       <div class="col-sm-6"> <textarea name="remark" class="form-control" placeholder="Enter Remark..."></textarea></div>	
      </div>
         
        <div class="form-group row" style="margin-left:10px;">
          <div class="col-sm-12" align="center">
  <button type="reset" name="Cancel" class="btn btn-danger " value="Cancel" style="color:white;width:100px;">Cancel</button>&nbsp;&nbsp;
      <button  type="submit" name="submit_payment_request" class="btn btn-success" value="Submit" style="color:white; width:100px;">Submit</button>
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