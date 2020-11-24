<?php
//session_start();
//if(!isset($_SESSION["uid"]))
//{
//header("location:index.php");
}
?>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php include_once("connect.php") ?>

</head>
<body>
    <div class="container"> <h1>Create New Meeting </h1>
    <hr>
        <form action="./savemeeting.php" method="post">
            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Topic</label>
                    <input type="text" class="form-control" id="topic" placeholder="Topic Goes Here" name="topic">
                </div>
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Date</label>
                    <input type="date" class="form-control " id="date" name="date">
                </div>
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Time</label>
                    <input type="time" class="form-control " id="time" name="time">
                </div>
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Duration</label>
                    <input type="text" class="form-control " id="duration" name="duration" placeholder="Duration of the meeting">
                </div>
                <div class="modal-footer align-items-center">
                    <input type="submit" class="btn btn-primary" name="submit" value="Save Meeting">
                </div>
            </div>
        </form>
    </div>
</body>
</html>