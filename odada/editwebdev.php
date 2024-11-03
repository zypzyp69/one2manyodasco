<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getCustomerByID = getCustomerByID($pdo, $_GET['customer_id']); ?>
	<h1>Edit the Customer!</h1>
	<form action="core/handleForms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
		<p>
			<label for="firstName">Customer Name</label> 
			<input type="text" name="cus_name" value="<?php echo $getCustomerByID['cus_name']; ?>">
		</p>
		<p>
			<label for="firstName">Order Name</label> 
			<input type="text" name="order_name" value="<?php echo $getCustomerByID['cus_order']; ?>">
		</p>
		<p>
			<label for="firstName">Quantity</label> 
			<input type="text" name="quantity" value="<?php echo $getCustomerByID['quantity']; ?>">
		</p>
		<p>
			<label for="firstName">Amount of Payment</label> 
			<input type="text" name="amount_of_money" value="<?php echo $getCustomerByID['amount_of_money']; ?>">
			<input type="submit" name="editCustomerBtn">
		</p>
	</form>
</body>
</html>