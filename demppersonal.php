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
               <li><a href = "demppersonal.php">Personal</a></li>
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
         				<form method="post" action="#">
                           <input type="text" id="bdate" placeholder="Enter Date(Ex.DD/MM/YYYY)" value="" required>
                           <input type="text" id="bmilestone" placeholder="Brief Milestone" value="" required>
                           <button type="button" style="border-radius: 12px; padding: 14px 40px;font-size: 16px;background-color: #4CAF50;color: white;" class="add-row">Add Milestone</button>
                           </form>
                     </div>
                  <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 300px; margin-top: -50px;"></button>
                     <table data-role="table" id="exptable" class="ui-responsive table-stroke">
                        <thead>
                           <tr>
                           </tr>
                        </thead>
                        <?php 
                           error_reporting(0);
                           include('db.php');
                           $sql1="SELECT * FROM demomiles WHERE id = 2";
                           $result=mysqli_query($conn,$sql1);
                           while($row=mysqli_fetch_assoc($result))
                           {
                           ?>
                        <tbody>
                           <tr>
                              <td><input type="checkbox" name="record"></td>
                              <td><input type="hidden" name="tdate[]" value="<?=$row['mdate']?>"><?=$row['mdate']?></td>
                              <td><input type="hidden" name="tmilestone[]" value="<?=$row['mname']?>"><?=$row['mname']?></td>
                           </tr>
                           <?php 
                              }
                           ?>
                        </tbody>
                     </table>
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
                        });
                     </script>
         </div>
         <div style="margin-top:150px; padding: 0px 10px;">
                     <form method="post" action="#">
                     <input type="submit" name="nxt_submit" value="Next" data-inline="true">
                     </form>
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
   $sql="INSERT INTO demomiles VALUES('','".json_encode($_POST['tdate'])."','".json_encode($_POST['tmilestone'])."')";
   mysqli_query($conn,$sql);
}
?>