<?php
class homeController extends controller{
	public function index(){
		$corona = new statusCorona();

		$dados = array(
			'title' => 'HOME',
			'corona' => $corona->setStatusPais(),
		);
		$this->loadT('home', $dados);
	}
}