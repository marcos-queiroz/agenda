<?php

namespace App\Models;

use CodeIgniter\Model;

class ContatoModel extends Model
{
	protected $table                = 'contatos';
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	protected $allowedFields        = ['nome', 'tipo_contato_id', 'telefone', 'celular', 'email'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'criado_em';
	protected $updatedField         = 'atualizado_em';
	protected $deletedField         = 'apagado_em';

	// Validation
	protected $validationRules      = [
		'nome' => 'required|min_length[3]|max_length[45]',
		'tipo_contato_id' => 'required',
		'telefone' => 'max_length[15]',
		'celular' => 'max_length[15]',
		'email' => 'required|max_length[145]|valid_email',
	];
	protected $validationMessages   = [
		'nome' => [
            'required' => 'O Nome é obrigatório.',
            // 'min_length' => 'Informe o nome com mais de 3 caracteres',
            'max_length' => 'O Nome não pode conter mais de 45 caracteres',
        ],
	];
}
