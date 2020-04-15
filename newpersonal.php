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
<div data-role="page">
<div data-role = "header">
            <div class = "ui-body-a ui-body">
               <img src="logoimages/bekreta.png" width="100" height="40">
              <div data-role="navbar" class="steppro">
                <ul class="list-unstyled multi-steps">
               <li><a href = "demppersonal.php">Personal</a></li>
               <li><a href = "financial.php">Financials</a></li>
               <li><a href = "#">Business Plan</a></li>
                </ul>
            </div><!-- /navbar -->
         </div>
         </div>
      	<div data-role = "main" class = "ui-content">
			<form method="post" action="#">                     
			<h2 align="center"> Personal </h2> 
      		 <h1> (I) Brief Your Milestone</h1>
      <a href="#myPopup" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b">Milestone</a>
      <div data-role="popup" id="myPopup" style="width:250px; height:200px; background-color:#ddd;">
        <h3 align="center">Brief Milestone</h3>
        <input type="text" id="bdate" placeholder="Enter Date(Ex.DD/MM/YYYY)" value="" required/>
        <input type="text" id="bmilestone" placeholder="Brief Milestone" value="" required/>
        <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row">Add Milestone</button>
      </div>
        <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 150px; margin-top: -50px; position:absolute;"></button>
      		 <table data-role="table" id="exptable" class="ui-responsive table-stroke">
                        <thead>
                           <tr>
                           </tr>
                        </thead>
                        <?php 
                           error_reporting(0);
                           include('db.php');
                           $sql1="SELECT * FROM personal WHERE id = 3";
                           $result=mysqli_query($conn,$sql1);
                           $n=mysqli_num_rows($result);
                           if($n > 0)
                           {
                              $row=mysqli_fetch_assoc($result);
                              $mdate=json_decode($row['mdate'],true);
                              $mname=json_decode($row['mname'],true);
                           }
                           $n1=sizeof($mdate);
                           $i=0;
                           while($n1 > 0)
                           {
                           ?>
                        <tbody>
                           <tr>
                              <td><input type="checkbox" name="record"></td>
                              <td><input type="hidden" name="tdate[]" value="<?=$mdate[$i]?>"><?=$mdate[$i]?></td>
                              <td><input type="hidden" name="tmilestone[]" value="<?=$mname[$i]?>"><?=$mname[$i]?></td>
                           </tr>
                           <?php 
                              $n1--;
                              $i++;
                              }
                           ?>
                        </tbody>
                     </table>
                     <h1> (II) Core Team Members</h1>
                     <a href="#myPopup1" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b">Employee</a>
                     <div data-role="popup" id="myPopup1" style="width:350px; height:300px; background-color:#ddd;">
                        <h3 align="center">Team Members Details</h3>
                        <input type="text" id="empname" placeholder="Enter Employee Name" value="" required/>
                        <input type="text" id="desg" placeholder="Enter Desgination" value="" required/>
                        <input type="text" id="exp" placeholder="Enter Experience" value="" required/>
                        <input type="text" id="about" placeholder="Enter About" value="" required/>
                        <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row1">Add Employee</button>
                     </div>
               <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row1" style="margin-left: 150px; margin-top: -50px; position:absolute;"></button><br>
               <table data-role="table" id="emptable" class="ui-responsive table-stroke">
               <thead>
               <tr>
               </tr>
               </thead>
               <tbody>
               <?php
                  error_reporting(0);
                  include('db.php');
                  $sql2="SELECT * FROM personal WHERE id = 3";
                  $result1=mysqli_query($conn,$sql2);
                  $num=mysqli_num_rows($result1);
                  if($num > 0)
                  {
                     $row2=mysqli_fetch_assoc($result1);
                     $empname=json_decode($row2['empname'],true);
                     $design=json_decode($row2['design'],true);
                     $exp=json_decode($row2['exp'],true);
                     $about=json_decode($row2['about'],true);
                  }
                  $m=sizeof($empname);
                  $j=0;
                  while($m > 0)
                  {
               ?>
               <tr>
                        <td><input type="checkbox" name="record"></td>
                        <td><input type="hidden" name="empname[]" value="<?=$empname[$j]?>"><?=$empname[$j]?></td>
                        <td><input type="hidden" name="designation[]" value="<?=$design[$j]?>"><?=$design[$j]?></td>
                        <td><input type="hidden" name="exp[]" value="<?=$exp[$j]?>"><?=$exp[$j]?></td>
                        <td><input type="hidden" name="about[]" value="<?=$about[$j]?>"><?=$about[$j]?></td>
               </tr>
               <?php
                  $m--;
                  $j++;
               }
               ?>
               </tbody>
               </table>
            <input type="submit" name="nxt_submit" value="Save & Next" data-inline="true"/>
			</form>
            <script type="text/javascript">
                        $(document).ready(function(){

                           //Add data on table row
                           $(".add-row").click(function(){
                           var nametxt=$("#bdate").val();
                           var mstone=$("#bmilestone").val();
                           var markup="<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"tdate[]\" value=\""+nametxt+"\">"+nametxt+"</td><td><input type=\"hidden\" name=\"tmilestone[]\" value=\""+mstone+"\">"+mstone+"</td></tr>";
                           $("#exptable tbody").append(markup);
                           $("#bdate").val("");
                           $("#bmilestone").val("");
                        });

                        //Find and remove select table rows
                        $(".delete-row").click(function(){
                           $("#exptable tbody").find('input[name="record"]').each(function(){
                              if($(this).is(":checked")){
                                 $(this).parents("tr").remove();
                              }
                           });
                        });

                           //Add data on employee table
                           $(".add-row1").click(function(){
                              var ename=$("#empname").val();
                              var ds=$("#desg").val();
                              var ex=$("#exp").val();
                              var ab=$("#about").val();
                              var markdown="<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"empname[]\" value=\""+ename+"\">"+ename+"</td><td><input type=\"hidden\" name=\"designation[]\" value=\""+ds+"\">"+ds+
                              "</td><td><input type=\"hidden\" name=\"exp[]\" value=\""+ex+"\">"+ex+
                              "</td><td><input type=\"hidden\" name=\"about[]\" value=\""+ab+"\">"+ab+"</td></tr>";
                              $("#emptable tbody").append(markdown);
                              $("#empname").val("");
                              $("#desg").val("");
                              $("#exp").val("");
                              $("#about").val("");
                           });

                           //Find and remove select table row in employee
                           $(".delete-row1").click(function(){
                              $("#emptable tbody").find('input[name="record"]').each(function(){
                                 if($(this).is(":checked"))
                                 {
                                    $(this).parents("tr").remove();
                                 }
                              });
                           });
                        });
                     </script>
      	</div>
</div>
</body>
</html>
<?php
error_reporting(0);
include('db.php');
if(isset($_POST['nxt_submit']))
{
   $sql="INSERT INTO personal VALUES('','".json_encode($_POST['tdate'])."','".json_encode($_POST['tmilestone'])."','".json_encode($_POST['empname'])."','".json_encode($_POST['designation'])."','".json_encode($_POST['exp'])."','".json_encode($_POST['about'])."')";
   if(mysqli_query($conn,$sql))
   {
      header("Location: financial.php");
   }
   else
   {
      echo"<script type='text/JavaScript'>alert('Data is not saved!!!')</script>";
      header("Location: personal.php");
   }
}
?>
