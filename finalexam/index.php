<?php
    session_start();
     // include database connection info
     include('pdo_connect.php');
    // include functions needed to data from the database
     include('models/model.php');
     // Read the main task using the primary key 'mode'
     $mode = '';
      if (isset($_REQUEST['mode']))
           $mode = $_REQUEST['mode'];

// echo $mode;
     switch ($mode) {
	case 'checkLogin' :

		$data = checkValidUser();
		if (isset($data) && isset($data['student_id'])){
			$_SESSION['user'] = $data['last_name'].', '.$data['first_name'];
			$_SESSION['student_id'] = $data['student_id'];
		}

    include('views/header.php');
    include('views/sidemenu.php');
		include('views/defaultview.php');
		include('views/footer.php');
		break;

	case 'logout' :
		// destroy session variables and display login form
		session_destroy();
		setcookie(session_name(), '', time()-1000, '/');
        	$_SESSION = array();
		// display default views
                include('views/header.php');
                include('views/sidemenu.php');
                include('views/defaultview.php');
                include('views/footer.php');
		break;


	case 'fullSchedule':
                 include('views/header.php');
                // include menu
                include('views/sidemenu.php');
                // display a form
                $data = getFullSchedule();
                include('views/coursescheduleview.php');
                // include footer
                include('views/footer.php');
                break;


  case 'subjectSchedule':
    if (isset($_POST['subject'])){
      $subject = $_POST['subject'];
    }

    include('views/header.php');
    include('views/sidemenu.php');

    switch($subject) {

      case 'COMPSCI':
        $data = getCompSciSchedule();
      break;

      case 'MATH':
        $data = getMathSchedule();
      break;

      case 'MAGD':
        $data = getMAGDSchedule();
      break;
    }

    include('views/coursescheduleview.php');
    include('views/footer.php');
  break;

  case 'locationSchedule':
    if (isset($_POST['location'])){
      $location = $_POST['location'];
    }
    include('views/header.php');
    include('views/sidemenu.php');

    // echo $location;
    $data = getScheduleByLocation();
    include('views/coursescheduleview.php');
    include('views/footer.php');
  break;

  case 'courseInfo':
    include('views/header.php');
    include('views/sidemenu.php');
    $data = getCourseInfo();
    include('views/courseinfoview.php');
    include('views/footer.php');
  break;

  case 'studentSchedule':
    include('views/header.php');
    include('views/sidemenu.php');
    $data = getStudentSchedule();
    include('views/studentscheduleview.php');
    include('views/footer.php');
  break;

  case 'addtoSchedule':
    include('views/header.php');
    include('views/sidemenu.php');
    $data = addtoSchedule();
    include('views/studentscheduleview.php');
    include('views/footer.php');
  break;

        default :
                // display default view
    		include('views/header.php');
     		// include menu
     		include('views/sidemenu.php');
		include('views/defaultview.php');
		// include footer
        	include('views/footer.php');

                break;
        }
?>
