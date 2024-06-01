<?php


$i = 1;

while ($i < 11) {
    echo $i;
    $i++;
}
echo "<hr>";
$i = 1;
while ($i < 7) {
  if ($i == 7) break; // COM ESSA INSTRUÇÃO EU FATIO O MEU RESULTADO DE ACORDO COM OQUE EU QUERO QUE SEJA EXIBIDO
  echo $i;
  $i++;
}

echo "<hr>";

$i = 0;
    while ($i < 100) {
        $i+=10; // INFORMO QUE ACONTAGEM ACONTECERA A CADA 10 NUMEROS AO INVES DE 1
        echo $i ."<br>";
    }
?>