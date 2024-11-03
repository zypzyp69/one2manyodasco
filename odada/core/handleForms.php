<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertCustomerBtn'])) {

	$query = insertCustomer($pdo, $_POST['table_num'], $_POST['cus_name'], 
		$_POST['cus_order'], $_POST['quantity'], $_POST['amount_of_money']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}


if (isset($_POST['editCustomerBtn'])) {
	$query = updateCustomer($pdo, $_POST['cus_name'], $_POST['order_name'], $_POST['quantity'], $_POST['amount_of_money'], $_GET['customer_id']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Edit failed";;
	}

}




if (isset($_POST['deleteCustomerBtn'])) {
	$query = deleteCustomer($pdo, $_GET['customer_id']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Deletion failed";
	}
}




if (isset($_POST['insertNewOrderBtn'])) {
	$query = insertOrder($pdo, $_POST['order_name'], $_POST['price'], $_GET['customer_id']);

	if ($query) {
		header("Location: ../viewprojects.php?customer_id=" .$_GET['customer_id']);
	}
	else {
		echo "Insertion failed";
	}
}




if (isset($_POST['editOrderBtn'])) {
	$query = updateOrder($pdo, $_POST['order_name'], $_POST['price'], $_GET['order_id']);

	if ($query) {
		header("Location: ../viewprojects.php?customer_id=" .$_GET['customer_id']);
	}
	else {
		echo "Update failed";
	}

}




if (isset($_POST['deleteOrderBtn'])) {
	$query = deleteOrder($pdo, $_GET['order_id']);

	if ($query) {
		header("Location: ../viewprojects.php?customer_id=" .$_GET['order_id']);
	}
	else {
		echo "Deletion failed";
	}
}




?>


