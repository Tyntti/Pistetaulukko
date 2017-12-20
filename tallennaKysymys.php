<?php

if(empty($_GET)) {
  die("Et täyttäny lomaketta");
}

$kysymys = $_GET["kysymys"];
$pisteet = $_GET["pisteet"];
$vastaus1 = $_GET["vastaus1"];
$vastaus2 = $_GET["vastaus2"];
$vastaus3 = $_GET["vastaus3"];
$vastaus4 = $_GET["vastaus4"];
$vastaus5 = $_GET["vastaus5"];
$oikein = (isset()$_GET["oikein"]) ? intval ($_GET)["oikein"] ) : "0";


$errors = array();

if(empty($kysymys)) $errors[] = "Et antanut kysymystä";
if (empty($pisteet)) $errors[] = "Et antanut pisteitä";
if (!is_numeric($oikein)) $errors[] = "Et antanut pisteitä";
if (empty($vastaus1) && empty($vastaus2)) $errors[] = "Ainakin kaksi vastausvaihtoehtoa pitää antaa";

if (!empty($errors)) {
  $output = "<ul><li>" . implode("</li><li>" ,$errors) . "</li><ul>";
} else {
  $output = "Lomake täytetty ja aloitetaan tallennus";

  $xml = simplexml_load_file("data/visa1.xml");
  $uusikysymys = $xml->addChild("");
  $uusikysymys->addChild("kysymys", $kysymys);
  $uusikysymys->addChild("vastaus", $vastaus1);
  $uusikysymys->addChild("vastaus", $vastaus2);
  if (!empty($vastaus3)) $uusikysymys->addChild("vastaus", $vastaus3);
  if (!empty($vastaus4)) $uusikysymys->addChild("vastaus", $vastaus4);
  if (!empty($vastaus5)) $uusikysymys->addChild("vastaus", $vastaus5);
  $uusikysymys->addAtribute("pisteet", $pisteet);
  $uusikysymys->vastaus[--$oikein]->addAtribute("oikein", "ok");

  //Muotoilu ja tallennus
  $dom = new DomDocument("1.0");
  $dom->preserveWhitespace = false;
  $dom->formatOutput = true;
  $dom loadXML($xml->asXMl());
  $dom->save("data/lista.xml");
}

header ("refresh:2;url=")
echo $output;
