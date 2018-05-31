<!-- right column: content section -->
   <div class='col-xs-9' id='content'>
 <?php
        if (!isset($_SESSION['user'])){
?>
         <h3>Welcome to Semester Planner</h3>
         <h4>Please sign in</h4>
        <form action='index.php?mode=checkLogin' method='post'>
        <table class='table'>
          <tr>
                <td>Username: </td>
        <td><input type='text' name='username' placeholder='Enter username' /></td>
          </tr>
          <tr>
                <td>Password:</td>
                <td><input type='password' placeholder='Enter password' name='pwd' /></td>
           </tr>
        </table>
        <p><button type='submit' class='btn btn-primary' >Sign in </button>
           <button type='reset' class='btn' >Clear</button>
        </p>
        </form>
     </div>
<?php
}  else {
   // valid user. Display default view
?>

	<p>The Computer Science major at UW-Whitewater complements a robust technological presence on campus, which includes programs in Information Technology and Media Arts & Game Development.
</p>

<p>The major is geared toward students who want to pursue careers in software engineering, commercial software production, systems programming, Web development, and network, database, or computer design. According to the Bureau of Labor Statistics, half of the 10 fastest-growing careers for college graduates are computer science-related.
</p>
<p>The Computer Science Department offers a liberal arts major, leading to a Bachelor of Science with or Bachelor of Arts in computer science. There are two emphasis options: a general (requires a minor) or comprehensive emphasis.
</p>
<p>
In addition, the department offers several minors/emphases for students who would like a stronger background in computer science to complement their chosen major.</p>
    </div>

<?php
} // end if
?>
