<?php


  function getCustomerList(){
	// define SQL statement
	$sql = 'select client_id, first_name, last_name from clients ORDER BY last_name, first_name';
	$data= getAll($sql);
	return $data;
  }

  function getTVList(){
    // define SQL statement
    $sql = "SELECT product_title, product_description, unit_price FROM products WHERE product_type = 'tv' ORDER BY product_title";
    $data= getAll($sql);
    return $data;
  }

  function getCellPhoneList() {
    // define SQL statement
    $sql = "SELECT product_title, product_description, unit_price FROM products WHERE product_type = 'cell' ORDER BY product_title";
    $data= getAll($sql);
    return $data;
  }


  function getComputerList() {
    // define SQL statement
    $sql = "SELECT product_title, product_description, unit_price FROM products WHERE product_type = 'computer' ORDER BY product_title";
    $data= getAll($sql);
    return $data;
  }

  function getTransactionList() {
    // define SQL statement
    $sql = "SELECT `clients`.first_name, `clients`.last_name, `products`.product_title, `products`.product_description, `products`.unit_price, `sales`.quantity FROM `clients`, `products`, `sales` WHERE `clients`.client_id = `sales`.client_id AND `products`.product_id = `sales`.product_id ORDER BY `clients`.last_name;";
    $data= getAll($sql);
    return $data;
  }

  function getProductByClient($client_id_in) {
    // define SQL statement
    $sql = "SELECT `clients`.first_name, `clients`.last_name, `products`.product_title, `products`.unit_price, `sales`.quantity FROM `clients`, `products`, `sales` WHERE `clients`.client_id = `sales`.client_id AND `products`.product_id = `sales`.product_id AND `clients`.client_id = $client_id_in;";
    $data= getAll($sql);
    return $data;
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
