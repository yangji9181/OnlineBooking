<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Add hotel information</title>
 </head>
 <body>
 	<h1>Hotel Info </h1>
    <form method="post" action="__URL__/inserthotel">
		<p>Hotel Name：<INPUT type="text" name="name"></p>
		<p>Star Level：<INPUT type="text" name="star_level"></p>
		<INPUT type="submit" value="提交">
	</form>
 </body>
</html>