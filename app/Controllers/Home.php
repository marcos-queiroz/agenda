<?php

namespace App\Controllers;

class Home extends BaseController
{
	protected $data;

	public function __construct()
	{
		$menu['menus'] = [
			'Home' => base_url(),
			'Contatos' => base_url('contatos'),
			'Contato' => base_url('contato')
		];
		$this->data['menu'] = view('home/padrao/menu', $menu, ['cache' => 60]);

		$this->data['versao'] = "0.0.1";
	}

	public function index(): void
	{
		$this->data['title'] = "Home";
		$this->data['conteudo'] = view('home/index');
		
		$this->modelo();
	}
	
	public function contatos(): void
	{
		$this->data['title'] = "Contatos";
		$this->data['conteudo'] = view('home/contatos');
		
		$this->modelo();
	}
	
	public function contato($slug = null): void
	{
		$this->data['title'] = "Contato {$slug}";
		$this->data['slug'] = $slug;
		$this->data['conteudo'] = view('home/contato', $this->data);

		$this->modelo();
	}

	private function modelo(): void
	{
		echo view('home/padrao/modelo', $this->data);
	}

	/**
	 * Metodo acessivel pelo terminal PHP
	 */

	function welcome($nome)
	{
		echo "Bem vindo {$nome}";
	}

	function soma($a, $b)
	{
		$resultado = $a + $b;

		echo "A Soma de {$a} e {$b} é igual a {$resultado}";
	}
}