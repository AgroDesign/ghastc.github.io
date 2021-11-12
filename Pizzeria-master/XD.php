<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zamówienie przyjęte - Pizzeria Mamma Mia!</title>
<link href='http://fonts.googleapis.com/css?family=Crete+Round&subset=latin-ext' rel='stylesheet' type='text/css'>

<style>
body
{
background-repeat: no-repeat;
background-position: top;
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
background-color: #ffffdd;
color:black;
margin: 0;
padding: 0;
}
.pasek{
	position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 30px;
    background-color: #32cd32;
	float:left;
	padding-left:110px;
}
.button1{
	width:200px;
	height:30px;
	background-color: #32cd32;
	float: left;
	text-align: center;
	margin-left:8px;
}
.button1 i{font-family: 'Crete Round', sans-serif;
font-size:20px;}

.button1:hover{
	background-color: #21bc21;
	color: #eeeeee;
}
a.tilelink2
{
	color:#ffffff;
	text-decoration:none;
	display:block;
}
.con{
width:840px;
height:350px;
font-size:40px;
color:black;
font-family: 'Crete Round', sans-serif;
text-align:left;
margin-top:11%;
margin-left:6%;
}
#header-inner{
	height:40px;
	display:none;
}
 nav{
	float:right;
	padding:25px 20px 0 0;
}
#menu-icon{display:hidden;
width:40px;
height:40px;
border-radius:10px;

}
a:hover:#menu-icon{
	border-radius:4px 4px 0 0;
}
ul{
list-style-type:none;}
nav ul li{
	font-size:150%;
	display:inline-block;
	float:right;
	padding:10px;
}
nav ul li a{
color:#f5f5f5;
}
nav ul li a:hover{
	color:#c3d7df;
}
.button2{
	display:none;
	width:100%;
	height:25px;
}
ol {
        list-style-type:none;
        padding:0;
        margin:0;
        background-color: #32cd32;
        font-size:18px;
        height:25px;
        line-height:30px;
        text-align:center;
      }

      ol a {
        display:block;
        text-decoration:none;
        color:#fff;
        padding:0 5px;
      }

      ol > li {
        float:left;
		margin-left:140px;
        width:180px;
        background-color:#303030;
		color:white;
        height:25px;
		display:none;
      }

	  ol > li:hover {
        background-color:#EEE;
      }

      ol > li:hover > a {
        color:#ff1919;
      }

      ol > li:hover > ul {
        display:block;
      }

      ol > li > ul {
        display:none;
        list-style-type:none;
        padding:0;
        margin:0;
      }

      ol > li > ul > li {
        position:relative;
        background-color:#EEE;
      }

      ol > li > ul > li > a {
        border-top:1px solid #FFF;
		color:green;
      }

      ol > li > ul > li:hover {
        background-color:#DDD;
      }

      ol > li > ul > li:hover > a {
        color:#09C;
      }
                                         @media screen and (max-width: 1150px) {
	.rectangle{
	width: 900px;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left: 160px;
}
.square
{
	width: 50%;
	float:left;
}
.pasek{
	position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 25px;
    background-color: #32cd32;
	float:left;
}
.button1{
	width:120px;
	height:25px;
	margin-left:28px;
	background-color: #32cd32;
}
.button1 i{
font-size:14px;
			}


}

                                                          @media screen and (max-width: 960px) {

.pasek{
	position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 25px;
    background-color: #32cd32;
	float:left;
}
.button1{
	width:120px;
	height:25px;
	margin-left:28px;
	background-color: #32cd32;
}
.button1 i{
font-size:14px;
			}

}
                                                        @media screen and (max-width: 866px) {

.pasek{
	position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 25px;
    background-color: #32cd32;;
	float:left;
	padding-left:10px;
}
.button1{
	width:120px;
	height:25px;
	margin-left:8px;
	font-family:#32cd32;
}
.button1 i{
font-size:14px;
			}
	.con{
height:350px;
width:600px;
font-size:30px;
font-family: 'Crete Round', sans-serif;
text-align:left;
margin-top:10%;
}
			}

			                                                        @media screen and (max-width: 660px) {
.con{
height:230px;
font-size:23px;
width:450px;
font-family: 'Crete Round', sans-serif;
text-align:left;
margin-top:10%;
}

.pasek{
	position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 25px;
    background-color: #32cd32;
	float:left;
	padding-left:5px;
}
.button1{
display:none;
	width:100px;
	height:25px;
	margin-left:4px;
	font-family:#32cd32;
}
.button1 i{
font-size:14px;
			}
			.tekst{
	width:300px;
	height:300px;
	padding-left:23%;
	padding-top:10%;
}
.button2{
	display:block;
}
ol > li {
        float:left;
		margin-left:140px;
		margin-right:auto;
        width:180px;
        background-color:#ff1919;
		color:fff;
        height:25px;
		display:block;
}
}
              @media screen and (max-width: 525px) {
.con{
height:200px;
width:85%
font-size:15px;
font-family: 'Crete Round', sans-serif;
text-align:left;
margin-top:10%;
margin-left:5%;
}

.menu{
    padding: 15px 32px;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
	margin-right:10%;
	border-radius: 20px;
}
}
@media screen and (max-width: 480px) {
.con{
height:150px;
width:260px;
font-size:13px;
}
}

