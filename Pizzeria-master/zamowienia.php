<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="5">
    <meta name="description" content="costam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <!--  <link rel="stylesheet" href="style.css" type="text/css">   -->
    <title>Zamowienia</title>
    <style>
      body{
        background-color: 	#383838;
        color: #E0E0E0;
        margin: 0 0px;
        padding: 0px;
      }
      h1{
        color:#CCCC33;
        font-size: 48px;
        font-family: 'Lobster';
      }

      #top{
        width: 100%;
        height:120px;
        padding-top:1px;
background-color:#303030;
      }
      #pt{
        text-align: center;
      }

      #tyt{

        text-align: center;
        margin-top: 0px;
        margin:0px;
      }
      #container{
        margin-left: auto;
        margin-right: auto;
      }
      #pasta{

        margin-left: auto;
        margin-right: auto;
        width:500px;
        font-family: 'Oxygen Mono', monospace;
        font-size: 20px;

      }
    </style>
  </head>

  <body>
  <?php
  $host = "localhost";
  $db_user ="root";
  $db_password="";
  $db_name="pizzeria";

  $conn = @new mysqli($host, $db_user, $db_password, $db_name);
  $conn->set_charset("utf8");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
echo "<div id='pt'><h1>Twoje zamówienia</h1></div>";
  $sql = "SELECT * FROM pizza_db";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<div id='pasta'><article><p><br> Pizza: ". $row["pizza"]. "<br>"
        ."Klient: ". $row["name"] . "<br>"
        ."Telefon: ". $row["tel"] . "<br>"
        ."Adres: ". $row["adres"] . "<br>"
        ."Cana: ". $row["cena"] . " zł<br/></p></article></div>";

      }
  } else {
      echo "0 results";
  }
  $conn->close();
   ?>

  </body>
</html>
