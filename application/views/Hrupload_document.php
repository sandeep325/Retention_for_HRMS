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
<section class="row">
<ul class="nav flex-column mt-3 ml-3 ">
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


   <div class="container mt-3  text-center">
    <h5  >Agreement upload here</h5><br>
     <div>
     <form  action="<?php echo base_url().'Retention/UpdateAgreement/';?>" method="post"  enctype="multipart/form-data">
        <div class="form-group">
        <div class="col-sm-9" >
        	<label for="file-upload">
       <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/699329-icon-57-document-download-128.png" data-toggle="tooltip" title="click here to upload file">
       <input type="file" name="file-upload[]" id="file-upload" style="display:none;"/>
       </label>
       <div id="file-upload-filename" style="color:red;"></div>

       <script>
       var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'File name: ' + fileName;
}
</script>
        </div>
      </div>
      
         
        <div class="form-group" style="margin-left:10px;">
          <div class="col-sm-9" >
           <button type="submit" name="upload" value="upload" class="btn btn-primary">Upload</button>
          </div>
       </div>
  </form>
</div>
</div>
</section>
</body>
</html>