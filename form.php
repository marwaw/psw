<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<title>Formularz</title>
	<meta name = "keywords" content = "form, opinion, rating">
  <meta name = "description" content = "Forumlarz dotyczący strony">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
  <link rel = "stylesheet" type = "text/css" href = "CSS/style-form.css">
  <!--<script src="JS/zad5.js"></script>
  <script src="JS/zad4.js"></script>
  <script src="JS/zad2-forms.js"></script>-->
</head>

<body>

<?php
    if(!isset($_SESSION['user'])) {
        $_SESSION['request'] = "form.php";
        header("Location:log.php");
    }

    $USER = $_SESSION['user'];
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
  
  <div class = "page-content" onmousemove="showCoords(event)">
	<h2>Formularz</h2>
	<p>Wypełnienie tego formularza zajmie Ci tylko chwilę, a dzięki niemu będziemy mogły rozwijać tę stronę.</p>
  <p id = "help"> </p>

	<form id="feedback-form" method="post" action="form1_processing.php">

	    <p><label>Imię:
	        <input name = "name" type = "text" size = "25" maxlength = "30" id = "name" autofocus required> (np. Karol)
	    </label></p>

      <p><label>Nazwisko:
          <input name = "surname" type = "text" size = "25" maxlength = "30" id = "surname"> (np. Kowalski)
      </label></p>

      <p><label for = "txtList"> Miesiąc urodzenia:
          <input type = "text" list = "months" id = "birthMonth" name="month">
          <datalist id = "months">
            <option value = "Styczeń">
            <option value = "Luty">
            <option value = "Marzec">
            <option value = "Kwiecień">
            <option value = "Maj">
            <option value = "Czerwiec">
            <option value = "Lipiec">
            <option value = "Sierpień">
            <option value = "Wrzesień">
            <option value = "Październik">
            <option value = "Listopad">
            <option value = "Grudzień">
          </datalist> (np. Maj)
      </label></p>

	    <p><label>Email:
            <input name = "email" type = "email"  size = "25" id = "email"> (np. karol@domena.com)
         </label></p>


      <p><label>Tel:
            <input type = "tel"  id = "phone" name="tel" /> (np. (111-111-111)
          </label></p>

	    <p>
          <label>Wiek: 
            <select name = "age" id = "age">
              <option  > &lt; 0 </option>
              <option selected> 0-18 </option>
              <option>18-24</option>
              <option>25-35</option>
              <option>35-55</option>
              <option>55-80</option>
              <option> &gt;80 </option>
            </select>
          </label>
        </p>

        <p>Jak trafiłeś/aś na naszą stronę?<br>
          <label>Wyszukiwarka
            <input name = "howtosite" type = "radio"
              value = "search engine" checked></label>
          <label>Z polecenia znajomych
            <input name = "howtosite" type = "radio" 
              value = "friends"></label> 
          <label>Facebook
            <input name = "howtosite" type = "radio" 
              value = "facebook"></label>
          <label>Inne
            <input name = "howtosite" type = "radio" 
              value = "other"></label>
        </p>

        <p>Jakie przepisy interesowałyby Cię najbardziej?<br>
          <label>Desery
            <input name = "wanted[]" type = "checkbox" 
              value = "Dessert"></label>
          <label>Obiady
            <input name = "wanted[]" type = "checkbox" 
              value = "Lunch"></label>
          <label>Sezonowe
            <input name = "wanted[]" type = "checkbox" 
              value = "Season"></label> 
          <label>Śniadania
            <input name = "wanted[]" type = "checkbox" 
              value = "Breakfast"></label>
          <label>Przekąski
            <input name = "wanted[]" type = "checkbox" 
              value = "Snack"></label>
        </p>

        <p><label>Dodatkowe uwagi:<br>
          <textarea name = "comments"
            rows = "4" cols = "36" maxlength = "200">Twój komentarz</textarea>
          </label></p>

	    <p>
	       <input id="submit-btn" type = "submit" value = "Wyślij">
	       <input id = "reset" type = "reset" value = "Wyczyść" >
	    </p>   
    </form>
    <p>tu jesteś:<br/>
    <span id="coords"></span></p>
  </div>


  <footer>
    &copy;2017 Martyna i Ada
  </footer>

  </body>
</html>