<?php
    session_start();
     // include database connection info
     include('pdo_connect.php');
     include('model/model.php');
     // Read the main task using the primary key 'mode'
     $mode = '';
      if (isset($_REQUEST['mode']))
           $mode = $_REQUEST['mode'];


     switch ($mode) {
	case 'checkLogin' :

		$data = checkValidUser();
		if (isset($data) && isset($data['client_id'])){
			$_SESSION['user'] = $data['last_name'].', '.$data['first_name'];
			$_SESSION['client_id'] = $data['client_id'];
		}
		include('view/header.php');
                include('view/sidemenu.php');
		include('view/defaultview.php');
		include('view/footer.php');
		break;

	case 'logout' :
		// destroy session variables and display login form
		session_destroy();
		setcookie(session_name(), '', time()-1000, '/');
        	$_SESSION = array();
		// display default view
                include('view/header.php');
                include('view/sidemenu.php');
                include('view/defaultview.php');
                include('view/footer.php');
		break;

	case 'displayProducts' :
     		include('view/header.php');
     		// include menu
     		include('view/sidemenu.php');
		$data = getProductList();
		include('view/productlistview.php');
                // include footer
    include('view/footer.php');
		break;

    case 'purchase':
      include('view/header.php');
      include('view/sidemenu.php');
      include('view/purchaseItem.php');
      include('view/footer.php');
    break;

    case 'purchaseHistory':
      include('view/header.php');
      include('view/sidemenu.php');
      $data = getPurchaseHistory($_SESSION['client_id']);
      include('view/purchaseHistory.php');
      include('view/footer.php');
    break;

    case 'currentEmail':
      include('view/header.php');
      include('view/sidemenu.php');
      $data=getCurrentEmail();
      include('view/updateEmail.php');
      include('view/footer.php');
    break;

    case 'confirmnewemail':
    include('view/header.php');
    include('view/sidemenu.php');
      $email = (isset($_POST['current_email'])) ? $_POST['current_email'] : -1;
        $result = confirmNewEmail($_SESSION['client_id'], $email);
    include('view/footer.php');
    break;

        default :
                // display default view
    		include('view/header.php');
     		// include menu
     		include('view/sidemenu.php');
		include('view/defaultview.php');
		// include footer
        	include('view/footer.php');

                break;
        }
?>
