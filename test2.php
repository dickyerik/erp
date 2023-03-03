<?php

require 'functions.php';

$sql = "SELECT * FROM masterasset";
$result = mysqli_query($conn, $sql);
$json_array = array();

while ($data = mysqli_fetch_assoc($result)) {
  $json_array[] = $data;
}

echo json_encode($json_array);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
    $(function() {
      var Flowers = [];
      $("#flower").autocomplete({
        source: Flowers,
      });
    });
  </script>
</head>

<body>
  <div class="ui-widget">
    <p>Favourite Flower:</p>
    <label for="flower">Flower: </label>
    <input id="flower" />
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>