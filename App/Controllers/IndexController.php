<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {

	public function index() {

		//$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

		//instância de conexão
		$conn = Connection::getDb();

		//instanciar modelo
		$produto = new Produto($conn);

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobre_nos() {
		//instância de conexão
		$conn = Connection::getDb();

		//instanciar modelo
		$info = new Info($conn);

		$informacoes = $info->getInfo();
		
		$this->view->dados = $informacoes;

		//$this->view->dados = array('Notebook', 'Smartphone');
		$this->render('sobre_nos', 'layout1');
	}

}


?>