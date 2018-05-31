<script>
$(document).ready(function(){
// Define an event handler
  $('#client-id').on('change', function() {
    $('#client-id').submit();
  });

  $('.dropdown-toggle').on('click', function() {
    $('.dropdown').toggleClass("open");
  });
});
</script>

<!-- left column -->
      <div class='col-xs-3'>
        <h3>Links</h3>
         <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='index.php?mode=customerList'>List of Customers</a></li>
            <li><a href='index.php?mode=tvList'>List of TVs</a></li>
            <li><a href='index.php?mode=cellList'>List of Cell Phones</a></li>
            <li><a href='index.php?mode=computerList'>List of Computers</a></li>
            <li><a href='index.php?mode=transactionList'>List of Transactions</a></li>
            <!-- <li class='dropdown'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">List of products from Specified Client<span class="caret"></span></a> -->



            <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">List of Products from Specific Client <span class="caret"></span></a>

      <ul class="dropdown-menu">
        <?php
        $query = 'SELECT DISTINCT client_id FROM clients;';
        $options = getAll($query);
          for ($i=0; $i<count($options); $i++){
            $clientID = $options[$i];
            echo "<li><a href=index.php?mode=productByClient&client_id={$clientID['client_id']}#>Client {$clientID['client_id']} </a></li>\n";
          }
          echo "</ul></li>";
        ?>

            </ul>
      </div>
