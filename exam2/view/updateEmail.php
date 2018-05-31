<!-- create a form to update email -->
<h2>Update Email Address</h2>
<form action='index.php?mode=confirmnewemail' method='post'>
<table class='col-xs-4'>
  <tr>
	<td>Current Email: </td>
	<td><input type='text' name='current_email' value='<?php echo $data[0]['email'] ?>' />
	</td>
  </tr>
</table>
<p><button type='submit' class='btn btn-primary' >Update Email</button>
   <button type='reset' class='btn btn-danger' >Clear</button>
</form>
