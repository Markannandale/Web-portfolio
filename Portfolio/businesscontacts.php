<?php
// Start the session
  require_once('session.php');
  
  require_once('connectvars.php');
  
  // Connect to the database 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  
  // Retrieve the user data from MySQL
  $query = "SELECT name, company, address, phone_num FROM business_contacts ORDER BY name ASC";
  $data = mysqli_query($dbc, $query);
  
  // The log out link, which will log the user out of this page and take them to the homepage
  echo '<a href="logout.php">Log Out (' . $_SESSION['username'] . ')</a>';
  
  // Loop through the array of user data, formatting it as HTML ONLY if the user has been authorized
  if (isset($_SESSION['user_id'])) {
    echo '<h4>Contacts:</h4>';
    echo '<table>';
    while ($row = mysqli_fetch_array($data)) {
      echo '<tr><td class="contactinfo">';
      echo '<strong>Name:</strong> ' . $row['name'] .'<br />';
      echo '<strong>Company:</strong> '. $row['company'] .'<br />';
      echo '<strong>Address:</strong> '. $row['address'] .'<br />';
      echo '<strong>Phone number:</strong> '. $row['phone_num'].'</td></tr>';
    } 
    echo '</table>';
    
    mysqli_close($dbc);
  }
  else {
      echo '<h3>You are not authorized to access this webpage</h3>';
  }
?>

<script>
function moreInfo()
{
   alert("<?php echo 'Name: ' . $row['name']?>\n <?php echo 'Company: ' . $row['company']?>\n <?php echo 'Address: ' . $row['address']?>\n <?php echo 'Phone number: ' . $row['phone_num']?>")
}
</script>