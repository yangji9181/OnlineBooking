<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Generate Order</title>
 </head>
 <body>
 	<h1>Order Info </h1>
      <p>User ID: <?php echo ($data["user_id"]); ?></p>
      <p>Goods ID: <?php echo ($data["uid"]); ?></p>
      <p>Price: <?php echo ($data["price"]); ?></p>
      <p>Order State: New Order</p>
    <form method="get" action="__URL__/generate">
      <button> Confirm </button>
    </form>
 </body>
</html>