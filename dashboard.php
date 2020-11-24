
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="./css/style-starter.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&amp;display=swap" rel="stylesheet">
    <style>
body {
  background-image: url('./pics/1.jpg');
}
</style>
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
<?php include_once("connect.php") ?>
</head>

<body>
  <section class="w3l-header-4">
      <header id="headers4-block" class="editContent">
          <div class="container">
              <div class="d-grid nav-mobile-block header-align">
                  <div class="logo">
                      <a class="brand-logo editContent" href="index.php" style="outline: none; cursor: inherit;">Home</a>
                  </div>
                  <input type="checkbox" id="nav">
                  <label class="nav" for="nav"></label>
                  <nav>
                      <label for="drop" class="toggle"><span class="fa fa-bars" style="outline: none; cursor: inherit;"></span></label>
                      <input type="checkbox" id="drop">
                      <ul class="menu">
                          <li class="propClone"><a href="contacts.php">Contacts</a></li>
                          <li class="propClone"><a href="fixupmeeting.php">Fix up Meeting</a></li>
                          <li class="propClone"><a href="meetings.php">Your meetings</a></li>
                         <li class="propClone"><a href="profile.php">Your profile</a></li>
                         <li class="propClone"><a href="logout.php">logout</a></li>
                      </ul>
                  </nav>
              </div>
          </div>
      </header>
  </section>
  <section class="w3l-main-banner" id="home">
   <div class="companies20-content">
     <div class="companies-wrapper">
         <div class="item">

             <div class="slider-info banner-view text-center bg bg2">
               <div class="banner-info container">
                 <img src="pics/study.jpg" alt="about image" class="img-fluid" style="outline: none; cursor: inherit;"width="375" height="450">
                 <h3 class="banner-text mt-5 editContent">Welcome : <?php echo $_SESSION["uid"]?>
                   </h3>

               </div>
             </div>

         </div>
     </div>
   </div>
 </section>

</body>
</html>
