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
         <div data-role = "main" class = "ui-content" style="background: #ddd;">
            <h1 align="center"> Financials in Rs</h1>
            <div class="card2">
               <h3>Incomes<a href="#popupInfo" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 63px;">Add Income</a></h3>
               <div data-role="popup" id="popupInfo" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>Here is a <strong>tiny popup</strong> being used like a tooltip. The text will wrap to multiple lines as needed.</p>
               </div>
               <div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
                  <form>
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Income</B></h3>
                        <label for="select_income" class="select">Income</label>
                        <select name="select_income" id="select_choice_1">
                              <option value="--Select--">--Select--</option>
                              <option value="sale of services">Sale of Service</option>
                              <option value="sale of product">Sale of Product</option>
                              <option value="commmision">Commision</option>
                              <option value="intrest">Intrest</option>
                              <option value="rental">Rental</option>
                              <option value="other income">Other Income</option>
                              <option value="other">Other</option>
                        </select>
                        <label for="year1">Year 1 Amount</label>
                        <input type="text" name="year1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" name="year2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" name="year3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus">Add Income</button>
                       </div>
                   </form>
               </div>
               <div>
                  <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
                     <thead>
                        <tr>
                           <th>Income Name</th>
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
               <h3>Expenses<a href="#popupInfo1" data-rel="popup" data-transition="pop" class="ui-btn ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn more" style="background-color: #ddd">Learn more</a>
               <a href="#popupExpense" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-b" data-transition="pop" style="margin-left: 37px;">Add Expenses</a></h3>
               <div data-role="popup" id="popupInfo1" class="ui-content" data-theme="a" style="max-width:350px;">
                    <p>Here is a <strong>tiny popup</strong> being used like a tooltip. The text will wrap to multiple lines as needed.</p>
               </div>
               <div data-role="popup" id="popupExpense" data-theme="a" class="ui-corner-all">
                  <form>
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Add Expense</B></h3>
                        <label for="select_expense" class="select">Expense</label>
                        <select name="select_expense" id="select_choice_1">
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
                        <input type="text" name="year1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" name="year2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" name="year3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus">Add Expense</button>
                       </div>
                   </form>
               </div>
               <div>
                  <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
                     <thead>
                        <tr>
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
                    <p>Here is a <strong>tiny popup</strong> being used like a tooltip. The text will wrap to multiple lines as needed.</p>
               </div>
               <div data-role="popup" id="popupAssets" data-theme="a" class="ui-corner-all">
                  <form>
                       <div style="padding:10px 20px;">
                        <h3 align="center"><B>Add Asset</B></h3>
                        <label for="select_asset" class="select">Expense</label>
                        <select name="select_asset" id="select_choice_1">
                              <option value="--Select--">--Select--</option>
                              <option readonly><B>Current Assets</B></option>
                              <option value="Cash Balance">Cash Balance</option>
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
                        <input type="text" name="year1" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year2">Year 2 Amount</label>
                        <input type="text" name="year2" value="" placeholder="Enter Amount" data-theme="a">
                        <label for="year3">Year 3 Amount</label>
                        <input type="text" name="year3" value="" placeholder="Enter Amount" data-theme="a">
                        <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-plus">Add Expense</button>
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
         </div>
         <!-- <div data-role = "footer">
            <h1>Copyright</h1>   
         </div> -->
      </div>   
   </body>
</html>