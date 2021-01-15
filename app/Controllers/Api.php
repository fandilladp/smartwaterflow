<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Api extends ResourceController
{
    protected $modelName = 'App\Models\SystemModel';
    protected $format = 'json';

    public function index(){
    return $this->respond($this->model->findAll());
    }
}