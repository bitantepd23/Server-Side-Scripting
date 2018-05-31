<h2> Modify Selected Movie</h2>
<form action='index.php?mode=updatemoviedata' method='post' >
<table>
<tr>
	<td>Title: </td>
	<td><input type='text' name='title' 
	value='<?php echo $dataList['title'] ; ?>' /></td>
 </tr>
<tr>
	<td>Genre: </td>
	<td><input type='text' name='type'
	value='<?php echo $dataList['type']; ?>' /></td>
</tr>
<tr>
	<td>Year: </td>
	<td><input type='text' name='year'
	value='<?php echo $dataList['year'];?>' /></td>
</tr>
</table>
<p><button type='submit' class='btn btn-primary' >Update </button>
</p></form>
