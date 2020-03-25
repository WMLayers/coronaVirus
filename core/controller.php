<?php
class controller{
	public function loadV($name, $dados = array()){
		extract($dados);
		require('views/'.$name.'.php');
	}
	public function loadT($name, $dados = array()){
		extract($dados);
		require('views/template.php');
	}
	public function loadVinT($name, $dados = array()){
		extract($dados);
		require('views/'.$name.'.php');
	}
}