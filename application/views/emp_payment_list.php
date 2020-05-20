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
		<i class="navbar-item"><a href="#" class="nav-link">Welcome Admin&nbsp;<i class="fa fa-user" style='font-size:22px'></i></a></i>
		<i class="navbar-item"><a href="#" class="nav-link">Logout</a></i>

	</ul>
	</div>
</nav>

<ul class="nav flex-column">
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
                        <i class=" fas fa-rupee-sign"></i> Payment Request</a>
                     </li>


              </ul>
            </div>

       </li>
 </ul>




<?php   $true_msg=$this->session->flashdata('true_msg');
        $false_msg=$this->session->flashdata('false_msg');
        $hr_accept_btn=$this->session->flashdata('hr_accept_btn');


  if ($true_msg !="")
  {
    echo "<center>";
    echo "<div class=' mt-2 alert alert-success alert-dismissible fade show w-50 p-3'> <button type='button' class='close' data-dismiss='alert'>&times;</button>$true_msg</div>";
    echo "</center>";
  }
  if($false_msg!="")
  {
    echo "<center>";
    echo "<div  class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$false_msg</div>";
   echo "</center>";
  }
  if($hr_accept_btn!="")
{ ?>
   <script>
  alert('<?php echo $hr_accept_btn; ?>');
 window.open('Payment_list','_self');
</script>
<?php } ?>
<div class="container  mt-3">
  <h5 class="text-center" style="text-decoration: underline;">List of Employees payments</h5>
	
        	<form  action="<?php echo base_url().'Retention/HrPayments_action';?>" method="post">
     <div class="table-responsive">
     	<table class="table table-hover striped">
        <thead class="thead-light">
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Emp&nbsp;Code</th>
            <th scope="col">Emp&nbsp;Name</th>
            <th scope="col"> Training&nbsp;&nbsp;name </th>
            <th scope="col">Installment amount(INR)</th>
            <th scope="col"> &nbsp;1st &nbsp;Installment&nbsp;</th>
            <th scope="col">&nbsp;2nd &nbsp;Installment&nbsp;</th>
            <th scope="col">&nbsp;3rd &nbsp;Installment&nbsp;</th>
            <th scope="col">&nbsp;4th &nbsp;Installment&nbsp;</th>
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
                  <input type="checkbox" name= "ids[]" class="custom-control-input" id="<?php echo $id=$rows->id;?>" value="<?php echo $id;?>" 
                      <?php   $status=$rows->status; if($status!=""){echo 'checked disabled';}?> />
                  <label class="custom-control-label" for="<?php echo $id=$rows->id;?>"><?php echo $i;?></label>
              </div>
            </td>
    <?php
    echo "<td>".$rows->emp_id."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->emp_name."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->training_name."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->installment_amount."</td>";
    $fstdate=$rows->return_date;
          $date = strtotime($fstdate);
  $fst_installment = date("Y-m-d", strtotime("+6 month", $date));

  echo "<td> <lable data-toggle='tooltip'  title='Due date'>".$fst_installment."<br></lable>/<lable data-toggle='tooltip' title='claim date'>YY-mm-dd</lable> </td>";

   $date= strtotime($fst_installment);
   $sec_installment=date("Y-m-d",strtotime("+6month",$date));
  echo "<td>  <lable data-toggle='tooltip'  title='Due date'>".$sec_installment."<br></lable>/<lable data-toggle='tooltip' title='claim date'>YY-mm-dd</lable> </td>";

$date=strtotime($sec_installment);
$third_installment= date("Y-m-d",strtotime("+6month",$date));
echo "<td> <lable data-toggle='tooltip'  title='Due date'>".$third_installment."<br></lable>/<lable data-toggle='tooltip' title='claim date'>YY-mm-dd</lable> </td>";

$date=strtotime($third_installment);
$fourth_installment=date("Y-m-d",strtotime("+6month",$date));
echo "<td>  <lable data-toggle='tooltip'  title='Due date'>".$fourth_installment."<br></lable>/<lable data-toggle='tooltip' title='claim date'>YY-mm-dd</lable> </td>";
  ?>
    
    
      <td>
        <a  <?php if($rows->training_document){?> href="<?php echo base_url("TrainingDoc/".$rows->training_document); }?>" data-toggle="tooltip"  title="Training document" target="_blank"><i class="fa fa-paperclip text-success fa-2x"></i></a>&nbsp;
        <a <?php if($rows->ep_approval){?> href="<?php echo base_url("EpApproval_files/".$rows->ep_approval); }?>" data-toggle="tooltip" title="Ep Approval" target="blank"><i class="fa fa-paperclip text-success fa-2x"></i></a>&nbsp;
        <a <?php if($rows->other_doc){?> href="<?php echo base_url("Other_doc/".$rows->other_doc); } ?>" data-toggle="tooltip" title="Additional document" target="blank"><i class="fa fa-paperclip text-success fa-2x"></i></a>
      </td>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
         
      <?php echo "<td style='text-transform: capitalize;'>".$rows->remark."</td>";?>
       <td><?php  $status=$rows->status;
             if($status== 11)
              { echo "<lable class='badge badge-success' data-toggle='tooltip' title='emp payment request Accepted'>Accept</lable>"; }
              if($status==10)
              {echo "<label class='badge badge-danger' data-toggle='tooltip' title='emp payment request Reject'>Reject</label>";}
              if($status=="")
              {
                echo "<lable class='badge badge-primary' data-toggle='tooltip' title='emp payment request pending'>Pending</lable>";
              } ?></td>


   <?php
   echo "</tr>";
   $i++;
 
    }?>

        </tbody>
      </table>
    
  </div><br>
  <div class="form-group row">
  	<div class="col-sm-12" align="center">
<button type="submit" name="reject" value="reject"class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;Reject</button> &nbsp;&nbsp;
<button type="submit" name="Accept" value="Accept" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;Accept</button></div></div>
   </form>
</div>
</body>
</html>