<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Search Hotel</title>
 </head>
 <body>
	<table border="0" align="center">
	<tr>
		<td>
		<form  method="post" action="__URL__/showroom">
			<select name="classname" size="1">
			<option value="hotel_name" selected> hotel name</option>
			</select>&nbsp;&nbsp;&nbsp;
			<input type="text" name="search" />
			<input type="submit" value="搜索" />
		</form>
</td>




</tr>
</table>
 </body>
</html>