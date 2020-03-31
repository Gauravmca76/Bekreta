<?php
$tir=200;
$tir1=1000;
$tp=7000;
$dataPoints = array( 
	array("label"=>"Principal", "y"=>$tp),
	array("label"=>"Interest", "y"=>$tir),
	array("label"=>"Interest12", "y"=>$tir1))
?>
<!DOCTYPE html>
<html>
<head>
	<title>JQM Charts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<link rel="stylesheet" href="./jquery.mobile/demos/css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="./jquery.mobile/demos/_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="./favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="./jquery.mobile/demos/js/jquery.js"></script>
	<script src="./jquery.mobile/demos/_assets/js/index.js"></script>
	<script src="./jquery.mobile/demos/js/jquery.mobile-1.4.5.min.js"></script>
	<script src="./jquery.mobile/demos/js/Chart1.js"></script>
	<script>
window.onload = function() { 
var chart = new CanvasJS.Chart("mycanvas", {
	animationEnabled: false,
	title: {
		text: "EMI Calculation Pie Chart"
	},
	data: [{
		type: "pie",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script>
</head>
<body>
<div id="pagePieChart" data-role="page" data-rockncoder-jspage="managePieChart">
		<header data-role="header" data-position="fixed">
			<h1>Pie Chart</h1>
			<div id="mycanvas" style="height: 370px;width: 100%;"></div>
		</header>
		<a href="index.php">Next</a>
	</div>
</body>
</html>