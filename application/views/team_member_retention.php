<!DOCTYPE html>
<html>
<head>
	<title> Team Member Retention Bonus(TL)</title>
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





<div class="container  mt-3">
  <h5 class="text-center" style="text-decoration: underline;"> Team Member Retention Bonus</h5>

<?php   $msg=$this->session->flashdata('msg');
        $msgf=$this->session->flashdata('msgf');

        $btnmsg=$this->session->flashdata('btnmsg');

        $approve_msgt=$this->session->flashdata('approve_msgt');
        $approve_msgf=$this->session->flashdata('approve_msgf');

        $approve_btn=$this->session->flashdata('approve_btn');

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
  if($btnmsg!="")
  {
    echo "<center>";
    echo "<div  class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$btnmsg</div>";
   echo "</center>";
 }
 if($approve_msgt!="")
  {
    echo "<center>";
    echo "<div  class=' mt-2 alert alert-success alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$approve_msgt</div>";
   echo "</center>";
 }
  if($approve_msgf!="")
  {
    echo "<center>";
    echo "<div  class=' mt-2 alert alert-danger alert-dismissible fade show w-50 p-3'><button type='button' class='close' data-dismiss='alert'>&times;</button>$approve_msgf</div>";
   echo "</center>";
 }
if($approve_btn!="")
{ ?>
   <script>
  alert('<?php echo $approve_btn; ?>');
 window.open('Team_member','_self');
</script>
<?php }

  ?>

  <form action="<?php echo base_url().'Retention/Tl_emp_approval/';?>" method="post">

	<div class="table-responsive"><table class="table table-hover striped">
        <thead class="thead-light">
          <tr>
            <th colspan="3" style="background-color:white; border: none;"></th>
            <th  colspan="2" style="background-color:;">Overseas Training/OJT&nbsp;Duration</th>
            <th colspan="2">Travel Duration</th>
            <th colspan="3" style="background-color:white; border: none;"></th>
            <th colspan="8" class="text-center">Retension Bonus Claim Schedule</th>
            
            
        </tr>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Emp&nbsp;No.</th>
      <th scope="col">Emp&nbsp;Name</th>
     <th scope="col">Start&nbsp;&nbsp;&nbsp;Date</th>
      <th scope="col">OJT&nbsp;End&nbsp;Date</th>
       <th scope="col" >Start&nbsp;&nbsp;&nbsp;Date</th>
      <th scope="col">Return&nbsp;Date</th>
      <th scope="col">Installment Amount(INR)</th>
      <th scope="col">Purpose&nbsp;of&nbsp;visit</th>
       <th scope="col">Project Leader Name(overseas)</th>
      <th scope="col">1st Installment due</th>
      <th scope="col">1st Installment Claim Date</th>
      <th scope="col">2nd Installment due</th>
       <th scope="col">2nd Installment Claim Date</th>
      <th scope="col">3rd Installment due</th>
      <th scope="col">3rd Installment Claim Date</th>
      <th scope="col">4th Installment due</th>
       <th scope="col">4th Installment Claim Date</th>
      <th scope="col">Edit</th>

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
    echo "<td>".$rows->training_start_date."</td>";
    echo "<td>".$rows->training_end_date."</td>";
    echo "<td>".$rows->training_start_date."</td>";
    echo "<td>".$rows->training_end_date."</td>";
    echo "<td>".$rows->installment_amount."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->purpose_of_visit."</td>";
    echo "<td style='text-transform: capitalize;'>".$rows->project_leader."</td>";

    echo "<td>";
       $end_date = $rows->training_end_date;
       // $end_date= date("Y-m-d")
      $time = strtotime( $end_date);
  $final_date1 = date("Y-m-d", strtotime("+6 month", $time));
   echo $final_date1;
   echo"</td>";
 
 echo "<td>"."</td>"; //this td fill  1st installment  claim date 
    
     echo "<td>";
      $time = strtotime($final_date1);
  $final_date2 = date("Y-m-d", strtotime("+6 month", $time));
   echo $final_date2;
 echo"</td>";


    echo "<td>"."</td>";  //this td fill 2nd installment claim date 

    echo "<td>";
      $time = strtotime($final_date2);
  $final_date3 = date("Y-m-d", strtotime("+6 month", $time));
   echo $final_date3;
 echo"</td>";

    echo "<td>"."</td>"; //this td fill 3rd installment claim date

  echo "<td>";
      $time = strtotime($final_date3);
  $final_date4 = date("Y-m-d", strtotime("+6 month", $time));
   echo $final_date4;
 echo"</td>";

    echo "<td>"."</td>";

    ?>
 
    <td>
       
      <?php  $empid=$rows->emp_id;?>
      <a href="<?php echo base_url().'Retention/Tlemp_edit/'.$empid;?>"><i class='far fa-edit' style='font-size:24px'></i></a>
    
    </td>


<?php
echo "</tr>";
$i++;
   }
    ?>
      
    
    

  </tbody>
</table> </div>
<p class="text-center"><b>*If due date is on or before 10th of the month then payment will be on 25 of the same month (in salary).</b></p>
</div>
</section>
 <div class="form-group row" >
          <div class="col-sm-12" align="center">
      
      <button  type="submit" name="Approve" class="btn btn-success" value="save" style="color:white; width:100px;"><i class="fa fa-check"></i>&nbsp;Approve</button>
      </form>
    </div>
    </div>

</body>
</html>