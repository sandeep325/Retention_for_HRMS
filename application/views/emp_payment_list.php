<!DOCTYPE html>
<html>
<head>
	<title>Emp payment list</title>
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
<div class="container  mt-3">
  <h5 class="text-center" style="text-decoration: underline;">List of Employees payments</h5>
	
        	<form  action="<?php echo base_url().'Retention/HrPayments_accept';?>" method="post">
     <div class="table-responsive">
     	<table class="table table-hover striped">
        <thead class="thead-light">
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Emp&nbsp;Code</th>
            <th scope="col">Emp&nbsp;Name</th>
            <th scope="col"> Training&nbsp;&nbsp;name </th>
            <th scope="col">Installment amount(INR)</th>
            <th scope="col">1st Installment</th>
            <th scope="col">2nd Installment</th>
            <th scope="col">3rd Installment</th>
            <th scope="col">4th Installment</th>
            <th scope="col">View Attachments</th>
            <th scope="col"> Remark </th>
             <th scope="col">Status</th>
            
             </tr>
        </thead>
        <tbody>

  <?php
  $i=1;
  foreach ($data as $rows) {
    echo "<tr>";
    ?>
    <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" name= "ids[]" class="custom-control-input" id="<?php echo $id=$rows->id;?>" value="<?php echo $id;?>" />
                  <label class="custom-control-label" for="<?php echo $id=$rows->id;?>"><?php echo $i;?></label>
              </div>
            </td>
    <?php
    echo "<td>".$rows->emp_id."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->emp_name."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->training_name."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->installment_amount."</td>";
    echo"<td> </td>";
    echo"<td> </td>";
    echo"<td> </td>";
    echo"<td> </td>";
    ?>
      <td><a href="<?php echo base_url("TrainingDoc/".$rows->training_document);?>" target="_blank"><i class="fa fa-paperclip text-success fa-2x"></i></a>&nbsp;<a href="<?php echo base_url("EpApproval_files/".$rows->ep_approval);?>" target="blank"><i class="fa fa-paperclip text-success fa-2x"></i></a>&nbsp;<a href="<?php echo base_url("Other_doc/".$rows->other_doc);?>" target="blank"><i class="fa fa-paperclip text-success fa-2x"></i></a></td>
              
      <?php echo "<td style='text-transform: capitalize;'>".$rows->remark."</td>";?>

   <?php
   echo "</tr>";
   $i++;
 
    }?>

        </tbody>
      </table>
    
  </div><br>
  <div class="form-group row">
  	<div class="col-sm-12" align="center">
<button type="reset" name="reject" value="reject"class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;Reject</button> &nbsp;&nbsp;
<button type="submit" name="Accept" value="Accept" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;Accept</button></div></div>
   </form>
</div>
</body>
</html>