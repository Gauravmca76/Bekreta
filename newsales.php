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
               <li><a href = "#">Company Profile</a></li>
               <li><a href = "#">Marketing and Research</a></li>
            	<li><a href = "newsales.php">Sales</a></li>
               <li><a href = "demppersonal.php">Personal</a></li>
               <li><a href = "financial.php">Financials</a></li>
               <li><a href = "#">Business Plan</a></li>
                </ul>
            </div><!-- /navbar -->
         </div>
         </div>
         <div data-role = "main" class = "ui-content">
         <form method="post" action="#">
         <h2 align="center"> Sales & Marketing </h2>
         <h2> Marketing Expenses</h2>
         <h5> <p style="font-size:medium">Marketing expense is comprised of those costs incurred to present an organization's goods and services to prospective customers. Examples of costs that are classified as marketing expenses are: Most marketing expenses are charged to expense in the period incurred, though some printed materials and advertising costs can be treated as prepaid expenses.</p></h5>
         <a href="#myPopup" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b">Add Marketing Expenses</a>
         <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 300px; margin-top: -50px;"></button><br>
         <div data-role="popup" id="myPopup" style="width:350px; height:450px; background-color:#ddd;">
         <h3 align="center">Add Marketing Expenses</h3>
         <label for="salename">Sales Name</label>
         <select id="salename" name="salename">
         <option selected value="">--select--</option>
         <option value="Emarket">Email Marketing</option>
   		 <option value="Facebook">Facebook</option>
   		 <option value="Youtube">Youtube</option>
   		 <option value="Instagram">Instagram</option>
   		 <option value="Company Websites & Apps">Company Websites & Apps</option>
   		 <option value="SEM(Search Engine Marketing)">SEM (Search Engine Marketing)</option>
   		 <option value="Affiliated Marketing">Affiliated Marketing</option>
   		 <option value="BillBoard">BillBoard</option>
   		 <option value="Business Card">Business Card</option>
   		 <option value="NewsPaper & Magzines">NewsPaper & Magzines</option>
   		 <option value="Other">Other Expenses</option>
         </select>
         <input type="text" id="nametxt" placeholder="Enter Sales Name..." style="display:none;">
         <label for="y1">Year 1</label> 
		 <input type="text" id="y1"  placeholder="Enter Amount...">
         <label for="y2">Year 2</label> 
         <input type="text" id="y2"  placeholder="Enter Amount...">
         <label for="y3">Year 3</label> 
         <input type="text" id="y3"  placeholder="Enter Amount...">
           <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row">Add Expense</button>
         </div>
         <table data-role="table" id="saltable" class="ui-responsive table-stroke">
         <thead>
         <tr></tr>
         </thead>
         <tbody>
         <?php
         	error_reporting(0);
         	include('db.php');
         	$sql="SELECT * FROM sales WHERE id = 5";
         	$result=mysqli_query($conn,$sql);
         	$num=mysqli_num_rows($result);
         	if($num > 0)
         	{
         		$row=mysqli_fetch_assoc($result);
         		$salname=json_decode($row['olname']);
               $y1=json_decode($row['sy1']);
				   $y2=json_decode($row['sy2']);
				   $y3=json_decode($row['sy3']);
         	}
         	$n=sizeof($salname);
         	$i=0;
         	while($n > 0)
         	{
         ?>
         <tr>
         	<td><input type="checkbox" name="record"></td>
         	<td><input type="hidden" name="ename[]" value="<?=$salname[$i]?>"><?=$salname[$i]?></td>
            <td><input type="hidden" name="y1[]" value="<?=$y1[$i]?>"><?=$y1[$i]?></td>
			   <td><input type="hidden" name="y2[]" value="<?=$y2[$i]?>"><?=$y2[$i]?></td>
			   <td><input type="hidden" name="y3[]" value="<?=$y3[$i]?>"><?=$y3[$i]?></td>
         </tr>
         <?php
         	$n--;
         	$i++;
         	}
         ?>
         </tbody>
         </table>
         <h3> Describe your sales </h3>
         <input type="checkbox" id="dschk" checked name="dschk"/><h4 style="margin-left:30px; margin-top:-10px;">Direct Sales of Business</h4><br>
         <?php
         error_reporting(0);
         include('db.php');
         $sql2="SELECT * FROM sales WHERE id = 5";
         $result2=mysqli_query($conn,$sql2);
         $num1=mysqli_num_rows($result2);
         while($row1=mysqli_fetch_array($result2))
         {
         ?>
         <div id="dsdiv" name="dsdiv">
         	<input type="text"  placeholder="First Year" name="ds" value="<?=$row1['ds']?>"/>
            <input type="text"  placeholder="Second Year" name="ds1" value="<?=$row1['ds1']?>"/>
            <input type="text"  placeholder="Third Year" name="ds2" value="<?=$row1['ds2']?>"/>
         </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" id="chschk" checked name="chschk"/><h4 style="margin-left:30px; margin-top:-10px;">Channel Sales of Business</h4>
         <div id="chsdiv" name="chsdiv">
         	<input type="text"  placeholder="First Year" name="chs" value="<?=$row1['chs']?>"/>
            <input type="text"  placeholder="Second Year" name="chs1" value="<?=$row1['chs1']?>"/>
            <input type="text"  placeholder="Third Year" name="chs2" value="<?=$row1['chs2']?>"/>
         </div>
         <?php
         }
         ?>
         <input type="submit" name="nxt_submit" value="Next & Submit" data-inline="true">
         </form>
         <script type="text/JavaScript">
            $(document).ready(function(){
               
               $("#salename").click(function(){
                  var sname=document.getElementById("salename").value;
                  if(sname == "Other")
                  {
                     $("#salename").hide();
                     $("#nametxt").show();
                  }
                  else
                  {
                     $("#nametxt").hide();
                  }
               });
               //Add row in table
               $(".add-row").click(function(){
                  var salname=document.getElementById("salename").value;
                  if(salname == "Other")
                  {
                     var salname=$("#nametxt").val();
                     $("#nametxt").val("");
                     $("#salename").show();
                     $("#salename").val("--select--");
                     $("#nametxt").hide();
                  }
                  else
                  {
                     var name = $("#salename").val();
                     $("#salename").val("--select--");
                  }
                  var y1 = $("#y1").val();
                  var y2 = $("#y2").val();
                  var y3 = $("#y3").val();
                  var markup="<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"ename[]\" value=\"" +name + "\">" + name + "</td><td><input type=\"hidden\" name=\"y1[]\" value=\"" + y1 + "\">" +y1 + "</td><td><input type=\"hidden\" name=\"y2[]\" value=\"" + y2 + "\">" + y2 + "</td><td><input type=\"hidden\" name=\"y3[]\" value=\"" + y3 + "\">" + y3 + "</td></tr>";
                  $("#saltable tbody").append(markup);
                  $("#y1").val("");
                  $("#y2").val("");
                  $("#y3").val("");
               });

               //Delete row in table
               $(".delete-row").click(function() {
                  $("#saltable tbody").find('input[name="record"]').each(function() {
                      if ($(this).is(":checked")) 
                      {
                           $(this).parents("tr").remove();
                      }
                     });
                  });

                  $("#dschk").click(function(){
                        $("#dsdiv").toggle(this.checked)
                     });
                     $("#chschk").click(function(){
                        $("#chsdiv").toggle(this.checked)
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
   $ds=0;
   $ds1=0;
   $ds2=0;
   $chs=0;
   $chs1=0;
   $chs2=0;
   if(isset($_POST['dschk']))
   {
      $ds=$_POST['ds'];
      $ds1=$_POST['ds1'];
      $ds2=$_POST['ds2'];
   }
   if(isset($_POST['chschk']))
   {
      $chs=$_POST['chs'];
      $chs1=$_POST['chs1'];
      $chs2=$_POST['chs2'];
   }
   $sql1="INSERT INTO sales VALUES('','".json_encode($_POST['ename'])."','".json_encode($_POST['y1'])."','".json_encode($_POST['y2'])."','".json_encode($_POST['y3'])."','{$ds}','{$ds1}','{$ds2}','{$chs}','{$chs1}','{$chs2}')";
   if(mysqli_query($conn,$sql1))
   {
      header("Location:newpersonal.php");
   }
   else
   {
      header("Location:newsales.php");
   }
}
?>