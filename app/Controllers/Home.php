<?php

namespace App\Controllers;

/**
 * Classe responsavel por carregar a estrutura do app
 */
class Home extends BaseController
{
	public function index(): void
	{
		$data['title'] = "Home";
		$data['conteudo'] = view('home/index');
		
		$this->modelo($data);
	}
	
	public function contatos(): void
	{
		$data['title'] = "Contatos";
		$data['conteudo'] = view('home/contatos');
		
		$this->modelo($data);
	}
	
	public function contato(): void
	{
		$data['title'] = "Contato";
		$data['conteudo'] = view('home/contato');

		$this->modelo($data);
	}

	/**
	 * Metodo responsavel por renderizar a view
	 */
	private function modelo($data): void
	{
		$menu['menus'] = [
			'Home' => base_url(),
			'Contatos' => base_url('contatos'),
			'Contato' => base_url('contato')
		];		
		$data['navbar'] = view('home/padrao/navbar', $menu, ['cache' => 60]);

		echo view('home/padrao/modelo', $data);
	}
}