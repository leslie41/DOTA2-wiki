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
						<span dir="auto">选手</span>
					</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="tabs-static">
						<ul class="list-inline nav-tabs">
							<li class="active"><a href="">中国</a></li>
							<li><a href="">欧洲</a></li>
							<li><a href="">独联体</a></li>
							<li><a href="">北美州</a></li>
							<li><a href="">东南亚</a></li>
							<li><a href="">南美洲</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<table class="table">
						<tr>
							<th>选手ID</th>
							<th>姓名</th>
							<th>战队</th>
							<th>国籍或地区</th>
							<th>生日</th>
						</tr>
						<?php foreach ($rows0 as $key => $val) {?>
						<tr>
							<td><?php echo $val['playerID'] ?></td>
							<td><?php echo $val['realname'] ?></td>
							<td><?php echo $val['team'] ?></td>
							<td><?php echo $val['country'] ?></td>
							<td><?php echo $val['birthday'] ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>