<?php
$link = "https://pomber.github.io/covid19/timeseries.json";
$json = file_get_contents($link);
$json = json_decode($json);
$brasil = $json->Brazil;
$hoje = date('Y-m-d');
$hoje = explode('-', $hoje);
$ontem = $hoje[2] - 1;
$ontem = $hoje[0].'-'.$hoje[1].'-'.$ontem;

$brasilOntem = $json->Brazil[62]->date;
$brasilConfimado = $json->Brazil[62]->confirmed;
$brasilMortes = $json->Brazil[62]->deaths;


echo 'País: Brasil;<br/>';

echo 'data: '.$brasilOntem.'<br/>';
echo 'Casos confimados: '.$brasilConfimado.'<br/>';
echo 'Mortes: '.$brasilMortes.'<br/>';
echo "<hr>";

