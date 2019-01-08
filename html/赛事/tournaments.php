
<?php
include '../function.php';
$link = mysqli_connect("localhost","Leslie","Iknowyou440","DOTA") or die ("错误：链接数据库失败");
mysqli_query($link,"set names 'utf8'");

$sql0 = "SELECT playerID,team,realname,country,birthday from DOTA_players";
$sqlcount0 = mysqli_query($link, $sql0) or die ("查询失败0");
$rows0 = mysqlToRows($link,$sql0);
?>
<!DOCTYPE html>
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
					<div class="bracket-scroller">
						<div style="width:1220px" class="bracket">
							<div class="bracket-matches" style="width:170px">
								<div style="height:40px margin-top:0px">
									<p></p>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<p>&nbsp;</p>
  							</div>
							<div class="bracket-matches" style="width:170px">
								<div style="height:40px">
									<div class="bracket-header">
										胜者组第一轮（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px">
									<div style="width:4px;height:75px"> </div>
									<div style="width:6px;height:18px;border-top-right-radius:3px;border:solid #aaa;border-width:2px 2px 0 0"> </div>
									<div style="width:4px;height:38px"> </div>
									<div style="width:6px;height:18px;border-bottom-right-radius:3px;border:solid #aaa;border-width:0 2px 2px 0"> </div>
									<div style="width:4px;height:33px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:93px;"> </div>
									<div style="width:6px;height:8px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:4px;height:22px;"> </div>
									<div style="width:6px;height:8px;border-top-left-radius:3px;border:solid #aaa;border-width:2px 0 0 2px"> </div>
									<div style="width:4px;height:51px;"> </div>
								</div>
								<div style="float:left;width:4px;clear:left;">
									<div style="width:4px;height:37px"> </div>
									<div style="width:6px;height:18px;border-top-right-radius:3px;border:solid #aaa;border-width:2px 2px 0 0"> </div>
									<div style="width:4px;height:38px"> </div>
									<div style="width:6px;height:18px;border-bottom-right-radius:3px;border:solid #aaa;border-width:0 2px 2px 0"> </div>
									<div style="width:4px;height:33px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:55px;"> </div>
									<div style="width:6px;height:8px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:4px;height:22px;"> </div>
									<div style="width:6px;height:8px;border-top-left-radius:3px;border:solid #aaa;border-width:2px 0 0 2px"> </div>
									<div style="width:4px;height:51px;"> </div>
								</div>
  							</div>
  							<div class="bracket-column" style="width:170px">
								<div>
									<div style="height:93px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:0 0 2px 0"> </div>
									<div style="height:22px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:2px 0 0 0"> </div>
									<div style="height:51px;"> </div>
								</div>
								<div>
									<div style="height:55px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:0 0 2px 0"> </div>
									<div style="height:22px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:2px 0 0 0"> </div>
									<div style="height:51px;"> </div>
								</div>
  							</div>
  							<div class="bracket-column" style="width:10px">
								<div>
									<div style="height:93px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:0 0 2px 0"> </div>
									<div style="height:22px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:2px 0 0 0"> </div>
									<div style="height:51px;"> </div>
								</div>
								<div>
									<div style="height:55px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:0 0 2px 0"> </div>
									<div style="height:22px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:2px 0 0 0"> </div>
									<div style="height:51px;"> </div>
								</div>
  							</div>
							<div class="bracket-matches" style="width:170px">
								<div style="height:40px">
									<div class="bracket-header">
										胜者组第二轮（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r2" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r2">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r2" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r2">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px">
									<div style="width:4px;height:111px"> </div>
									<div style="width:6px;height:54px;border-top-right-radius:3px;border:solid #aaa;border-width:2px 2px 0 0"> </div>
									<div style="width:4px;height:38px"> </div>
									<div style="width:6px;height:54px;border-bottom-right-radius:3px;border:solid #aaa;border-width:0 2px 2px 0"> </div>
									<div style="width:4px;height:69px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:165px;"> </div>
									<div style="width:6px;height:8px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:4px;height:22px;"> </div>
									<div style="width:6px;height:8px;border-top-left-radius:3px;border:solid #aaa;border-width:2px 0 0 2px"> </div>
									<div style="width:4px;height:123px;"> </div>
								</div>
  							</div>
  							<div class="bracket-matches" style="width:170px">
								<div>
									<div style="height:165px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:0 0 2px 0"> </div>
									<div style="height:22px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:2px 0 0 0"> </div>
									<div style="height:123px;"> </div>
								</div>
 							</div>
 							<div class="bracket-column" style="width:10px">
								<div>
									<div style="height:165px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:0 0 2px 0"> </div>
									<div style="height:22px;"> </div>
									<div style="height:8px;border:solid #aaa;border-width:2px 0 0 0"> </div>
									<div style="height:123px;"> </div>
								</div>
  							</div>						
							<div class="bracket-matches" style="width:170px">
								<div style="height:40px">
									<div class="bracket-header">
										胜者组决赛（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r3" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r3">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-matches" style="width:170px">
								<div style="height:52px;margin-top:16px">
									<div class="bracket-header">败者组第一轮（Bo1）</div></div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:105px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:68px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:8px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px;"> </div>
								</div>
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:49px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:12px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:8px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px;"> </div>
								</div>
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:49px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:12px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:8px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px;"> </div>
								</div>
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:49px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:12px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:8px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:23px;"> </div>
								</div>
  							</div>
							<div class="bracket-matches" style="width:170px">
								<div style="height:40px;margin-top:16px">
									<div class="bracket-header">
										败者组第二轮（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r1" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r1">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px">
									<div style="width:4px;height:91px"> </div>
									<div style="width:6px;height:18px;border-top-right-radius:3px;border:solid #aaa;border-width:2px 2px 0 0"> </div>
									<div style="width:4px;height:38px"> </div>
									<div style="width:6px;height:18px;border-bottom-right-radius:3px;border:solid #aaa;border-width:0 2px 2px 0"> </div>
									<div style="width:4px;height:33px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:109px;"> </div>
									<div style="width:6px;height:8px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:4px;height:22px;"> </div>
									<div style="width:6px;height:8px;border-top-left-radius:3px;border:solid #aaa;border-width:2px 0 0 2px"> </div>
									<div style="width:4px;height:51px;"> </div>
								</div>
								<div style="float:left;width:4px">
									<div style="width:4px;height:37px"> </div>
									<div style="width:6px;height:18px;border-top-right-radius:3px;border:solid #aaa;border-width:2px 2px 0 0"> </div>
									<div style="width:4px;height:38px"> </div>
									<div style="width:6px;height:18px;border-bottom-right-radius:3px;border:solid #aaa;border-width:0 2px 2px 0"> </div>
									<div style="width:4px;height:33px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:55px;"> </div>
									<div style="width:6px;height:8px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:4px;height:22px;"> </div>
									<div style="width:6px;height:8px;border-top-left-radius:3px;border:solid #aaa;border-width:2px 0 0 2px"> </div>
									<div style="width:4px;height:51px;"> </div>
								</div>
  							</div>
							<div class="bracket-matches" style="width:170px">
								<div style="height:40px;margin-top:16px">
									<div class="bracket-header">
										败者组第三轮（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r2" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r2">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r2" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r2">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:129px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:59px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:92px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:8px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:59px;"> </div>
								</div>
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:85px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:59px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:48px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:7px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:59px;"> </div>
								</div>
  							</div>
							<div class="bracket-matches" style="width:170px">
								<div style="height:28px;margin-top:16px">
									<div class="bracket-header">
										败者组第四轮（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r2" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r2">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r2" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r2">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px">
									<div style="width:4px;height:115px"> </div>
									<div style="width:6px;height:54px;border-top-right-radius:3px;border:solid #aaa;border-width:2px 2px 0 0"> </div>
									<div style="width:4px;height:38px"> </div>
									<div style="width:6px;height:54px;border-bottom-right-radius:3px;border:solid #aaa;border-width:0 2px 2px 0"> </div>
									<div style="width:4px;height:69px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:169px;"> </div>
									<div style="width:6px;height:8px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:4px;height:22px;"> </div>
									<div style="width:6px;height:8px;border-top-left-radius:3px;border:solid #aaa;border-width:2px 0 0 2px"> </div>
									<div style="width:4px;height:123px;"> </div>
								</div>
  							</div>
  							<div class="bracket-matches" style="width:170px">
								<div style="height:28px;margin-top:16px">
									<div class="bracket-header">
										败者组第五轮（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r3" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r3">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bracket-column" style="width:10px">
								<div style="float:left;width:4px;clear:left;">
									<div style="width:6px;height:189px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:131px"> </div>
								</div>
								<div style="float:left;width:4px;">
									<div style="width:4px;height:152px;"> </div>
									<div style="width:6px;height:14px;border-bottom-left-radius:3px;border:solid #aaa;border-width:0 0 2px 2px"> </div>
									<div style="width:8px;height:23px;border-bottom:solid #aaa 2px"> </div>
									<div style="width:4px;height:131px;"> </div>
								</div>
  							</div>
  							<div class="bracket-matches" style="width:170px">
								<div style="height:16px;margin-top:16px">
									<div class="bracket-header">
										败者组决赛（Bo3）
									</div>
								</div>
								<div class="bracket-game">
									<div class="icon" style="margin-top:30px; right:16px"></div>
									<div class="bracket-cell-r3" style="font-weight:bold">
										<div class="bracket-team-top" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
									<div class="bracket-cell-r3">
										<div class="bracket-team-bottom" style="padding-right: 23px; cursor: pointer;" title="Click for further information" data-highlightingkey="Secretdotalogo_std.png">
											<span data-highlightingclass="Team Secret" class="team-template-team-bracket">
												<span class="team-template-image"><img alt="" src="../../img/战队/120*50/Secret.png" width="44" height="18"></span>
												<span class="team-template-text">Team Secret</span>
											</span>
											<div class="bracket-score" style="width:21px">2</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div style="clear: left">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>