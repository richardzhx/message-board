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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >

    <title>管理员界面</title>
	


</head>

<body>
	<div class="container">
				
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">首页</a></li>
				<li class="breadcrumb-item"><a href="admin.php">评论删除</a></li>
				<li class="breadcrumb-item"><a href="show.php">账号密码</a></li>
				<li class="breadcrumb-item"><a href="#">敬请期待</a></li>
			</ol>
		</nav>
			<form action ="delete.php" method="POST">
			<div class='row'>
				
				
				
				<div class = 'col-3'>
					<div class="form-group">
						
						<input name='id' class="form-control" type="text"  placeholder="删除id" aria-label="删除id" aria-describedby="basic-addon1"/>
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
						
						<form action ="delete.php" method="POST">	
							<a name = 'id'>
								id： 
									
								<?php 
								
								$id = $value['id'];
								echo $id;
								?>
							</a>
						</form>
						
					</div>
				<?php
				}
				?>
					
					
				</div>
			</div>	
		
	</div>
	
</body>
</html>
