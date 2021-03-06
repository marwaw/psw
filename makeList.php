<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<title>Planer</title>
	<meta name = "keywords" content = "plan, shopping">
	<meta name = "description" content = "Strona do planowania">
	<link rel="stylesheet" type="text/css" href="style_cookies.php" />	
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
    <link rel = "stylesheet" type = "text/css" href = "CSS/edit-style.css">
   <script src="JS/zad1.js"></script>      
   <script src="JS/zad3.js"></script>

</head>

<body>

    <?php
        if(!isset($_COOKIE['user'])){
            $_SESSION['request'] = 'makeList.php';
            header("Location:log.php");
        }

        $USER = $_COOKIE['user'];
        print("<p>User: $USER</p>");
        print("<p><a href='logout.php'> Logout</a></p>");
        print("<p><a href = 'registerEditForm.php'> Edytuj swoje dane</a></p>");
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
		<h3 id = "title"> Stwórz swoją listę </h3>
		<div id = "your-place">
			
		</div>

		<div id = "nav" class = "nav">
         <form action = "#">
            <p><input type = "text" id = "gbi">
               <input type = "button" value = "Znajdz element po id"
                  id = "byIdButton"></p>

            <p><input type = "text" id = "insTitle">
               <input type = "button" value = "Dodaj listę o podanym tytule"
                  id = "insertListButton"></p>

            <p><input type = "text" id = "append">
               <input type = "button" value = "Dodaj pozycję do listy"
                  id = "appendButton"></p>

            <p><input type = "text" id = "replace">
               <input type = "button" value = "Zamień element z listy"
                  id = "replaceButton"></p>

            <p><input type = "text" id = "ins">
               <input type = "button" value = "Wstaw notatkę przed element"
                  id = "insertButton"></p>

            <p><input type = "button" value = "Usuń zaznaczony"
                  id = "removeButton"></p>

            <p><input type = "button" value = "Przejdź wyżej"
                  id = "parentButton"></p>
         </form>
      </div>
      	<p>Jaki kolor wybierzesz dla swojej listy?
			<ul> 
  				<li onclick="colours(1)">granatowy</li>
 				<li onclick="colours(2)">różowy</li>
  				<li onclick="colours(3)">morski</li>
			</ul>
		</p>
		<p>Jaką czcionkę wybierzesz dla swojej listy?
			<ul> 
  				<li onclick="fontsf(1)">Impact</li>
  				<li onclick="fontsf(2)">Sans-serif</li>
  				<li onclick="fontsf(3)">Charcoal</li>
			</ul>
		</p>
		<p>Jaki kolor czcionki wybierzesz dla swojej listy?
			<ul> 
  				<li onclick="fontscol(1)">fioletowy</li>
 				<li onclick="fontscol(2)">zielony</li>
  				<li onclick="fontscol(3)">biały</li>
			</ul>
		</p>



	</div>
	<footer>
    &copy;2017 Martyna i Ada
	</footer>
</body>
</html>