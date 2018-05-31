<div class='col-xs-3'>
<?php if (isset($_SESSION['user'])){
?>
  <h4>Links</h4>
  <ul>
   <li><a href='index.php?mode=fullSchedule'>Schedule of Classes</a></li>
  </ul>
 <ol>
  

   <li>Schedule of Classes by  Subject
     <form id='form1' method='post' action='index.php'>
      <select id='subject-list' name='subject' class='form-control'>
        <option>--select subject--</option>
        <option value='COMPSCI'
	  <?php	if (isset($_POST['subject']) && $_POST['subject'] == 'COMPSCI')
                                echo " selected='selected' "; ?>

		>COMPSCI</option>
        <option value='MATH'
	<?php if (isset($_POST['subject']) && $_POST['subject'] == 'MATH')
                                echo " selected='selected' "; ?>
         >MATH</option>
        <option value='MAGD' 
	<?php if (isset($_POST['subject']) && $_POST['subject'] == 'MAGD')
                                echo " selected='selected' "; ?>
	>MAGD</option>
     </select>
     <input type='hidden' name='mode' value='subjectSchedule' />
    </form>
   </li>

  <li>Schedule of Classes by Location
     <form id='form2' method='post' action='index.php'>
      <select id='location-list' name='location' class='form-control'>
        <option selected='selected'>--select location--</option>
        <?php
              // include statements to generate a list of options
                $locationList = getLocationList();
                for ($i=0; $i<count($locationList); $i++){
                        echo "<option value='{$locationList[$i]['location']}' ";
                        if (isset($_POST['location']) && $_POST['location'] == $locationList[$i]['location'])
                                echo " selected='selected' ";

                        echo ">{$locationList[$i]['location']}</option>";
                }

        ?>
     </select>
     <input type='hidden' name='mode' value='locationSchedule' />
    </form>
   </li>



   <li><a href='index.php?mode=courseInfo'>Computer Science Course Information</a>
   <li><a href='index.php?mode=studentSchedule&studentid=<?php echo $_SESSION["student_id"];?>'>My Schedule</a>
   </li>



 </ol>
<?php
}
?>
</div>
