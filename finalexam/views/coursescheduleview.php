<div class='col-xs-9' id='content'>
  <h2>Course Schedule: Spring 2017</h2>
  <table class='table'>
	<thead class='thead'>
	   <tr>
		<td class='col-xs-1'>&nbsp;</td>
		<td class='col-xs-2'>Course</td><td class='col-xs-1'>Section</td>
		<td class='col-xs-2'>Location</td>
		<td class='col-xs-4'>Time</td><td class='col-xs-2'>Instructor</td>
	  </tr>
	</thead>
	<tbody>
<?php
// display each record
    if(isset($data) && count($data)>0){
      for ($i=0; $i <count($data); $i++){
	$item = $data[$i]; //each element is an object
        echo "<tr>
		<td class='col-xs-1'>
			<form action='index.php' method='post'>
			<button type='submit'  class='btn btn-primary'>Add</button>
			<input type='hidden' name='mode' value='addtoSchedule' />
			<input type='hidden' name='schedule_id' value='{$item['schedule_id']}' />
			</form>
		</td>
		<td class='col-xs-2'>{$item['subject']} {$item['number']}</td> 
		<td class='col-xs-1'>{$item['section']}</td><td class='col-xs-2'>{$item['location']}</td>
		<td class='col-xs-4'>{$item['display_time']}</td><td class='col-xs-2'>{$item['instructor']} </td>
	     </tr>";
      }
    } else echo "Could not find results";
?>
	</tbody>
  </table>
</div>

