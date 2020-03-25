<?php
class statusCorona{
	public function setStatusPais(){
		$link = "https://pomber.github.io/covid19/timeseries.json";
		$json = file_get_contents($link);
		$json = json_decode($json);
		$brasil = $json->Brazil;

		//$hoje = date('Y-m-d');
		//$hoje = explode('-', $hoje);
		//$ontem = $hoje[2] - 1;
		//$ontem = $hoje[0].'-'.$hoje[1].'-'.$ontem;
		
		$n1 = 60;
		$n2 = 61;
		$n3 = 62;

		$brasilData1 = $json->Brazil[$n1]->date;
		$brasilConfimado1 = $json->Brazil[$n1]->confirmed;
		$brasilMortes1 = $json->Brazil[$n1]->deaths;

		$brasilData2 = $json->Brazil[$n2]->date;
		$brasilConfimado2 = $json->Brazil[$n2]->confirmed;
		$brasilMortes2 = $json->Brazil[$n2]->deaths;

		$brasilData3 = $json->Brazil[$n3]->date;
		$brasilConfimado3 = $json->Brazil[$n3]->confirmed;
		$brasilMortes3 = $json->Brazil[$n3]->deaths;

		$array = array(
			'data1' => $brasilData1,
			'confirmado1' => $brasilConfimado1,
			'mortes1' => $brasilMortes1,
			'data2' => $brasilData2,
			'confirmado2' => $brasilConfimado2,
			'mortes2' => $brasilMortes2,
			'data3' => $brasilData3,
			'confirmado3' => $brasilConfimado3,
			'mortes3' => $brasilMortes3,
		);

		return $array;

	}
}
