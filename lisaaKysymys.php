<?php

$xml = simplexml_load_file("data/highscore.xml");
$nimi = $xml->nimi;
$tekijä = $xml->tekijä;
$pvm = $xml->pvm;
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $nimi; ?></title>
</head>

  <body>
      <div class="container">
        <div class="header clearfix">
          <nav>
            <ul class="nav nav-pills pull-right">
              <li role="presentation" class="active"><a href="">
              <li role="presentation"><a href=""></a></li>
            </ul>
          </nav>
          <h3>Lisää uusi kysymys</h3>
        </div>

<div class="row marketing">
  <div class="col-lg-12">
    <form action="tallenaKysymys.php" method="get">
      <ul class="list-group">
        <li class="list-group-item">
          <label>Kysymys</label>
          <input type="text" name="kysymys" placeholder="Kirjoita kysymys tähän" class="form-control">
        </li>
        <li class="list-group-item">
        <label>Pisteet</label>
        <input type="number" name="pisteet" min="1" max="10" class="form-control">
        </li>
        <li class="list-group-item">
          <label>vastauksia 1</label>
          <input type="text" name="vastauksia1" placeholder="Kirjoita vastaus tähän" class="form-control">
          <input type="radio" name="oikein" value="1"> Oikea vastaus
        </li>
        <li class="list-group-item">
          <label>Vastaus 2</label>
          <input type="text" name="vastaus2" placeholder="Kirjoita vastaus tähän" class="form-control">
          <input type="radio" name="oikein" value="2"> Oikea vastaus
        </li>
            <li class="list-group-item">
              <label>Vastaus 3</label>
                <input type="text" name="vastaus3" placeholder="Kirjoita vastaus tähän" class="form-control">
                <input type="radio" name="oikein" value="3"> Oikea vastaus
            </li>
              <li class="list-group-item">
                <label>Vastaus 4</label>
                <input type="text" name="4" placeholder="Kirjoita vastaus tähän" class="form-control">
                <input type="radio" name="oikein" value="4"> Oikea vastaus
              </li>
                <li class="list-group-item">
                  <label>Vastaus 5</label>
                  <input type="text" name="vastaus5" placeholder="Kirjoita vastaus tähän">
                  <input type="radio" name="oikein" value="5"> Oikea vastaus
              </li>
          </form>
        </li>
      </ul>
    </form>
  </div>
</div>


<footer class="footer"></footer>


  </body>
</html>
