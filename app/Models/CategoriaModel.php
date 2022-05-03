<?php

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'chave';

    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $beforeInsert = ['vincularIdUsuario', 'gerarChave'];

    protected $allowedFields = [
        'usuarios_id',
        'chave',
        'tipo',
        'descricao'
    ];

    protected $validationRules = [
        'descricao' => [
            'label' => 'Descrição',
            'rules' => 'required',
            'errors' => [
                'required' => 'Campo {$field} obrigatório'
            ]
        ],
        'tipo' => [
            'label' => 'Tipo',
            'rules' => 'required'
        ],
    ];

    protected function vincularIdUsuario ($data)
    {
        $data['data']['usuarios_id'] = session()->id_usuario;
        return $data;
    }

    protected function gerarChave ($data)
    {
        $data['data']['chave'] = md5( uniqid( rand(), true ) );
        return $data;
    }
}