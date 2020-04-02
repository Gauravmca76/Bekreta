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
      <script src="./jquery.mobile/demos/js/fd.js"></script> 
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
         <div data-role = "main" class = "ui-content" style="background: #ddd;">
            <form>
            <h1 align="center"> Financials in Rs</h1>
            <div class="card2">
               <h3>Incomes<a href="#popupInfo" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 63px;">Add Income</a></h3>
               <div data-role="popup" id="popupInfo" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>Business income can be offset by business expenses and business losses. It can be either positive or negative in any given year.According to the Internal Revenue Service, business income may include income received from the sale of products or services. For example, fees received by a person from the regular practice of a profession are business income.Rents received by a person in the real estate business are business income. A business must include in income payments received in the form of property or services at the fair market value of the property or services.</p>
               </div>
               <div>
          <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext edit-row" style="margin-left: 250px;"></button>
      <button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete ui-btn-icon-notext delete-row" style="margin-left: 300px; margin-top: -40px;"></button>
               </div>
               <div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
                  <form method="post">
                       <div style="padding:10px 20px;">
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
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus add-row">Add Income</button>
                       </div>
                   </form>
               </div>
               <div data-role="popup" id="popupUpdateLogin" data-theme="a" class="ui-corner-all">
                  <form method="post">
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Income</B></h3>
                        <label for="update_select_income" class="select">Income</label>
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
                        <input type="text" id="nametxt1" placeholder="Enter Income Name" style="display: none;">
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" id="iyear11" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" id="iyear21" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" id="iyear31" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-btn-icon-left ui-icon-plus update-row">Add Income</button>
                       </div>
                   </form>
               </div>
               <div>
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
                        <tr>
                           <td><a href="sales.php?planid="><button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit ui-btn-icon-notext edit-row"></button></a></td>
                           <td><input type="hidden" name="sname" value="<?php echo"Net Sales";?>"><?php echo"Net Sales";?></td>
                           <td><input type="hidden" name="sval1" value="<?php echo"3000";?>"><?php echo"3000";?></td>
                           <td><input type="hidden" name="sval2" value="<?php echo"3000";?>"><?php echo"3000";?></td>
                           <td><input type="hidden" name="sval3" value="<?php echo"3000";?>"><?php echo"3000";?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!-- card end-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="card2">
               <h3>Expenses<a href="#popupInfo1" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupExpense" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 37px;">Add Expenses</a></h3>
               <div data-role="popup" id="popupInfo1" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>Expenditure is an outflow of money to another person or group to pay for an item or service, or for a category of costs. For a tenant, rent is an expense. For students or parents, tuition is an expense. Buying food, clothing, furniture or an automobile is often referred to as an expense.</p>
               </div>
               <div data-role="popup" id="popupExpense" data-theme="a" class="ui-corner-all">
                  <form>
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Add Expense</B></h3>
                        <label for="select_expense" class="select">Expense</label>
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
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" id="eyear1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" id="eyear2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" id="eyear3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus add-row1">Add Expense</button>
                       </div>
                   </form>
               </div>
               <div>
                  <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
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
                        <tr>
                           <th>Online Sales</th>
                           <td>30000</td>
                           <td>30000</td>
                           <td>40000</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!-- card end-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="card2">
               <h3>Assets<a href="#popupInfo2" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupAssets" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 60px;">Add Assets</a></h3>
               <div data-role="popup" id="popupInfo2" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>An asset is any resource owned by the business. Anything tangible or intangible that can be owned or controlled to produce value and that is held by a company to produce positive economic value is an asset. Simply stated, assets represent value of ownership that can be converted into cash.</p>
               </div>
               <div data-role="popup" id="popupAssets" data-theme="a" class="ui-corner-all">
                  <form>
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Add Asset</B></h3>
                        <label for="select_asset" class="select">Asset</label>
                        <select name="select_asset" id="select_choice_1">
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
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" name="year1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" name="year2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" name="year3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus">Add Assets</button>
                       </div>
                   </form>
               </div>
               <div>
                  <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
                     <thead>
                        <tr>
                           <th>Assets Name</th>
                           <th>Year 1</th>
                           <th>Year 2</th>
                           <th>Year 3</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th>Online Sales</th>
                           <td>30000</td>
                           <td>30000</td>
                           <td>40000</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!-- card end-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="card2">
               <h3>Liabilities<a href="#popupInfo3" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupLiabilities" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 30px;">Add Liabilities</a></h3>
               <div data-role="popup" id="popupInfo3" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>a liability is defined as the future sacrifices of economic benefits that the entity is obliged to make to other entities as a result of past transactions or other past events,the settlement of which may result in the transfer or use of assets, provision of services or other yielding of economic benefits in the future.</p>
               </div>
               <div data-role="popup" id="popupLiabilities" data-theme="a" class="ui-corner-all">
                  <form>
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Add Liabilities</B></h3>
                        <label for="select_liability" class="select">Liabilities</label>
                        <select name="select_liability" id="select_choice_1">
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
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" name="year1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" name="year2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" name="year3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus">Add Liabilities</button>
                       </div>
                   </form>
               </div>
               <div>
                  <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
                     <thead>
                        <tr>
                           <th>Liabilities Name</th>
                           <th>Year 1</th>
                           <th>Year 2</th>
                           <th>Year 3</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th>Online Sales</th>
                           <td>30000</td>
                           <td>30000</td>
                           <td>40000</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!-- card end-->
            <input type="submit" name="submit" value="Submit" data-inline="true">
            </form>
         </div>
         <!-- <div data-role = "footer">
            <h1>Copyright</h1>   
         </div> -->
      </div>   
   </body>
</html>