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
<div data-role="page" style="background-color:#ddd;">
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
                        $row=mysqli_fetch_array($result);
                        $nr=$row['ds'] + $row['chs'];
                        $nr1=($row['ds1'] + $row['chs1']);
                        $nr2=($row['ds2'] + $row['chs2']);
                     ?>
                     <tr>
                        <td><a href="sales.php?planid="><button class="ui-btn ui-btn-b ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext"></button></a></td>
                        <td><input type="hidden" name="sname" value="Net Sales">Net Sales</td>
                        <td><input type="hidden" name="sval1" value="<?=$nr?>"><?=$nr?></td>
                        <td><input type="hidden" name="sval2" value="<?=$nr1?>"><?=$nr1?></td>
                        <td><input type="hidden" name="sval3" value="<?=$nr2?>"><?=$nr2?></td>
                     </tr>
                     <?php
                        error_reporting(0);
                        include('db.php');
                        $sql5="SELECT * FROM financial WHERE id = 1";
                        $result5=mysqli_query($conn,$sql5);
                        $num5=mysqli_num_rows($result5);
                        if($num5 > 0)
                        {
                           $row5=mysqli_fetch_assoc($result5);
                           $iname=json_decode($row5['iname'],true);
                           $iy1=json_decode($row5['iy1'],true);
                           $iy2=json_decode($row5['iy2'],true);
                           $iy3=json_decode($row5['iy3'],true);
                        }
                        $n5=sizeof($iname);
                        $i5=0;
                        while($n5 > 0)
                        {
                     ?>
                     <tr>
                        <td><input type='checkbox' name='record'></td>
                        <td><input type="hidden" name="iname[]" value="<?=$iname[$i5]?>"><?=$iname[$i5]?></td>
                        <td><input type="hidden" name="iy1[]" value="<?=$iy1[$i5]?>"><?=$iy1[$i5]?></td>
                        <td><input type="hidden" name="iy2[]" value="<?=$iy2[$i5]?>"><?=$iy2[$i5]?></td>
                        <td><input type="hidden" name="iy3[]" value="<?=$iy3[$i5]?>"><?=$iy3[$i5]?></td>
                     </tr>
                     <?php
                        $n5--;
                        $i5++;
                     }
                     ?>
                  </tbody>
                  </table>
      			</div><!-- card end-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <div class="card2">
            <h3>Expenses<a href="#popupInfo1" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
            <a href="#popupExpenses" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 37px;">Add Expenses</a></h3>
            <div data-role="popup" id="popupInfo1" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>Expenditure is an outflow of money to another person or group to pay for an item or service, or for a category of costs. For a tenant, rent is an expense. For students or parents, tuition is an expense. Buying food, clothing, furniture or an automobile is often referred to as an expense.</p>
               </div>
            <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext edit-row1" style="margin-left: 250px;"></button>
      <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row1" style="margin-left: 300px; margin-top: -40px;"></button>
   <div data-role="popup" id="popupExpenses" data-theme="a" class="ui-corner-all" style="width:300px; height:500px; background-color:#ddd;">
                        <h3 align="center"><B>Expenses</B></h3>
                        <label for="select_expense" class="select">Expenses</label>
                        <select id="select_expense">
                              <option value="--Select--">--Select--</option>
                              <option value="Purchased Good">Purchesed Good</option>
                              <option value="Service">Service</option>
                              <option value="Payroll">Payroll</option>
                              <option value="Wages">Wages</option>
                              <option value="Depercision">Derpercision</option>
                              <option value="Intrest">Intrest</option>
                              <option value="Tax">Tax</option>
                              <option value="Rent & Misc">Rent & Misc</option>
                              <option value="Raw Material">Raw Material</option>
                              <option value="Professional Service">Professional Service</option>
                              <option value="Utility Expenses">Utility Expenses</option>
                              <option value="Administartion Expenses">Administration Expenses</option>
                              <option value="Implementation Losses">Implementation Losses</option>
                              <option value="Other Expenses">Other Expenses</option>
                              <option value="Other">Other</option>
                        </select>
                        <input type="text" id="nametxtex" placeholder="Enter Income Name" style="display: none;">
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" id="eyear1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" id="eyear2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" id="eyear3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="button" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus add-row1">Add Expense</button>
                 </div>
                <table data-role="table" id="expexpenses" class="ui-responsive table-stroke">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Expenses Name</th>
                  <th>Year 1</th>
                  <th>Year 2</th>
                  <th>Year 3</th>
               </tr>
                </thead>
                <tbody>
                <?php
                  error_reporting(0);
                  include('db.php');
                  $sql2="SELECT * FROM sales WHERE id = 5";
                  $result2=mysqli_query($conn,$sql2);
                  $num=mysqli_num_rows($result2);
                  if($num > 0)
                  {
                     $row2=mysqli_fetch_assoc($result2);
                     $sval1=json_decode($row2['sy1']);
                     $sval2=json_decode($row2['sy2']);
                     $sval3=json_decode($row2['sy3']);
                  }
                  $i=0;
                  while($i <= sizeof($sval1))
                  {
                     $market+=$sval1[$i];
                     $market1+=$sval2[$i];
                     $market2+=$sval3[$i];
                     $i++;
                  }
                ?>
                <tr>
                <td><a href="sales.php?planid="><button class="ui-btn ui-btn-b ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext"></button></a></td>
                <td><input type="hidden" name="mname" value="Marketing Expense">Marketing Expense</td>
                <td><input type="hidden" name="mval1" value="<?=$market?>"><?=$market?></td>
                <td><input type="hidden" name="mval2" value="<?=$market1?>"><?=$market1?></td>
                <td><input type="hidden" name="mval3" value="<?=$market2?>"><?=$market2?></td>
                </tr>
                <?php
                        error_reporting(0);
                        include('db.php');
                        $sql6="SELECT * FROM financial WHERE id = 1";
                        $result6=mysqli_query($conn,$sql6);
                        $num6=mysqli_num_rows($result6);
                        if($num6 > 0)
                        {
                           $row6=mysqli_fetch_assoc($result6);
                           $ename=json_decode($row6['ename'],true);
                           $ey1=json_decode($row6['ey1'],true);
                           $ey2=json_decode($row6['ey2'],true);
                           $ey3=json_decode($row6['ey3'],true);
                        }
                        $n6=sizeof($ename);
                        $i6=0;
                        while($n6 > 0)
                        {
                     ?>
                     <tr>
                        <td><input type='checkbox' name='record'></td>
                        <td><input type="hidden" name="ename[]" value="<?=$ename[$i6]?>"><?=$ename[$i6]?></td>
                        <td><input type="hidden" name="ey1[]" value="<?=$ey1[$i6]?>"><?=$ey1[$i6]?></td>
                        <td><input type="hidden" name="ey2[]" value="<?=$ey2[$i6]?>"><?=$ey2[$i6]?></td>
                        <td><input type="hidden" name="ey3[]" value="<?=$ey3[$i6]?>"><?=$ey3[$i6]?></td>
                     </tr>
                     <?php
                        $n6--;
                        $i6++;
                     }
                     ?>
                </tbody>
                </table>
         </div><!-- card end-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="card2">
               <h3>Assets<a href="#popupInfo2" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupAssets" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 60px;">Add Assets</a></h3>
               <div data-role="popup" id="popupInfo2" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>An asset is any resource owned by the business. Anything tangible or intangible that can be owned or controlled to produce value and that is held by a company to produce positive economic value is an asset. Simply stated, assets represent value of ownership that can be converted into cash.</p>
               </div>
               <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext edit-row2" style="margin-left: 250px;"></button>
      <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row2" style="margin-left: 300px; margin-top: -40px;"></button>
                  <div data-role="popup" id="popupAssets" data-theme="a" class="ui-corner-all" style="width:300px; height:450px; background-color:#ddd;">
                     <h3 align="center"><B>Add Asset</B></h3>
                     <label for="select_asset" class="select">Asset</label>
                     <select id="select_asset">
                              <option value="--Select--">--Select--</option>
                              <option readonly><B>Current Assets</B></option>
                              <option value="Cash Balance">Cash Balance</option>
                              <option value="Cash equivalents">Cash equivalents</option>
                              <option value="Short-term deposits">Short-term deposits</option>
                              <option value="Marketable securities">Marketable securities</option>
                              <option value="Office supplies">Office supplies</option>
                              <option value="Inventory">Inventory</option>
                              <option value="Receivables">Receivables</option>
                              <option value="Bank Balance">Bank Balance</option>
                              <option value="Sundry Debtors">Sundry Debtors</option>
                              <option value="Bank DD">Bank DD</option>
                              <option value="Security Deposits">Security Deposits</option>
                              <option value="Short-term investments">Short-term investments</option>
                              <option value="Long-term investments">Long-term investments</option>
                              <option value="Other Current Asset">Other Current Asset</option>
                              <option><B>Non-Current Assets</B></option>
                              <option value="Net Fixed Assets">Net Fixed Assets</option>
                              <option value="Stock in Trade">Stock in Trade</option>
                              <option value="Land">Land</option>
                              <option value="Building">Building</option>
                              <option value="Machinery">Machinery</option>
                              <option value="Equipment">Equipment</option>
                              <option value="Patents">Patents</option>
                              <option value="GoodWill">GoodWill</option>
                              <option value="Licenses">Licenses</option>
                              <option value="Trademarks">Trademarks</option>
                              <option value="Other Non-Current Assets">Other Non-Current Assets</option>
                              <option value="Other">Other</option>
                        </select>
                        <input type="text" id="nametxtas" placeholder="Enter Asset Name" style="display: none;">
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" id="ayear1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" id="ayear2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" id="ayear3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="button" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus add-row2">Add Assets</button>
                  </div>
                  <table data-role="table" id="expassets" class="ui-responsive table-stroke">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Assets Name</th>
                           <th>Year 1</th>
                           <th>Year 2</th>
                           <th>Year 3</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php
                        error_reporting(0);
                        include('db.php');
                        $sql3="SELECT * FROM financial WHERE id = 1";
                        $result3=mysqli_query($conn,$sql3);
                        $num3=mysqli_num_rows($result3);
                        if($num3 > 0)
                        {
                           $row3=mysqli_fetch_assoc($result3);
                           $aname=json_decode($row3['aname'],true);
                           $ay1=json_decode($row3['ay1'],true);
                           $ay2=json_decode($row3['ay2'],true);
                           $ay3=json_decode($row3['ay3'],true);
                        }
                        $n3=sizeof($aname);
                        $i3=0;
                        while($n3 > 0)
                        {
                     ?>
                     <tr>
                        <td><input type='checkbox' name='record'></td>
                        <td><input type="hidden" name="aname[]" value="<?=$aname[$i3]?>"><?=$aname[$i3]?></td>
                        <td><input type="hidden" name="ay1[]" value="<?=$ay1[$i3]?>"><?=$ay1[$i3]?></td>
                        <td><input type="hidden" name="ay2[]" value="<?=$ay2[$i3]?>"><?=$ay2[$i3]?></td>
                        <td><input type="hidden" name="ay3[]" value="<?=$ay3[$i3]?>"><?=$ay3[$i3]?></td>
                     </tr>
                     <?php
                        $n3--;
                        $i3++;
                     }
                     ?>
                     </tbody>
                  </table>
            </div><!-- Card End -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="card2">
               <h3>Liabilities<a href="#popupInfo3" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupLiabilities" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 30px;">Add Liabilities</a></h3>
               <div data-role="popup" id="popupInfo3" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>a liability is defined as the future sacrifices of economic benefits that the entity is obliged to make to other entities as a result of past transactions or other past events,the settlement of which may result in the transfer or use of assets, provision of services or other yielding of economic benefits in the future.</p>
               </div>
               <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext edit-row3" style="margin-left: 250px;"></button>
      <button type="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row3" style="margin-left: 300px; margin-top: -40px;"></button>
               <div data-role="popup" id="popupLiabilities" data-theme="a" class="ui-corner-all" style="width:300px; height:450px; background-color:#ddd;">
                  <h3 align="center"><B>Add Liabilities</B></h3>
                  <label for="select_liability" class="select">Liabilities</label>
                        <select id="select_liability">
                              <option value="--Select--">--Select--</option>
                              <option readonly><B>Current Liabilities</B></option>
                              <option value="Account payable">Account payable</option>
                              <option value="Intrest payable">Intrest payable</option>
                              <option value="Income taxes payable">Income taxes payable</option>
                              <option value="Bills payable">Bills payable</option>
                              <option value="Trade payable">Trade payable</option>
                              <option value="Short term Borrowing">Short term Borrowing</option>
                              <option value="Bank Account overdrafts">Bank Account overdrafts</option>
                              <option value="Accured expenses">Accured expenses</option>
                              <option value="Prefernces Shares">Prefernces Shares</option>
                              <option value="Term deposits">Term deposits</option>
                              <option value="Secured Loans">Secured Loans</option>
                              <option value="Unsecured Loans">Unsecured Loans</option>
                              <option value="Sundry Creditiors">Sundry Creditiors</option>
                              <option value="Acceptances">Acceptances</option>
                              <option value="Dividend Payable">Dividend Payable</option>
                              <option value="Provisions">Provisions</option>
                              <option value="Other Current Liabilities">Other Current Liabilities</option>
                              <option><B>Non-Current Liabilities</B></option>
                              <option value="Bond payable">Bond payable</option>
                              <option value="Notes payable">Notes payable</option>
                              <option value="Deferred Tax Liability">Deferred Tax Liability</option>
                              <option value="Mortage payable">Mortage payable</option>
                              <option value="Long-term Liability">Long-term Liability</option>
                              <option value="Capital leases">Capital leases</option>
                              <option value="Gneral Reserve">General Reserve</option>
                              <option value="Other Long-term Liability">Other Long-term Liability</option>
                              <option value="Other Non-Current Liability">Other Non-Current Liability</option>
                              <option value="Equity">Equity</option>
                              <option value="Debt">Debt</option>
                              <option value="Other">Other</option>
                        </select>
                        <input type="text" id="nametxtlb" placeholder="Enter Liability Name" style="display: none;">
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" id="lyear1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" id="lyear2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" id="lyear3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="button" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus add-row3">Add Liabilities</button>
               </div>
               <table data-role="table" id="expliability" class="ui-responsive table-stroke">
               <thead>
                        <tr>
                           <th>#</th>
                           <th>Liabilities Name</th>
                           <th>Year 1</th>
                           <th>Year 2</th>
                           <th>Year 3</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php
                        error_reporting(0);
                        include('db.php');
                        $sql4="SELECT * FROM companyprofile WHERE id = 1";
                        $result4=mysqli_query($conn,$sql4);
                        $num4=mysqli_num_rows($result4);
                        if($num4 > 0)
                        {
                           $row4=mysqli_fetch_array($result4);
                           $omoney=$row4['omoney'];
                        }
                     ?>
                        <tr>
                           <td></td>
                           <td><input type="hidden" name="lname[]" value="Owner Contribution" />Owner Contribution</td>
                           <td><input type="hidden" name="ly1[]" value="<?= $omoney; ?>" /><?= $omoney; ?></td>
                           <td><input type="text" name="ly2[]" value="" /></td>
                           <td><input type="text" name="ly3[]" value="" /></td>
                        </tr>
                        <?php
                           error_reporting(0);
                        include('db.php');
                        $sql31="SELECT * FROM financial WHERE id = 1";
                        $result31=mysqli_query($conn,$sql31);
                        $num31=mysqli_num_rows($result31);
                        if($num31 > 0)
                        {
                           $row31=mysqli_fetch_assoc($result31);
                           $lname=json_decode($row31['lname'],true);
                           $ly1=json_decode($row31['ly1'],true);
                           $ly2=json_decode($row31['ly2'],true);
                           $ly3=json_decode($row31['ly3'],true);
                        }
                        $n31=sizeof($lname);
                        $i31=0;
                        while($n31 > 0)
                        {
                     ?>    
                     <tr>
                        <td><input type='checkbox' name='record'></td>
                        <td><input type="hidden" name="lname[]" value="<?=$lname[$i31]?>"><?=$lname[$i31]?></td>
                        <td><input type="hidden" name="ly1[]" value="<?=$ly1[$i31]?>"><?=$ly1[$i31]?></td>
                        <td><input type="hidden" name="ly2[]" value="<?=$ly2[$i31]?>"><?=$ly2[$i31]?></td>
                        <td><input type="hidden" name="ly3[]" value="<?=$ly3[$i31]?>"><?=$ly3[$i31]?></td>
                     </tr>
                     <?php
                        $n31--;
                        $i31++;
                     }
                     ?>
                     </tbody>
               </table>
            </div><!-- Card End -->
      			<input type="submit" name="download_submit" value="Submit & Download" data-inline="true">
      		</form>
      	</div>
</div>
</body>
</html>