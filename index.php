<!DOCTYPE html>
<html>
   <head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel="stylesheet" href="./jquery.mobile/demos/css/themes/default/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="./jquery.mobile/demos/_assets/css/jqm-demos.css">
		<link rel="shortcut icon" href="./favicon.ico">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<script src="./jquery.mobile/demos/js/jquery.js"></script>
		<script src="./jquery.mobile/demos/_assets/js/index.js"></script>
		<script src="./jquery.mobile/demos/js/jquery.mobile-1.4.5.min.js"></script>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div data-role = "page">
      <div data-role = "header">
            <div class = "ui-body-a ui-body">
               <img src="logoimages/bekreta.png" width="120" height="50">
              <div data-role="navbar">
                <ul>
               <li><a href = "#">Home</a></li>
               <li><a href = "#">Pricing</a></li>
               <li><a href = "#">Billing Histroy</a></li>
               <li><a href = "#">FAQ</a></li>
               <li><a href = "#">GUEST</a></li>
                </ul>
            </div><!-- /navbar -->
         </div>
         </div>
         <div data-role = "main" class = "ui-content">
            <h1> Register - Business Account</h1>
            <form method = "post" action = "#">
               <div class="column">
                  <div class="card">
                  <label class="lb">Company Profile</label>
                  <input type="text" name="fullname" placeholder="Full Name">
                  <label for="logo"><B>LOGO</B></label>
                  <input type="file" name="logo">
                  <label for="address"><B>Address</B></label>
                  <input type="text" name="address" maxlength="1000">
                  <label for="contact"><B>Contact Number</B></label>
                  <input type="text" name="contact">
                  <label for="email"><B>Email</B></label>
                  <input type="email" name="email">
                  <label for="gstin"><B>GSTIN Number</B></label>
                  <input type="text" name="gstin">
               </div>
               </div>
               <div class="column1">
                  <div class="card">
                  <label class="lb">Company Information</label>
                  <label for="cname"><B>Company Name</B></label>
                  <input type="text" name="cname">
                  <label for="desg"><B>Designation</B></label>
                  <input type="text" name="designation">
                  <label><B>Deal Size ( In Lakhs )</B></label>
                  <label for="from"><B>From: </B></label>
                  <input type="text" name="from">
                  <label for="to"><B>To: </B></label>
                  <input type="text" name="to">
                  <label for="industrytype"><B>Industry Type</B></label>
                  <select name="industrytype">
                     <option selected value="">--select--</option>
                     <option value="Agriculture and Allied Industries">Agriculture and Allied Industries</option>
                     <option value="Media and Entertainment">Media and Entertainment</option>
                     <option value="Metals And Mining">Metals And Mining</option>
                     <option value="Oil and Gas">Oil and Gas</option>
                     <option value="Pharmaceuticals">Pharmaceuticals</option>
                     <option value="Ports">Ports</option>
                     <option value="Power">Power</option>
                     <option value="Railways">Railways</option>
                     <option value="Real Estate">Real Estate</option>
                     <option value="Renewable Energy">Renewable Energy</option>
                     <option value="Retail">Retail</option>
                     <option value="Roads">Roads</option>
                     <option value="Science and Technology">Science and Technology</option>
                     <option value="Services">Services</option>
                     <option value="Textiles">Textiles</option>
                     <option value="Others">Others</option>
                  </select>
                  <label for="emailproposal"><B>Email Proposal</B></label>
                  <select name="emailproposal">
                     <option selected value="">--select--</option>
                     <option value="Real Time">Real Time</option>
                     <option value="Daily">Daily</option>
                     <option value="Weekly">Weekly</option>
                     <option value="Fortnightly">Fortnightly</option>
                     <option value="No email">No email</option>
                  </select>
                  <label for="fburl"><B>Facebook (url:)</B></label>
                  <input type="text" name="fburl">
                  <label for="linkedinurl"><B>Linkedin (url:)</B></label>
                  <input type="text" name="linkedinurl">
               </div>
               </div>
               <input type="submit" name="submit" value="Submit" data-inline="true">
            </form> 
         </div>
         <div data-role = "footer">
            <h1>Copyright</h1>   
         </div>
      </div>
   </body>
</html>

<?php
error_reporting(0);
include('db.php');
$fname=$_POST['fullname'];
$add=$_POST['address'];
$cn=$_POST['contact'];
$email=$_POST['email'];
$gst=$_POST['gstin'];
$cname=$_POST['cname'];
$from=$_POST['from'];
$to=$_POST['to'];
$itype=$_POST['industrytype'];
$eproposal=$_POST['emailproposal'];
$fb=$_POST['fburl'];
$linkedin=$_POST['linkedinurl'];
$allowTypes=array('png','jpg','jpeg','jfif','gif');
$logoimage=basename($_FILES['logo']['name']);
$filePath=pathinfo("logoimages/$logoimage",PATHINFO_EXTENSION);
if(in_array($filePath, $allowTypes))
{
   if(move_uploaded_file($_FILES['logo']['tmp_name'], "logoimages/$logoimage"))
   {
      
   }
   else
   {
      echo "<script type='text/JavaScript'>";
      echo "alert('Image Not uploaded!!!')";
      echo "</script>";     
   }
}
else
{
   echo "<script type='text/JavaScript'>";
   echo "alert('Image Not Suppoted!!!')";
   echo "</script>";
}
?>
