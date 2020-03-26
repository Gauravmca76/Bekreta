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
                     <div data-role="collapsible" data-theme="b" data-content-theme="a" data-collapsed="true" style="width: 300px;">
                         <h4>Milestone</h4>
                         <form>
                           <input type="text" name="date" placeholder="Enter Date(Ex. DD/MM/YYYY)" value="" 
                           onchange="dt(this.value)" required>
                           <input type="text" name="bmilestone" placeholder="Brief Milestone" value="" 
                           onchange="mstone(this.value)" required>
                           <input type="submit" name="submit" value="submit">
                        </form>
                     </div>
                     <h1> (II) Core Team Members</h1>
                     <div data-role="collapsible" data-theme="b" data-content-theme="a" data-collapsed="true" style="width: 300px;">
                      <h4>Employee</h4>
                        <form>
                           <input type="text" name="empname" placeholder="Employee Name" required>
                           <input type="text" name="designation" placeholder="Designation" required>
                           <input type="text" name="exp" placeholder="Exp." required>
                           <input type="text" name="about" placeholder="About Employee" required>
                           <input type="submit" name="submit" value="submit">
                        </form>
               </div>
            <div style="margin-top:150px; padding: 0px 10px;"><input type="submit" name="submit" value="Next" data-inline="true"></div>
            </form>
         </div>
         <!-- <div data-role = "footer">
            <h1>Copyright</h1>   
         </div> -->
      </div>
   </body>
</html>