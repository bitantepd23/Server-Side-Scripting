<?php
 function checkValidUser(){
        // validate user
        $sql = "select student_id, first_name, last_name from `uww_students` where username=:username and pwd = :pwd";
        // define values for parameters
        $values = array(':username'=>$_POST['username'], ':pwd'=>md5($_POST['pwd']));
        $result = getOne($sql, $values);
        return $result;
 }


  function getLocationList(){
	// define SQL statement
	$sql = "SELECT DISTINCT location FROM  `uww_course_schedule` WHERE location != '' ORDER BY location";
	$data= getAll($sql);
	return $data;
  }

  function getFullSchedule(){
	$sql = "SELECT schedule_id, subject, number, section, instructor, display_time, location
                        FROM uww_course_schedule
                        ORDER BY subject, number ,section";
	$data= getAll($sql);
        return $data;
  }

  function getMathSchedule(){
    $sql = "SELECT schedule_id, subject, number, section, instructor, display_time, location FROM uww_course_schedule WHERE subject = 'MATH' ORDER BY number ,section";

    $data = getAll($sql);
    return $data;
  }

  function getCompSciSchedule(){
    $sql = "SELECT schedule_id, subject, number, section, instructor, display_time, location FROM uww_course_schedule WHERE subject = 'COMPSCI' ORDER BY number ,section";

    $data = getAll($sql);
    return $data;
  }

  function getMAGDSchedule(){
    $sql = "SELECT schedule_id, subject, number, section, instructor, display_time, location FROM uww_course_schedule WHERE subject = 'MAGD' ORDER BY number ,section";

    $data = getAll($sql);
    return $data;
  }

  function getScheduleByLocation() {
    if (isset($_POST['location'])){
      $location = $_POST['location'];
    }
    $sql = "SELECT schedule_id, subject, number, section, instructor, display_time, location FROM uww_course_schedule WHERE location = '".$location."' ORDER BY number ,section";

    $data = getAll($sql);
    return $data;
  }

  function getCourseInfo(){
    $sql = "SELECT `uww_courses`.courseID, `uww_courses`.credits, `uww_courses`.title, `uww_courses`.description FROM uww_courses;";

    $data = getAll($sql);
    return $data;
  }


  function getStudentSchedule(){
    $sql = "SELECT `uww_student_schedule`.id, `uww_student_schedule`.student_id, `uww_student_schedule`.schedule_id, `uww_course_schedule`.subject, `uww_course_schedule`.number, `uww_course_schedule`.section, `uww_course_schedule`.instructor, `uww_course_schedule`.display_time, `uww_course_schedule`.location FROM `uww_student_schedule`, `uww_course_schedule` WHERE `uww_course_schedule`.schedule_id = `uww_student_schedule`.schedule_id AND `uww_student_schedule`.student_id = ".$_SESSION['student_id'].";";

    $data = getAll($sql);
    return $data;
  }

  function addtoSchedule(){
    global $db;
    if (isset($_POST['schedule_id'])){
      $schedule_id = $_POST['schedule_id'];
      // echo "<h1>Schedule ID of Clicked button: {$schedule_id}</h1>";
    }

    $sql = "INSERT INTO `uww_student_schedule` (student_id, schedule_id) values (:student_id, :schedule_id)";

    $courseInfo_sql = "SELECT * FROM `uww_student_schedule` WHERE student_id = {$_SESSION['student_id']}";
    $parameters = array(':student_id'=>$_SESSION['student_id'], ':schedule_id'=>$schedule_id);
    $stm = $db->prepare($sql);
    $stm->execute($parameters);
    $data=getStudentSchedule();
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
