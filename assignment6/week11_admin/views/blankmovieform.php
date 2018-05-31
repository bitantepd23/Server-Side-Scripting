<!-- create a form to define a new movie -->
<h2>Add New Movie</h2>
<form action='index.php?mode=confirmnewmovie' method='post'>
<table class='table'>
  <tr>
	<td>Title: </td>
	<td><input type='text' name='title' placeholder='Enter movie title' />
	</td>
  </tr>
  <tr>
        <td>Genre: </td>
        <td><input type='text' name='type' placeholder='Enter movie type' />
        </td>
  </tr>
  <tr>
        <td>Year: </td>
        <td><input type='text' name='year' placeholder='Enter movie year' />
        </td>
  </tr>
</table>
<p><button type='submit' class='btn btn-primary' >Add New Movie</button>
   <button type='reset' class='btn btn-danger' >Clear</button>
</form>
