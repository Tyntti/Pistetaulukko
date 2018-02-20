<?php

$PISTEET = $_GET['pisteet'];
$NIMI = $_GET['nimi'];


$xml = simplexml_load_file('lista.xml');

$LISTA = $xml->addChild('LISTA');
$LISTA->addChild('PISTEET', $PISTEET);
$LISTA->addChild('NIMI', $NIMI);

// Muotoilu ja tallennus
  $dom = new DOMDocument('1.0');
  $dom->preserveWhiteSpace = false;
  $dom->formatOutput = true;
  $dom->loadXML($xml->asXML());
  if ($dom->save('lista.xml')){
    header('Location: peli.html');
  } else {
    echo "pieleen meni";
  }



 ?>
