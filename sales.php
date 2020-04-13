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
   <div data-role="page">
   <div data-role="main" class="ui-content">
            <h2 align="center"> Sales & Marketing </h2>
                     <h2> Marketing Expenses</h2>
                     <h5> <p style="font-size:medium">Marketing expense is comprised of those costs incurred to present an
                organization's goods and services to prospective customers. Examples of costs that are classified as
                marketing expenses are:
                Most marketing expenses are charged to expense in the period incurred, though some printed materials
                and advertising costs can be treated as prepaid expenses.
            </p></h5>
            <div data-role="collapsible" data-theme="b" data-content-theme="a" data-collapsed="true" style="width: 250px;">
            <h4>Add Marketing Expenses</h4>
            <form method="post">
            <select id="olname" name="olname">
             <option selected value="">--select--</option>
   <option value="Emarket">Email Marketing</option>
   <option value="fb">Facebook</option>
   <option value="utube">Yputube</option>
   <option value="insta">Instagram</option>
   <option value="apps">Company Websites & Apps</option>
   <option value="sem">SEM (Search Engine Marketing)</option>
   <option value="Affiliated">Affiliated Marketing</option>
   <option value="bill">BillBoard</option>
   <option value="bcard">Business Card</option>
   <option value="newspaper">NewsPaper & Magzines</option>
   <option value="other">Other Expenses</option>
   </select>
   <input type="text" id="nametxt" style="display:none;">
   			 <label for="y1">Year 1</label> 
             <input type="text" id="y1"  placeholder="Enter Amount...">
             <label for="y2">Year 2</label> 
             <input type="text" id="y2"  placeholder="Enter Amount...">
             <label for="y3">Year 3</label> 
             <input type="text" id="y3"  placeholder="Enter Amount...">
             <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row">Add Expense</button>
            </form>
            </div>
			<button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 300px; margin-top: -50px;"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   	<h3>Describe your sales </h3>
                   	<input type="checkbox" id="dschk" checked name="dschk"/><h4 style="margin-left:30px; margin-top:-10px;">Direct Sales of Business</h4>
                   	<div id="dsdiv" name="dsdiv">
                   	<form method="post">
                   	<input type="number"  placeholder="First Year" name="ds" id="ds"/>
            		<input type="number"  placeholder="Second Year" name="ds1" id="ds1"/>
            		<input type="number"  placeholder="Third Year" name="ds2" id="ds2"/>
            		</form>
                   	</div>&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="checkbox" id="chschk" checked name="chschk"/><h4 style="margin-left:30px; margin-top:-10px;">Channel Sales of Business</h4>
                   <div id="chsdiv" name="chsdiv">
                   <form method="post">
                   	<input type="number"  placeholder="First Year" name="chs" id="chs"/>
            		<input type="number"  placeholder="Second Year" name="chs1" id="chs1"/>
            		<input type="number"  placeholder="Third Year" name="chs2" id="chs2"/>
            		</form>
                   	</div>
                   	<script type="text/JavaScript">
                   	$("#olname").click(function(){
                   		var salesname=document.getElementById("olname").value;
                   		if(salesname == "other")
                   		{
                   			$("#olname").hide();
                   			$("#nametxt").show();
                   		}
                   		else
                   		{
                   			$("#nametxt").hide();
                   		}
                   	});

                   	$(".add-row").click(function(){
                   		var salname=document.getElementById("olname").value;
                   		if(salname == "other") 
                   		{
                		var name = $("#nametxt").val();
                		$("#nametxt").val("");
                		$("#olname").show();
                		$("#olname").val("--select--");
                		$("#nametxt").hide();
            			} 
            			else 
            			{
                		var name = $("#olname").val();
                		$("#olname").val("--select--");
            			}
            			var y1 = $("#y1").val();
            			var y2 = $("#y2").val();
            			var y3 = $("#y3").val();
            			var markup ="<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"ename[]\" value=\"" +name + "\">" + name + "</td><td><input type=\"hidden\" name=\"y1[]\" value=\"" + y1 + "\">" +y1 + "</td><td><input type=\"hidden\" name=\"y2[]\" value=\"" + y2 + "\">" + y2 + "</td><td><input type=\"hidden\" name=\"y3[]\" value=\"" + y3 + "\">" + y3 + "</td></tr>";
            			$("#saltable tbody").append(markup);
            			$("#y1").val("");
            			$("#y2").val("");
            			$("#y3").val("");
                   	});

                   	$(".delete-row").click(function() {
           					 $("#saltable tbody").find('input[name="record"]').each(function() {
                			if ($(this).is(":checked")) {
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
                   	</script>
                   	<div style="margin-top:100px;">
                   	<form method="post" action="#">
                   	<div>
                   	<table data-role="table" id="saltable" class="ui-responsive table-stroke">
                   	<thead>
                           <tr>
                           </tr>
                        </thead>
                        <tbody>
                        <?php 
                        	error_reporting(0);
                        	include('db.php');
                        	$sql1="SELECT * FROM sales WHERE id = 1";
                        	$result=mysqli_query($conn,$sql1);
                        	$n=mysqli_num_rows($result);
                        	if($n > 0)
                        	{
                        		$row=mysqli_fetch_assoc($result);
                        		$salname=json_decode($row['olname']);
                        		$y1=json_decode($row['sy1']);
                        		$y2=json_decode($row['sy2']);
                        		$y3=json_decode($row['sy3']);
                        	}
                        	$n1=sizeof($salname);
                        	$i=0;
                        	while($n1 > 0)
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
                        		$n1--;
                        		$i++;
                        	}
                        	?>
                    </tbody>
                   	</table>
                   	</div>
                   	<input type="submit" name="s_submit" value="Save & Next" data-inline="true">
                   	</form>
                   	</div>
   </div>
   </div>
   </body>
</html>
<?php
error_reporting(0);
include('db.php');
if(isset($_POST['s_submit']))
{
	$sql="INSERT INTO sales VALUES('','".json_encode($_POST['ename'])."','".json_encode($_POST['y1'])."','".json_encode($_POST['y2'])."','".json_encode($_POST['y3'])."','".json_encode($_POST['ds'])."','".json_encode($_POST['ds1'])."','".json_encode($_POST['ds2'])."','".json_encode($_POST['chs'])."','".json_encode($_POST['chs1'])."','".json_encode($_POST['chs2'])."')";
	if(mysqli_query($conn,$sql))
	{
		echo"Data Stored!!!";
	}
}
?>