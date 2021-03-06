<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<title>Zioła</title>
	<meta name = "keywords" content = "herbs">
   <meta name = "description" content = "Opisy ziół">
   <link rel="stylesheet" type="text/css" href="style_cookies.php" />   
   <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
   <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
   <link rel = "stylesheet" type = "text/css" href = "CSS/style-herbs.css">
</head>

<body>

    <?php
        if(!isset($_COOKIE['user'])){
            $_SESSION['request'] = 'herbs.php';
            header("Location:log.php");
        }

        $USER = $_COOKIE['user'];
//        print("<p>User: $USER</p>");
//        print("<p><a href='logout.php'> Logout</a></p>");
    ?>

   <header>
    <h1>PRZEPIŚNIK</h1>
  </header>

    <nav> Menu
        <ul class = "first-level">
            <li><a href="index.php">Strona główna</a></li>
            <li>Kontakt
                <ul class = "second-level">
                    <li><a href="kontakt.html">Napisz do nas</a></li>
                    <li>Formularze
                        <ul class = "third-level">
                            <li><a href="form.php">Feedback</a></li>
                            <li><a href="form2.html">Formularz</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Przydatne
                <ul class = "second-level">
                    <li>Tabele
                        <ul class = "third-level">
                            <li><a href="tables.php">Przelicznik</a></li>
                        </ul>
                    </li>
                    <li><a href="herbs.php">Zioła</a></li>
                    <li><a href="random.php">Wylosuj przepis</a></li>
                    <li><a href="makeList.php">Twoja lista</a></li>
                    <li><a href="style_changes.html">Zmien wygląd strony</a></li>
                </ul>
            </li>
        </ul>
    </nav>
   
  <div class = "page-content">

      <div class = "flexbox">
      <div ><img src = "images/leaf.png" alt = "Bazylia">
        <h5>Bazylia</h5>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum augue felis, nec cursus lorem pretium vitae. Sed risus tellus, luctus at orci quis, vehicula volutpat libero. Vivamus a ultricies arcu. Fusce pulvinar lectus vel tempus iaculis. Nunc gravida, velit eget placerat vehicula, lacus lorem sodales felis, nec tempor lorem neque non purus. </p></div>
      <div><img src = "images/leaf.png" alt = "Natka pietruszki">
        <h5>Natka pietruszki</h5>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum augue felis, nec cursus lorem pretium vitae. Sed risus tellus, luctus at orci quis, vehicula volutpat libero. Vivamus a ultricies arcu. Fusce pulvinar lectus vel tempus iaculis. Nunc gravida, velit eget placerat vehicula, lacus lorem sodales felis, nec tempor lorem neque non purus.</p></div>
      <div><img src = "images/leaf.png" alt = "Rozmaryn">
        <h5>Rozmaryn</h5>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum augue felis, nec cursus lorem pretium vitae. Sed risus tellus, luctus at orci quis, vehicula volutpat libero. Vivamus a ultricies arcu. Fusce pulvinar lectus vel tempus iaculis. Nunc gravida, velit eget placerat vehicula, lacus lorem sodales felis, nec tempor lorem neque non purus.</p></div>
      <div><img src = "images/leaf.png" alt = "Tymianek">
        <h5>Tymianek</h5>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum augue felis, nec cursus lorem pretium vitae. Sed risus tellus, luctus at orci quis, vehicula volutpat libero. Vivamus a ultricies arcu. Fusce pulvinar lectus vel tempus iaculis. Nunc gravida, velit eget placerat vehicula, lacus lorem sodales felis, nec tempor lorem neque non purus.</p></div>
      </div>
   </div>

   <footer>
    &copy;2017 Martyna i Ada
   </footer>
</body>
</html>