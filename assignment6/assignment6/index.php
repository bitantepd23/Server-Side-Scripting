<?php
 // include database connection info
 include('pdo_connect.php');
// include functions needed to data from the database
 include('models/model.php');

// display header
 include('views/header.php');

// include menu
 include('views/sidemenu.php');

 // Read the main task using the primary key 'mode'
 $mode = '';
  if (isset($_REQUEST['mode']))
       $mode = $_REQUEST['mode'];


 switch ($mode) {
    case 'customerList' :
    // obtain a list of customers
    $dataList = getCustomerList();
    $columnLabels = array('Last Name', 'First Name');
    // include a template to display data
      include('views/customer_list.php');
    break;

    case 'tvList':
      $dataList = getTVList();
      $columnLabels = array('Title', 'Description', 'Cost');
      include('views/tv_list.php');
    break;

    case 'cellList':
      $dataList = getCellPhoneList();
      $columnLabels = array('Title', 'Description', 'Cost');
      include('views/cell_list.php');
    break;

    case 'computerList':
      $dataList = getComputerList();
      $columnLabels = array('Title', 'Description', 'Cost');
      include('views/computer_list.php');
    break;

    case 'transactionList':
      $dataList = getTransactionList();
      $columnLabels = array('Client (last, first)', 'Product Title', 'Product Description', 'Cost', 'Quantity');
      include('views/transactions_list.php');
    break;

    case 'productByClient':
    $clientID = '';
    if (isset($_REQUEST['client_id'])){
      $clientID = $_REQUEST['client_id'];
    }
      $dataList = getProductByClient($clientID);
      $columnLabels = array('Client (last, first)', 'Product Title', 'Cost', 'Quantity');
      include('views/productByClient_list.php');
    break;

    default :
    // display default view
      include('views/defaultview.php');
    break;
    }

// include footer
include('views/footer.php');
?>