</style>
</head>
<body>
<?php
$host = "localhost";
$db_user ="root";
$db_password="";
$db_name="pizzeria";

      $pizza = $_POST['piz'];
      $name = $_POST['imie'];
      $tel = $_POST['tel'];
      $adres = $_POST['adres'];

    switch ($pizza) {
      case "Margharita":
            $cena= " cena: 26 zł + koszt dostawy";
            $price =26;
            break;
      case "Capriciosa":
                $cena= " cena: 30 zł + koszt dostawy";
                $price =30;
                break;
      case "Cacciatore":
          $cena= " cena: 31 zł + koszt dostawy";
          $price =31;
          break;
      case "Quatro Formaggi":
            $cena= " cena: 33 zł + koszt dostawy";
            $price =33;
            break;
      case "Siciliana":
                $cena= " cena: 34 zł + koszt dostawy";
                $price =34;
                break;
      case "Peperone":
          $cena= " cena: 36 zł + koszt dostawy";
          $price =36;
          break;
      case "Vegetariana":
            $cena= " cena: 34 zł + koszt dostawy";
            $price =34;
            break;
      case "Pescatore":
                $cena= " cena: 33 zł + koszt dostawy";
                $price =33;
                break;
      case "Marinara":
          $cena= " cena: 39 zł + koszt dostawy";
          $price =39;
          break;
      case "Funghi":
            $cena= " cena: 26 zł + koszt dostawy";
            $price =26;
            break;
      case "Romana":
                $cena= " cena: 36 zł + koszt dostawy";
                $price =36;
                break;
      case "Quatro Stragioni":
          $cena= " cena: 42 zł + koszt dostawy";
          $price =42;
          break;

      case "Tropicana":
            $cena= " cena: 40 zł + koszt dostawy";
            $price =40;
            break;
      case "Paesana":
                $cena= " cena: 39 zł + koszt dostawy";
                $price =39;
                break;
      case "Strong":
          $cena= " cena: 44 zł + koszt dostawy";
          $price =44;
          break;
      case "Bussola":
            $cena= " cena: 36 zł + koszt dostawy";
            $price =36;
            break;
      case "Torina":
                $cena= " cena: 30 zł + koszt dostawy";
                $price =30;
                break;
      case "Labella":
          $cena= " cena: 33 zł + koszt dostawy";
          $price =33;
          break;
      case "Venezia":
            $cena= " cena: 36 zł + koszt dostawy";
            $price =36;
            break;
      case "Diavolo":
                $cena= " cena: 26 zł + koszt dostawy";
                $price =26;
                break;
      case "Santa Lucia":
          $cena= " cena: 30 zł + koszt dostawy";
          $price =30;
          break;
      case "Autunno":
            $cena= " cena: 45 zł + koszt dostawy";
            $price =45;
            break;
      case "Carlo":
                $cena= " cena: 44 zł + koszt dostawy";
                $price =44;
                break;
      case "Frutti di Mare":
          $cena= " cena: 49 zł + koszt dostawy";
          $price =49;
          break;


      case "Mexicana":
                $cena= " cena: 44 zł + koszt dostawy";
                $price =44;
                break;
      case "Umberto":
          $cena= " cena: 43 zł + koszt dostawy";
          $price =43;
          break;
      case "Hawajska":
            $cena= " cena: 32 zł + koszt dostawy";
            $price =32;
            break;
      case "Bolognese":
                $cena= " cena: 26 zł + koszt dostawy";
                $price =26;
                break;
      case "Orient":
          $cena= " cena: 50 zł + koszt dostawy";
          $price =50;
          break;
      case "Farmerska":
            $cena= " cena: 46 zł + koszt dostawy";
            $price =46;
            break;
      case "Livigno":
                $cena= " cena: 39 zł + koszt dostawy";
                $price =39;
                break;
      case "Italia":
          $cena= " cena: 41 zł + koszt dostawy";
          $price =41;
          break;

      default:
        echo "xD";
}

      $conn = @new mysqli($host, $db_user, $db_password, $db_name);
      $conn->set_charset("utf8");

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

        $sql = " INSERT INTO `pizza_db` (`id`, `pizza`, `name`, `tel`, `adres`, `cena`)
                  VALUES (NULL, '$pizza', '$name', '$tel', '$adres', '$price')";

      if ($conn->query($sql) === TRUE) {
          $k = '<a>TWOJE ZAMÓWIENIE ZOSTAŁO PRZYJĘTE.<br />SZACOWANY CZAS DOSTAWY:<br /> 40 MINUT</a>';
        //  echo '<br/><br/><a href ="addNew.php">Powrót na stronę główną</a>';
      } else {
          $k = "Wystąpił błąd ,przepraszamy";
        //  echo '<br/><br/><a href ="dodaj.php">Powrót na stronę główną</a>';
      }

      $conn->close();


echo<<<END
<div class="pasek">
<div class="button1"><a href="restauracja.html" class="tilelink2"><i>STRONA GŁÓWNA</i></a></div>
<div class="button1"><a href="menu.html" class="tilelink2"><i>MENU</i></a></div>
<div class="button1"><a href="formu.html" class="tilelink2"><i>ZAMÓW</i></a></div>
<div class="button1"><a href="kont.html" class="tilelink2"><i>KONTAKT</i></a></div>
<div class="button1"><a href="galer.html" class="tilelink2"><i>GALERIA</i></a></div>

<div class="button2">
<ol>
    <li><a href="#">MENU</a>
      <ul>
        <li><a href="restauracja.html" >STRONA GŁÓWNA</a></li>
	<li><a href="menu.html" >MENU</a></li>
	<li><a href="formu.html" >ZAMÓW</a></li>
	<li><a href="kont.html" >KONTAKT</a></li>
	<li><a href="galer.html" >GALERIA</a></li>
      </ul>
    </li>
	</ol></div>
</div>

<div class="con">
    $k $cena
</div>
END;
?>
</body>
</html>
