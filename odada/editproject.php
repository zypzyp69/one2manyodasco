<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="index.php">Return to home</a>
	<?php $getAllInfoByCustomerID = getAllInfoByCustomerID($_GET['customer_id']); ?>
	<h1>Add New Order</h1>
	<form action="core/handleForms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
		<p>
			<label for="firstName">Customer Name</label> 
			<input type="text" name="cusame">
		</p>
		<p>
			<label for="firstName">Price</label> 
			<input type="text" name="price">
			<input type="submit" name="insertNewOrderBtn">
		</p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Order ID</th>
	    <th>Order Name</th>
	    <th>Price</th>
	    <th>Customer</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getOrderByCustomer = getOrderByCustomer($pdo, $_GET['customer_id']); ?>
	  <?php foreach ($getOrderByCustomer as $row) { ?>
	  <tr>
	  	<td><?php echo $row['order_id']; ?></td>	  	
	  	<td><?php echo $row['order_name']; ?></td>	  	
	  	<td><?php echo $row['price']; ?></td>	  	
	  	<td><?php echo $row['customer_id']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editproject.php?order_id=<?php echo $row['order_id']; ?>&customer_id=<?php echo $_GET['customer_id']; ?>">Edit</a>

	  		<a href="deleteproject.php?order_id=<?php echo $row['order_id']; ?>&customer_id=<?php echo $_GET['customer_id']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

	
</body>
</html>