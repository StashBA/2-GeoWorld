<?php  require_once 'header.php'; ?>

<meta charset="utf-8">

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en Asie</h1>
    <div>
      <table>

        <?php
        $con = mysqli_connect("localhost","root","","worlddata");
        $sql = 'SELECT * FROM Country WHERE Continent = "Asia"';
        $resultat=mysqli_query($con, $sql);
        while($ligne=mysqli_fetch_array($resultat)){
        $name= $ligne["Name"];
        echo"<form method='GET' action='pays.php'><tr><td><input type='submit' name='name' value='$name' style='border-radius: 25px; background-color: white;' name='$name'></input></td><td></form>";
        }
        ?>
      </table>
    </div>
    <p></p>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
