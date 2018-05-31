<?php

 function checkValidUser(){
	// validate user
	$sql = "select client_id, first_name, last_name from clients where
		username=:username and pwd = :pwd";
	// define values for parameters
	$values = array(':username'=>$_POST['username'], ':pwd'=>md5($_POST['pwd']));
	$result = getOne($sql, $values);
	return $result;
 }

  function getProductList(){
	// define SQL statement
	$sql = 'select * from products ORDER BY product_type';
	$data= getAll($sql);
	return $data;
  }

function calculateCart($client_id, $product_id, $quantity){
  global $db;
    $sql = "INSERT INTO `sales` (client_id, product_id, quantity) values (:client_id, :product_id, :quantity)";
    // if (isset($_POST['product_id'])) $product_id = $_POST['product_id'];
    $title_sql = "SELECT product_title FROM products WHERE product_id = {$product_id}";
    $parameters = array(':client_id'=>$client_id, ':product_id'=>$product_id, ':quantity'=>$quantity);
    $stm = $db->prepare($sql);
    $stm->execute($parameters);
    $data=getAll($title_sql);
    return $data;
  }

  function getPurchaseHistory($client_id){
    $sql = "SELECT `sales`.quantity, `products`.product_title, `products`.unit_price FROM `sales`, `products` WHERE `sales`.client_id = {$_SESSION['client_id']} AND `products`.product_id = `sales`.product_id";
    $data = getAll($sql);
    return $data;
  }

  function getCurrentEmail(){
    $sql = "SELECT email FROM clients WHERE client_id = {$_SESSION['client_id']}";
    $data = getAll($sql);
    return $data;
  }

  function confirmNewEmail($client_id, $email){
    global $db;
    $sql = "UPDATE `clients` SET email = :email WHERE client_id = :client_id";
    $parameters = array (':email'=>$email, ':client_id'=>$client_id);
    $stm=$db->prepare($sql);
    $stm->execute($parameters);
    echo "<h2>You have updated your email to:</h2><br> <h3><b>{$email}</b></h3>";
    return true;
  }

  function getOne($sql, $parameter = null){
        global $db;
        $statement = $db->prepare($sql);
        // execute the SQL statement
        $statement->execute($parameter);
        // return result
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
  }


  function getAll($sql, $parameter = null){
        global $db;
        $statement = $db->prepare($sql);
        // execute the SQL statement
        $statement->execute($parameter);
        // return result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
  }

?>
