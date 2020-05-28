<!DOCTYPE html>
<html>
<head>
	<title>Emp view retention</title>
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
  <h5 class="text-center" style="text-decoration: underline;">Retention Bonus</h5>
  
	<div class="table-responsive"><table class="table" id="employee_data">
     <thead class="thead-light">
       <tr>
            <th colspan="2" style="background-color:white; border: none;"></th>
            <th  colspan="2" style="background-color:;">Overseas Training/OJT&nbsp;Duration</th>
            <th colspan="2">Travel Duration</th>
            <th colspan="3" style="background-color:white; border: none;"></th>
            <th colspan="8" class="text-center">Retension Bonus Claim Schedule</th>
            
            
        </tr>
    <tr>
      <th scope="col
      ">Emp No.</th>
      <th scope="col">Emp&nbsp;Name</th>
     <th scope="col">&nbsp;Start&nbsp;&nbsp;Date</th>
      <th scope="col">OJT&nbsp;End&nbsp;Date</th>
       <th scope="col"> &nbsp;Start&nbsp;&nbsp;Date</th>
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
      <th scope="col">Agreement </th>
      </tr>
  </thead>
  <tbody>
    <tr>
       <?php foreach ($data as $row) {
      ?>
    <tr>
      <td><?php echo $row->emp_id;?></td>
      <td style='text-transform: capitalize;'><?php echo $row->emp_name;?></td>
      <td><?php echo date("d-m-Y",strtotime($row->training_start_date));?></td>
      <td><?php echo date("d-m-Y",strtotime($row->training_end_date));?></td>
      <td><?php echo date("d-m-Y",strtotime($row->training_start_date));?></td>
      <td><?php echo date("d-m-Y",strtotime($row->training_end_date));?></td>
      <td><?php echo $row->installment_amount;?></td>
      <td style='text-transform: capitalize;'><?php echo $row->purpose_of_visit;?></td>
      <td style='text-transform: capitalize;'><?php echo $row->project_leader;?></td>
      <?php
       $end_date = $row->training_end_date;
       // $end_date= date("Y-m-d")
      $time = strtotime( $end_date);
  $final_date1 = date("d-m-Y", strtotime("+6 month", $time));
   ?>
      <td><?php echo $final_date1;?></td>
      <td><i class="fa fa-spinner fa-spin text-success fa-2x "></i></td>  <!--1st installment claim date here-->
      <td><?php $time=strtotime($final_date1);
       $final_date2=date("d-m-Y",strtotime("+6 month",$time));
            echo $final_date2;?></td>
      <td><i class="fa fa-spinner fa-spin text-success fa-2x "></i></td><!--2nd installment claim date here-->
       <td><?php $time=strtotime($final_date2);
       $final_date3=date("d-m-Y",strtotime("+6 month",$time));
            echo $final_date3;?></td>
      <td><i class="fa fa-spinner fa-spin text-success fa-2x "></i></td> <!--3rd installment claim date here-->
         <td><?php $time=strtotime($final_date3);
       $final_date4=date("d-m-Y",strtotime("+6 month",$time));
            echo $final_date4;?></td>
      <td><i class="fa fa-spinner fa-spin text-success fa-2x "></i></td> <!--4th installment claim date here-->


      <td>
        <center>
        <?php if($row->agreement_upload) {?>
        <a href="<?php echo base_url("HrUploaded_agreements/".$row->agreement_upload);  ?>" target="_blank"><i class="fa fa-paperclip text-success fa-2x" data-toggle="tooltip" title="view agreement"></i></a>
       <?php }else { echo "_____";}?>
       </center>
      </td>


   </tr>
    <?php }?>

  </tbody>
</table> </div>
<p class="text-center"><b><i style="color:red;">*</i>If due date is on or before 10th of the month then payment will be on 25 of the same month (in salary).</b></p>
</div>


<!-- FOR DOWNLOAD -->
<script >  
  function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
</section>
<center>
<button type="button" onclick="exportTableToExcel('employee_data', 'Employee_retention_data')"   class="btn btn-outline-primary">Download Form &nbsp;&nbsp;<i class="fa fa-download"></i></button>
</center>
</body>
</html>