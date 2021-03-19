<?php  require_once 'header.php'; ?>

<h1>STATS</h1>
<table>
<?php
$id = $_GET["name"];

  $con = mysqli_connect("localhost","root","","worlddata");
  $sql = "SELECT Code, Name, GovernmentForm, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, GNPOld, LocalName, Name As Langue FROM Country WHERE Name = '$id'";
  $resultat=mysqli_query($con, $sql);
  while($ligne=mysqli_fetch_array($resultat)){
      echo "<tr><th>Code</th><th>GovernmentForm</th><th>Continent</th><th>Region</th><th>SurfaceArea</th><th>IndepYear</th><th>Population</th><th>LifeExpectancy</th><th>GNP</th><th>GNPOld</th><th>LocalName</th>
            </tr><td class='paystd'>".$ligne["Code"]."</td><td class='paystd'>".$ligne["GovernmentForm"]."</td><td class='paystd'>".$ligne["Continent"]."</td><td class='paystd'>".$ligne["Region"]."</td><td class='paystd'>".$ligne["SurfaceArea"]."</td><td class='paystd'>".$ligne["IndepYear"]."</td><td class='paystd'>".$ligne["Population"]."</td><td class='paystd'>".$ligne["LifeExpectancy"].
           "</td><td class='paystd'>".$ligne["GNP"]."</td><td class='paystd'>".$ligne["GNPOld"]."</td><td class='paystd'>".$ligne["LocalName"]."</td></tr>";
  }
?>
</table>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
