<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<?php
$favourite_site = 'fresas';
switch ($favourite_site) {
  case 'mango':
    echo "Mi fruta favorita es el mango!";
    break;
  case 'calabaza':
    echo "Mi verdura favorita es la calabaza!";
    break;
  case 'brocoli en crema':
    echo "Mi comida favorita es el brocoli en crema!";
    break;
  case 'fresas':
    echo "Amo las fresas!";
    break;
  case 'fresas':
    echo "My desayuno favorito con fresas son los hotcakes!";
    break;
  default:
    echo "I like everything at tutsplus.com!";
}
?>
  </body>
</html>