<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Add room information</title>
 </head>
 <body>
 	<h1>Room Info </h1>
    <form method="post" action="__URL__/insertroom">
		<p>uid：<INPUT type="text" name="uid"></p>
		<p>hotel_id：<INPUT type="text" name="hotel_id"></p>
		<p>available number：<INPUT type="text" name="available_number"></p>
		<p>price：<INPUT type="text" name="price"></p>
		<INPUT type="submit" value="提交">
	</form>
 </body>
</html>