<?php

namespace App\Controllers;

use App\Models\ContatoModel;

class Home extends BaseController
{
	protected $data;
	protected $modelContato;
	
	public function __construct()
	{
		$this->modelContato = new ContatoModel();
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
		
		$contatos = $this->modelContato->findAll();
		
		dd($contatos);
		
		
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
	
	public function gravar(): void
	{
		// exemplo de inserção para testar as validações do Model
		$contato = [
			'nome' => 'Ju', 
			'tipo_contato_id' => null, 
			'telefone' => '3180', 
			'celular' => '', 
			'email' => 'marcosmqueiroz#gmail.com',
		];
		
		if($this->modelContato->save($contato) === false){
			$erros = $this->modelContato->errors();
			
			echo "<h1>Erro ao tentar salvar</h1>";
			echo "<br>";
			echo "<br>";
			foreach ($erros as $field => $error) {
				echo "Campo: {$field}<br>";
				echo "Mensagem: {$error}<br>";
				echo "<hr>";
			}
			
		} else {
			echo "<h1>Salvo com sucesso.</h1>";
		}
	}
	
	private function modelo(): void
	{
		$menu['menus'] = [
			'Home' => base_url(),
			'Contatos' => base_url('contatos'),
			'Contato' => base_url('contato')
		];
		$this->data['menu'] = view('home/padrao/menu', $menu, ['cache' => 60]);
		
		$this->data['versao'] = "0.0.1";
		
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