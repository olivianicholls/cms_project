<?php include "includes/db.php"; ?>
<?php
function showNavigation() {
  global $connection;
  $query = "SELECT * FROM categories";
  $result = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $cat_title = $row["cat_title"];
    echo "<li><a href='#'>{$cat_title}</a></li>";
  }
}

 ?>
