<meta http -equiv="Content-type content="text/html;charset=utf-8">
<?php 
 //(0)数据库信息
 $db_host  =" localhost";
 $db_user  ="roott";
 $db_pwd   ="root";
 $db_name  =007online;

 //(1)登录到mysql服务器
  $link =@mysql_connect($db_host,$dbuser,$db_pwd);
  if(！$slink)
  {(!$link)
   //如果链接失败，显示错误信息
   echo "<font color =red>phplianjiemysql失败！</font>";
   exit();//终止脚本向下运行
  }
  //（2）选择数据库失败，则选择数据库失败，显示错误信息
  //（3）设置请求返回数据返回mysql
  mysql_query("set names utf8");
  //(4)执行各种语句
  $sql="select*from 007_news ordeer by id desc";
	  $result=mysql_query($sql);




?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body> 
    <table wideth ="100%" border="1"  bordercolor="#ccc"  rule="all" cellpadding ="5" align ="center">
    <tr>
		<th>编号</th>
		<th>新闻标题</th>
		<th>作者</th>
		<th>来源</th>
		<th>排序</th>
		<th>点击率</th>
		<th>发布时间</th>
    </tr>
	<?pHp
    while($arr=mysql_fetch_row($result)){
		echo "<pre>";
		print_r($arr);
		echo "</pre>;
		exit();
	  ?>
    <tr>
		<td><?php echo $arr[0]?></td>
		<td><?php echo $arr[2]?></td>
		<td><?php echo $arr[3]?></td>
		<td><?php echo $arr[4]?></td>
		<td><?php echo $arr[5]></td>
		<td><?php echo $arr[0]?></td>
		<td><?php echo $arr[10]?></td>
    </tr>
	<?php}?>
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
