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
            <form>
                     <h2 align="center"> Personal </h2>
                     <h1> (I) Brief Your Milestone</h1>
                     <div data-role="collapsible" data-theme="b" data-content-theme="a" data-collapsed="true" style="width: 250px;">
                         <h4>Milestone</h4>
                         <form>
                           <input type="text" id="date" placeholder="Enter Date(Ex.DD/MM/YYYY)" value="" required>
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
                        <tbody>
                           <tr>
                              <td><input type="checkbox" name="record"></td>
                              <td><input type="hidden" name="date[]" value=""></td>
                              <td><input type="hidden" name="tmilestone[]" value=""></td>
                           </tr>
                        </tbody>
                     </table>
                     <script type="text/javascript">
                        $(".add-row").click(function(){
                           var nametxt=$("#date").val();
                           var mstone=$("#bmilestone").val();
                           var markup="<tr><td><input type='checkbox' name='record'></td><td><input type=\"text\" name=\"date[]\" value=\""+nametxt+"\" style=\"border:none; border-bottom:2px solid black; background-color:#FFF0EC;\" readonly></td><td><input type=\"text\" name=\"tmilestone[]\" value=\""+mstone+"\" style=\"border:none; border-bottom:2px solid black; background-color:#FFF0EC;\" readonly></td></tr>";
                           $("#exptable tbody").append(markup);
                           $("#date").val("");
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
               <table data-role="table" id="exptable1" class="ui-responsive table-stroke">
                  <thead>
                     <tr>
                        
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><input type="checkbox" name="record"></td>
                        <td><input type="hidden" name="empname[]" value=""></td>
                        <td><input type="hidden" name="designation[]" value=""></td>
                        <td><input type="hidden" name="exp[]" value=""></td>
                        <td><input type="hidden" name="about[]" value=""></td>
                     </tr>
                  </tbody>
               </table>
               <script type="text/javascript">
                  $(".add-row1").click(function(){
                     var empname=$("#empname").val();
                     var desg=$("#designation").val();
                     var ex=$("#exp").val();
                     var ab=$("#about").val();
                     var markon="<tr><td><input type='checkbox' name='record'></td><td><input type=\"text\" name=\"empname[]\" value=\""+empname+"\" style=\"border:none; border-bottom:2px solid black; background-color:#FFF0EC;\" readonly></td><td><input type=\"text\" name=\"designation[]\" value=\""+desg+"\" style=\"border:none; border-bottom:2px solid black; background-color:#FFF0EC;\" readonly></td><td><input type=\"text\" name=\"exp[]\" value=\""+ex+"\" style=\"border:none; border-bottom:2px solid black; background-color:#FFF0EC;\" readonly></td><td><input type=\"text\" name=\"about[]\" value=\""+ab+"\" style=\"border:none; border-bottom:2px solid black; background-color:#FFF0EC;\" readonly></td></tr>";
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
            <div style="margin-top:150px; padding: 0px 10px;"><input type="submit" name="submit" value="Next" data-inline="true"></div>
            </form>
         </div>
         <!-- <div data-role = "footer">
            <h1>Copyright</h1>   
         </div> -->
      </div>
   </body>
</html>