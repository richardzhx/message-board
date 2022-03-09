<?php
include('db.php');

$sql = "SELECT * FROM `msg`  ORDER BY id DESC";

$rows = read($pdo,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- 必须的 meta 标签 -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 的 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>四中留言板</title>
	<link href="images/3.png" rel="shortcut icon">
	<style>
		.youqing{
			text-align: justify;
		}
	</style>

	
</head>

<body>
	<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="search">首页</a></li>
			<li class="breadcrumb-item"><a href="rule.php">留言守则</a></li>
			<li class="breadcrumb-item"><a href="login.php">管理员登录</a></li>			
		</ol>
	</nav>
	
	
		
		
		<div class="jumbotron">
			<h1 class="display-4">四中留言板</h1>
			<p class="lead">此留言板是专为四中做的留言板</p>
			
			
			
		</div>

			<form action ="save.php" method="POST">
			<div class='row'>
				
				<div class='col-12'>
					<div class="form-group">
						<textarea name='content'  class="form-control" rows='4' placeholder="请在此处输入留言内容" aria-label="请在此处输入留言内容" aria-describedby="basic-addon1"></textarea>
					</div>
				</div>
				
				<div class = 'col-3'>
					<div class="form-group">
						
						<input name='username' class="form-control" type="text"  placeholder="用户名" aria-label="用户名" aria-describedby="basic-addon1"/>
					</div>
				</div>
				
				<div class = 'col-9 d-flex'>
					<div class="form-group ml-auto">
						<input class='btn btn-primary' type='submit' value='提交'/>	
					</div>
					
				</div>
				
			</div>
			</form>
			
			<div class='row'>
				<div class='col-12'>
				<?php
				foreach($rows as $key=>$value){
				?>
					<div class='border rounded p-2 mb-2'>
						<div class='text-primary'><?php echo $value['username']; ?></div>
						<div><?php echo $value['content']; ?></div>
						<div class="text-right"><?php echo $value['time'];?></div>
						
						
						
					</div>
				<?php
				}
				?>
					
					
				</div>
			</div>
			<div>

				<div class="youqing">
					<p>友情链接：<a href="https://ka.lk.kaiuf.com" target="_blank">流量卡</a></p>
				</div>						



				
			</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-gRC4eoaRyQ8xv2X6Mnf+eOIrtON3wId3dAkwO0HQX26OrFBoLpjX/XWOJacSiZhL" crossorigin="anonymous"></script>
</body>
</html>
