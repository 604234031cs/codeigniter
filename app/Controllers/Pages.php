<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\TypeModel;

class Pages extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $model2 = new TypeModel();

        $data['products'] = $model->getPosts();
        $data2['type'] = $model2->getType();

        // echo $data2['type'][0]['t_name'];

        $arr = array();

        array_push($arr, $data);
        array_push($arr, $data2);

        // echo json_encode($arr);
        echo view('templates/header', ['p' => $data, 't' => $data2]);
        echo view('pages/home');
        echo view('templates/footer');
    }

    public function showme($page = 'home')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        echo view('templates/header');
        echo view('pages/' . $page);
        echo view('templates/footer');
    }

    
    //--------------------------------------------------------------------

}
