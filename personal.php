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
               <img src="logoimages/bekreta.png" width="100" height="40">
              <div data-role="navbar" class="steppro">
                <ul class="list-unstyled multi-steps">
               <li><a href = "personal.php">Personal</a></li>
               <li><a href = "financial.php">Financials</a></li>
               <li><a href = "#">Business Plan</a></li>
                </ul>
            </div><!-- /navbar -->
         </div>
         </div>
         <div data-role = "main" class = "ui-content">
                     <h2 align="center"> Personal </h2>
                     <h1> (I) Brief Your Milestone</h1>
                     <div data-role="collapsible" data-theme="b" data-content-theme="a" data-collapsed="true" style="width: 250px;">
                         <h4>Milestone</h4>
                         <form method="post">
                           <input type="text" id="bdate" placeholder="Enter Date(Ex.DD/MM/YYYY)" value="" required>
                           <input type="text" id="bmilestone" placeholder="Brief Milestone" value="" required>
                           <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row">Add Milestone</button>
                        </form>
                     </div>
                  <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 300px; margin-top: -50px;"></button>
                     <script type="text/javascript">
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
                     </script>
                     <div style="position:absolute; margin-top:150px;">
                     <h1> (II) Core Team Members</h1>
                     <div data-role="collapsible" data-theme="b" data-content-theme="a" data-collapsed="true" style="width: 250px;">
                      <h4>Employee</h4>
                        <form>
                           <input type="text" id="empname" placeholder="Employee Name" required>
                           <input type="text" id="designation" placeholder="Designation" required>
                           <input type="text" id="exp" placeholder="Exp." required>
                           <input type="text" id="about" placeholder="About Employee" required>
                           <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row1">Add Employee</button>
                        </form>
               </div>
               <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row1" style="margin-left: 300px; margin-top: -40px;"></button>
                     </div>
               <script type="text/javascript">
                  $(".add-row1").click(function(){
                     var empname=$("#empname").val();
                     var desg=$("#designation").val();
                     var ex=$("#exp").val();
                     var ab=$("#about").val();
                     var markon="<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"empname[]\" value=\""+empname+"\">"+empname+"</td><td><input type=\"hidden\" name=\"designation[]\" value=\""+desg+"\">"+desg+"</td><td><input type=\"hidden\" name=\"exp[]\" value=\""+ex+"\">"+ex+"</td><td><input type=\"hidden\" name=\"about[]\" value=\""+ab+"\">"+ab+"</td></tr>";
                     $("#exptable1 tbody").append(markon);
                     $("#empname").val("");
                     $("#designation").val("");
                     $("#exp").val("");
                     $("#about").val("");
                  });

                  //Find and remove select table rows
                        $(".delete-row1").click(function(){
                           $("#exptable1 tbody").find('input[name="record"]').each(function(){
                              if($(this).is(":checked")){
                                 $(this).parents("tr").remove();
                              }
                           });
                        });
               </script>
            <div style="margin-top:350px;">
            <form method="post" action="#">
            <div style="position:absolute; margin-top:120px; width:500px;">
             <table data-role="table" id="exptable" class="ui-responsive table-stroke milestone">
                        <thead>
                           <tr>
                           </tr>
                        </thead>
                        <tbody>
                        <?php 
                           error_reporting(0);
                           include('db.php');
                           $sql1="SELECT * FROM personal WHERE id = 1";
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
            </div>
            <!-- Employee Table -->
            <div style="position:absolute; margin-top:-40px; width:1000px;">
            <table data-role="table" id="exptable1" class="ui-responsive table-stroke">
                  <thead>
                     <tr>
                     </tr>
                  </thead>
                  <tbody>
                  <?php 
                  include('db.php');
                  $sql2="SELECT * FROM personal WHERE id = 1";
                  $result1=mysqli_query($conn,$sql2);
                  $n2=mysqli_num_rows($result1);
                  if($n2 > 0)
                  {
                     $row1=mysqli_fetch_assoc($result1);
                     $empname=json_decode($row1['empname'],true);
                     $design=json_decode($row1['design'],true);
                     $exp=json_decode($row1['exp'],true);
                     $about=json_decode($row1['about'],true);
                  }
                  $n3=sizeof($empname);
                  $j=0;
                  while($n3 > 0)
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
                        $n3--;
                        $j++;
                     }
                     ?>
                  </tbody>
               </table>
               </div>
               <div style="position:absolute; margin-top:200px;">
            <input type="submit" name="nxt_submit" value="Next" data-inline="true">
            </div>
            </form>
            </div>
         </div>
         <!-- <div data-role = "footer">
            <h1>Copyright</h1>   
         </div> -->
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