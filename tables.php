<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<title>Tabele</title>
	<meta name = "keywords" content = "table">
   <meta name = "description" content = "Tu są tabele">
   <link rel="stylesheet" type="text/css" href="style_cookies.php" />
   <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
   <link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
   <link rel = "stylesheet" type = "text/css" href = "CSS/style-table.css">
</head>

<body>
    <?php
        if(!isset($_COOKIE['user'])){
            $_SESSION['request'] = 'tables.php';
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
	<table class = "table-convert">
        <caption><strong>Przelicznik miar</strong></caption>

        <thead>
           	<tr>
               <th rowspan = "2">Produkt</th>

               <th>Szklanka</th>
               <th>Łyżka stołowa</th>
               <th>Łyżeczka</th>
            </tr>
            <tr>
               <th colspan = "3">zawiera gram:</th>
            </tr>
        </thead>

        <tbody>
            <tr>
               <th>Mąka pszenna</th>
               <td>170</td>
               <td>12</td>
               <td>3</td>
            </tr>
            <tr>
               <th>Mąka ziemniaczana</th>
               <td>180</td>
               <td>12</td>
               <td>3</td>
            </tr>
            <tr>
               <th>Cukier</th>
               <td>240</td>
               <td>16</td>
               <td>4</td>
            </tr>
            <tr>
               <th>Masło</th>
               <td>240</td>
               <td>20</td>
               <td>5</td>
            </tr>
            <tr>
               <th>Masło topione</th>
               <td>230</td>
               <td>18</td>
               <td>5</td>
            </tr>
         </tbody>
        
      </table>

      <br>
      <table class = "table-convert">
      	<tr><th>1 jajko =</th></tr>
      	<tr><td>
      		<table class = "table-convert">
      			<tr>
      				<td rowspan="2">pół banana</td>
      				<td>1 łyżka siemienia lnianego</td>
      				<td>1 łyżka nasion chia</td>
      			</tr>
      			<tr>
      				<td>3 łyżki wody</td>
      				<td>1/3 szklanki wody</td>
      			</tr>
      				
      		</table>
      	</td></tr>
      </table>


   </div>
   <footer>
    &copy;2017 Martyna i Ada
   </footer>
</body>
</html>