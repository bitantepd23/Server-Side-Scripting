<div class='col-xs-9' id='content'>
  <h2>Course Information</h2>
  <table class='table'>
	<tbody>
<?php
// display each record
    if(isset($data) && count($data)>0){
      for ($i=0; $i <count($data); $i++){
	$item = $data[$i]; //each element is an object
  if ($item['description'] == ""){
    $item['description'] = '<i><b>There is currently no description for this class.</b></i>';
  }
        echo "<tr><td class='col-xs-1'>
        <b>Course: </b></br>
        <b>Credits: </b></br>
        <b>Description: </b></br>
        </td><td class='col-xs-12'>
        {$item['courseID']} {$item['title']}</br>
        {$item['credits']}</br>
        {$item['description']}</br>
    </td>
	  </tr>";
      }
    } else echo "Could not find results";

?>
	</tbody>
  </table>
</div>
