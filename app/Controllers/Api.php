<?php namespace App\Controllers;

use App\Models\SystemModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\RESTful\ResourceController;

class Api extends ResourceController
{
    protected $modelName = 'App\Models\SystemModel';
    protected $format = 'json';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index(){
        return $this->respond('harap masukan token anda');
    }


    public function show($token = null)
    {
        $model = new SystemModel();
        $data = $model->getWhere(['token' => $token])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with token '.$token);
        }
    }

    // create a product
    public function create()
    {
        $model = new SystemModel();
        $generate = base64_encode(random_bytes(32));
        $token = preg_replace("/[^a-zA-Z0-9]/", "", $generate);
        $data = [
            'token' => $token,
            'debitair' => $this->request->getPost('debitair'),
            'servo_low' => $this->request->getPost('servo_low'),
            'servo_normal' => $this->request->getPost('servo_normal'),
            'servo_labor' => $this->request->getPost('servo_labor')
        ];
		// $data = json_decode(file_get_contents("php://input"));
		// $data = $this->request->getPost();
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
		
        return $this->respondCreated($data, 201);
    }

    // update product
    public function update($token = null)
    {
        $model = new SystemModel();
		$json = $this->request->getJSON();
		// if($json){
		// 	$data = [
		// 		'debitair' => $json->debitair,
		// 		'servo_low' => $json->servo_low,
		// 		'servo_normal' => $json->servo_normal,
		// 		'servo_labor' => $json->servo_labor

		// 	];
		// }else{
			$input = $this->request->getRawInput();
			// $data = [
			//     'debitair' => $this->request->getPost('debitair'),
            //     'servo_low' => $this->request->getPost('servo_low'),
            //     'servo_normal' => $this->request->getPost('servo_normal'),
            //     'servo_labor' => $this->request->getPost('servo_labor')
			// ];
		// }
        // var_dump($input);die;
		// Insert to Database
        $model->update($token, $input);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    // delete product
    public function delete($id = null)
    {
        $model = new SystemModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
			
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
        
    }
}