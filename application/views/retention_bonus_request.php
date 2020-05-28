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
		<i class="navbar-item"><a href="#" class="nav-link">Welcome Admin&nbsp;<i class="fa fa-user" style='font-size:22px'></i></a></i>
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
                      
                       <a class="nav-link text-success" href="<?php echo base_url().'Retention/Retention_request';?>">
                      <i class="fas fa-users"></i> Bonus Request</a>
                       </li>
                
                    <li class="nav-item"> 
                           <a class="nav-link text-success" href="<?php echo base_url().'Retention/Payment_list';?>">
                        <i class="  fas fa-rupee-sign"></i> Payment Request</a>
                     </li>


              </ul>
            </div>

       </li>
 </ul>



<div class="container  mt-3">
  <h5 class="text-center" style="text-decoration: underline;">Retention Bonus Request</h5>

  <?php  
 //THIS ALERT MSG WHEN USER CLICK WITHOUT CHECK EMPS
 $hr_approve_btn=$this->session->flashdata('hr_approve_btn');

 // THIS FLASH MSG FOR WHEN HR APPROVE EMPLOYEES
 $true_msg=$this->session->flashdata('true_msg');
 $false_msg=$this->session->flashdata('false_msg');

//THIS FLASH MSG FOR WHEN FILE UPLOADED 
 $true_uploaded_msg=$this->session->flashdata('true_uploaded_msg');
 $false_uploaded_msg=$this->session->flashdata('false_uploaded_msg');

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
if($true_uploaded_msg!="")
{
  echo "<center>";
    echo "<div  class=' mt-2 alert alert-success alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$true_uploaded_msg</div>";
   echo "</center>";
}

if($false_uploaded_msg!="")
{
  echo "<center>";
    echo "<div  class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$false_uploaded_msg</div>";
   echo "</center>";
}
?>
	<form class="form-inline" action="<?php echo base_url().'Retention/year_month_Retention_filter'?>" method="post">
	 <div class="form-group row ">
        <label  class="mr-sm-2">Select month:</label>
     <select name="month" class="form-control mb-2 mr-sm-2" value="" required="true"   oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('please select the month')">
        <option value="">--select month--</option>
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
     <select name="year" class="form-control mb-2 mr-sm-2" value="" required="true"  oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('please select the year')">
      <option value="">--select year--</option>
        <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
        <option value="<?php echo date('Y',strtotime('-1 years'));?>"><?php echo date('Y',strtotime('-1 years'));?></option>
        <option value="<?php echo date('Y',strtotime('-2 years'));?>"><?php echo date('Y',strtotime('-2 years'));?></option>
        <option value="<?php echo date('Y',strtotime('-3 years'));?>"><?php echo date('Y',strtotime('-3 years'));?></option>


     </select>

      <input type="submit" class="btn btn-outline-success mb-2" name="month_year_btn" value="submit">
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
            <th scope="col">Installment&nbsp;amount&nbsp;(INR) </th>
            <th scope="col">  Purpose&nbsp;of&nbsp;visit </th>
            <th scope="col"> TL&nbsp;Approval</th>
            <th scope="col">Agreement</th>
            <th scope="col">&nbsp;Remark&nbsp;</th>
          
             </tr>
        </thead>
        <tbody>
      <?php if($data>0 and $data !=400){?>

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
          echo "<td>".date('d-m-Y',strtotime($rows->start_date))."</td>";
          echo "<td>".date('d-m-Y',strtotime($rows->return_date))."</td>";
          echo "<td>".$rows->installment_amount."</td>";
          
          echo "<td style='text-transform: capitalize;'>".$rows->purpose_of_visit."</td>";
          ?>
         <td><i class="fa fa-check text-success fa-2x" data-toggle='tooltip' title='Approved by team leader'></i></td> 
          <td>
            <?php if($rows->agreement_upload){?>
          <a href="<?php echo base_url("HrUploaded_agreements/".$rows->agreement_upload);?>" target="_blank"><i class="fa fa-paperclip text-success fa-2x text-success fa-2x"  data-toggle='tooltip' title='View emp agreement'></i></a>
            <?php } else{?>
           <a href="<?php echo base_url().'Retention/Hrupload/'.$rows->id;?>"><i class="fa fa-upload text-primary fa-2x" data-toggle='tooltip' title='upload greement'></i></a>
         <?php } ?>
        </td>
      
        <?php  echo  "<td>".$rows->remark."</td>"; ?>

        </tr>  
          <?php
          $i++;
          }//foreach END

        }//if end
        else
        {
          echo"<tr>";
          echo"<td></td>";
          echo"<td colspan='2'></td>";

          echo"<td colspan='5' ><b class='text-danger' align='center'>No data found !</b></td>";
          echo"</tr>";
        }

          ?>
        
        </tbody>
      </table>
    
  </div><br>
  <div class="form-group row">
  	<div class="col-sm-12" align="center">
<button  type="submit" name="Approve" class="btn btn-success" value="save" style=" width:100px;"><i class="fa fa-check"></i>&nbsp;Approve</button></div></div>
   </form>
</div>

</section>
</body>
</html> 