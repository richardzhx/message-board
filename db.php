<?php
//连接到数据库
$dsn = 'mysql:dbname=php message board;host=127.0.0.1';
$pdo = new PDO($dsn,'root','');

function write($pdo,$sql){
	//将sql送入到prepare方法
	$sth = $pdo->prepare($sql);
	//执行sql
	return $sth->execute();	
}

function read($pdo,$sql){
	$sth = $pdo->prepare($sql);
	$sth->execute();
	$rows = $sth->fetchAll();
	return $rows;
}


?>