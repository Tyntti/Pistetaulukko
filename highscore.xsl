<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<head>
  <meta charset="utf-8"/>
  <title>highscore</title>
</head>
<body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
<h1>Pistetilanne</h1>
<xsl:for-each select="TAULUKKO/LISTA">
  <div style="background-color:teal;color:white;padding:4px">
    <xsl:value-of select="NIMI"/>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <p>
    <xsl:value-of select="PISTEET"/>
    </p>
  </div>
</xsl:for-each>
</body>
</html>
