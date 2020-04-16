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
      <script src="./jquery.mobile/demos/js/fd.js"></script> 
      <link rel="stylesheet" href="style.css">
</head>
<body>
<div data-role="page">
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
      		<form method="post" action="#">
      			<h1 align="center"> Financials in Rs</h1>
      			<div class="card2">
      <h3>Incomes<a href="#popupInfo" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
      <a href="#popupIncome" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 63px;">Add Income</a></h3>
      <div data-role="popup" id="popupInfo" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>Business income can be offset by business expenses and business losses. It can be either positive or negative in any given year.According to the Internal Revenue Service, business income may include income received from the sale of products or services. For example, fees received by a person from the regular practice of a profession are business income.Rents received by a person in the real estate business are business income. A business must include in income payments received in the form of property or services at the fair market value of the property or services.</p>
               </div>
               <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 300px; margin-top: -20px; position: absolute;"></button>
               <button type="button" data-transition="pop" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext edit-row" data-rel="popup" style="margin-left: 250px; margin-top: -20px;"></button>
               <div data-role="popup" id="popupIncome" data-theme="a" class="ui-corner-all" style="width:300px; height:500px; background-color:#ddd;">
                        <h3 align="center"><B>Income</B></h3>
                        <label for="select_income" class="select">Income</label>
                        <select id="select_income">
                              <option value="--Select--">--Select--</option>
                              <option value="sale of services">Sale of Service</option>
                              <option value="sale of product">Sale of Product</option>
                              <option value="commmision">Commision</option>
                              <option value="intrest">Intrest</option>
                              <option value="rental">Rental</option>
                              <option value="other income">Other Income</option>
                              <option value="other">Other</option>
                        </select>
                        <input type="text" id="nametxt" placeholder="Enter Income Name" style="display: none;">
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" id="iyear1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" id="iyear2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" id="iyear3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="button" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus add-row">Add Income</button>
                 </div>
                  <table data-role="table" id="expincome" class="ui-responsive table-stroke">
                  <thead>
                        <tr>
                           <th>#</th>
                           <th>Income Name</th>
                           <th>Year 1</th>
                           <th>Year 2</th>
                           <th>Year 3</th>
                        </tr>
                  </thead>
                  <tbody>
                  <?php
                        error_reporting(0);
                        include('db.php');
                        $sql="SELECT * FROM sales WHERE id = 5";
                        $result=mysqli_query($conn,$sql);
                        $n=mysqli_num_rows($resul1);
                        if($n > 0)
                        {
                              $row=mysqli_fetch_array($result);
                              $nr=$row['ds'] + $row['chs'];
                              $nr1=($row['ds1'] + $row['chs1']);
                              $nr2=($row['ds2'] + $row['chs2']);
                        }
                     ?>
                     <tr>
                        <td><a href="sales.php?planid="><button class="ui-btn ui-btn-b ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext"></button></a></td>
                        <td><input type="hidden" name="sname" value="Net Sales">Net Sales</td>
                        <td><input type="hidden" name="sval1" value="<?=$nr?>"><?=$nr?></td>
                        <td><input type="hidden" name="sval2" value="<?=$nr1?>"><?=$nr1?></td>
                        <td><input type="hidden" name="sval3" value="<?=$nr2?>"><?=$nr2?></td>
                     </tr>
                  </tbody>
                  </table>
      			</div>
      			<input type="submit" name="nxt_submit" value="Submit & Download" data-inline="true">
      		</form>
      	</div>
</div>
</body>
</html>