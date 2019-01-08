<?php
include '../function.php';
$link = mysqli_connect("localhost","Leslie","Iknowyou440","DOTA") or die ("错误：链接数据库失败");
mysqli_query($link,"set names 'utf8'");

$sql0 = "SELECT playerID,team,realname,country,birthday from DOTA_players";
$sqlcount0 = mysqli_query($link, $sql0) or die ("查询失败0");
$rows0 = mysqlToRows($link,$sql0);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>选手_DOTA2数据库</title>
		<link href="../../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
		<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="../../css/style.css" rel="stylesheet" type="text/css">
		<link href="../../bootstrap-table.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../../js/jQuery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../../js/npm.js"></script>
		<script type="text/javascript" src="../../js/bootstrap-table.js"></script>
		<script type="text/javascript" src="../../js/bootstrap-table-index.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1Heading">
						<span dir="auto">选手>Ameame</span>
					</h1>
				</div>
			</div>
			<div class="row" style="margin-top: 10px">
				<div class="col-xs-12 col-md-4">
					<div class="line0">
						<p>选手卡片</p>
					</div>
					<div class="pic">
						<img src="../../img/players/present/Ameame.jpg" style="width: 100%">
					</div>
					<div class="line1">
						<div class="left">
							<p>姓名：</p>
						</div>
						<div class="right">
							<p>王淳育</p>
						</div>
					</div>
					<div class="line2">
						<p>bbb</p>
					</div>
					<div class="line1">
						<p>bbb</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>