<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
 >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</head>
<body>
	<div class="container"> <h1>Meetings Held</h1><hr></div>
  <?php 
    //$servername = "localhost";
    //$username = "root";
    //$dbname = "activity_logger";

    //$conn = new mysqli($servername, $username, $dbname);
    // Check connection
    //if ($conn->connect_error) {
    //  die("Connection failed: " . $conn->connect_error);
    //}
    include_once("connect.php");

    $sql = "SELECT * from meetings";
    $result = $dbRef->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["date"]. " - Name: " . $row["time"]. " " . $row["admin"]. "<br>";
      }
    } else {
    echo "0 results";
    }
  ?>
	
</body>
</html>