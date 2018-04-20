<?php
//包含连接mysql的文件
include  "conn.php";
//构建查询的sol语句
$sql ="select*from 007_nems where id ORDER BY ID DESC";
echo $sql;
exit();

$result = mysql _query($sql);
?>

<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>新闻管理列表页</title>
  <title>Document</title>
 </head>
 <body><table width ="100% border="1">
 <tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
 </tr>
 <tr>
	<td><?php echo $arr['id']   ?></td>
	<td><?php echo $arr['title']   ?></td>
	<td><?php echo $arr['author']   ?></td>
	<td><?php echo $arr['source']   ?></td>
	<td><?php echo $arr['orderby']   ?></td>
	<td><?php echo $arr['hits']   ?></td>
	<td><?php echo $arr['addate<strong></strong>']   ?></td>
 </tr>
 <tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
 </tr>
 </table>
  
 </body>
</html>
