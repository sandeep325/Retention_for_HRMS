<!DOCTYPE html>
<html>
<head>
	<title>Retention Bonus Request</title>
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
<?php  
 $hr_approve_btn=$this->session->flashdata('hr_approve_btn');
 $true_msg=$this->session->flashdata('true_msg');
 $false_msg=$this->session->flashdata('false_msg');

if($hr_approve_btn!="")
{ ?>
   <script>
  alert('<?php echo $hr_approve_btn; ?>');
 window.open('Retention_request','_self');
</script>
<?php 
}

if($true_msg!="")
{
  echo "<center>";
    echo "<div  class=' mt-2 alert alert-success alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$true_msg</div>";
   echo "</center>";
}
if($false_msg!="")
{
  echo "<center>";
    echo "<div  class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$false_msg</div>";
   echo "</center>";
}
?>
<div class="container  mt-3">
  <h5 class="text-center" style="text-decoration: underline;">Retention Bonus Request</h5>
	<form class="form-inline" action="?" method="post">
	 <div class="form-group row ">
        <label  class="mr-sm-2">Select month:</label>
     <select name="month" class="form-control mb-2 mr-sm-2" value="--select month--">
        <option value="all">--All employees--</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
     </select>


   <label class="mr-sm-2">Select year:</label>
     <select name="month" class="form-control mb-2 mr-sm-2" value="--select year--">
        <option value="01">2020</option>
        <option value="02">2019</option>
        <option value="03">2018</option>
        <option value="04">2017</option>
        <option value="05">2016</option>
     </select>

      <input type="submit" class="btn btn-outline-success mb-2" name="submit-data-month">
        </div></form><br>
          <form action="<?php echo base_url().'Retention/HrEmpApproval/';?>" method="post">
     <div class="table-responsive">
     	<table class="table table-hover striped">
        <thead class="thead-light">
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Emp&nbsp;Code</th>
            <th scope="col">Emp&nbsp;&nbsp;Name</th>
            <th scope="col"> Start&nbsp;&nbsp;&nbsp;date</th>
            <th scope="col">Return&nbsp;&nbsp;Date</th>
            <th scope="col">Installment&nbsp;amount (INR)</th>
            <th scope="col">Purpose&nbsp;of visit</th>
            <th scope="col">TL Approval</th>
            <th scope="col">Agreement Upload</th>
            <th scope="col">Remark</th>
            <th scope="col">View</th>
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
                  <input type="checkbox" name= "emps_ids[]" class="custom-control-input" id="<?php echo $empid=$rows->emp_id;?>" value="<?php echo $empid;?>" />
                  <label class="custom-control-label" for="<?php echo $empid=$rows->emp_id;?>"><?php echo $i;?></label>
              </div>
            </td>
            <?php
          echo "<td>".$rows->emp_id."</td>";
          echo "<td style='text-transform: capitalize;'>".$rows->emp_name."</td>";
          echo "<td>".$rows->start_date."</td>";
          echo "<td>".$rows->return_date."</td>";
          echo "<td>".$rows->installment_amount."</td>";
          
          echo "<td style='text-transform: capitalize;'>".$rows->purpose_of_visit."</td>";
          ?>
         <td><i class="fa fa-check text-success fa-2x" data-toggle='tooltip' title='emp approve by team leader'></i></td> 
          <td>
          <a href="<?php echo base_url().'Retention/hrupload/'.$rows->emp_id;?>"><i class="fa fa-upload text-primary fa-2x" data-toggle='tooltip' title='upload greement'></i></a>
        </td>
      
        <?php  echo  "<td>".$rows->remark."</td>"; ?>
        <td><a <?php if($rows->agreement_upload){?> href="<?php echo base_url("HrUploaded_agreements/".$rows->agreement_upload);  }?>" target="_blank"><i class="fa fa-eye text-success fa-2x"  data-toggle='tooltip' title='View emp agreement'></i></a></td>
        </tr>  
          <?php
          $i++;
          }
          ?>
        </tbody>
      </table>
    
  </div><br>
  <div class="form-group row">
  	<div class="col-sm-12" align="center">
<button type="reset" name="reject" class="btn btn-danger" value="reset" style="width:110px;"><i class="fa fa-close"></i>&nbsp;Reject</button> &nbsp;&nbsp;
<button  type="submit" name="Approve" class="btn btn-success" value="save" style=" width:100px;"><i class="fa fa-check"></i>&nbsp;Approve</button></div></div>
   </form>
</div>
</body>
</html> 