<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{


    public function post($slug)
    {

        $model = new BlogModel();
        $data['post'] = $model->select('t1.p_name,t1.p_price,t1.p_detail,t1.p_img,t2.t_name')
            ->from('product as t1,type_product as t2')
            ->where('t1.t_id = t2.t_id and t1.id=' . $slug)
            ->first();
        // $data['post'] = $model->jointable($slug);
        echo view('templates/header', $data);
        echo view('blog/post');
        echo view('templates/footer');




        // echo  $data['post']['t_name'];
    }

    public function insert()
    {
        helper('form');
        $model = new BlogModel();

        if (!$this->validate(['name' => 'required', 'price' => 'required', 'img' => 'required', 'detail' => 'required'])) {
            echo view('templates/header');
            echo view('blog/insert');
            echo view('templates/footer');
        } else {
            $model->save([
                'p_name' => $this->request->getVar('name'),
                'p_price' => $this->request->getVar('price'),
                'p_img' => $this->request->getVar('img'),
                'p_detail' => $this->request->getVar('detail')
            ]);

            $session = \Config\Services::session();
            $session->setFlashdata('Success', 'Add student Success');

            return redirect()->to('/');
        }
    }

    //--------------------------------------------------------------------

}
