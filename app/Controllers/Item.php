<?php

namespace App\Controllers;

class Item extends BaseController
{
    public function index(): string{
         // dd('hello world!');
      //  return view('welcome_message');

      $item_model = new \App\Models\ItemModel();

      //check database
      // dd($item_model->findAll());

      $data['items'] = $item_model->findAll();
      return view('item/index',$data);
    }

    /**
     * Summary of test
     * @return string
     */
    public function test():string{

      return ('test');
    }

    public function view($id){

      $item_model = new \App\Models\ItemModel();
      $data['item']= $item_model->find($id);
      return view('item/view',$data);
    }


    public function add(){
      
      $data = array();
      helper(['form']);
      if($this->request->getMethod()=='post'){
        $post = $this->request->getPost(['name','price','decription']);
        $rules = [
          'name' => ['label' => 'Item name', 'rules' => 'required'],
          'price' => ['label' => 'price', 'rules' => 'required|numeric'],
          'description' => ['label' => 'description', 'rules' => 'required']
        ];


        if(! $this->validate($rules)){
          $data['validation'] = $this->validator;
        }else{
          $item_model = new \App\Models\ItemModel();
          $item_model->save($post);
          return redirect()->to(base_url());
        }
    }


      return view('item/add', $data);
    }

    public function update(){
      $data = array();
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['name', 'price', 'description']);
            $rules = [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required']
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $item_model = new \App\Models\ItemModel();
                $item_model->update($this->request->getPost(['id']), $post); 

                return redirect()->to(base_url());
            }
        }

    }


    public function delete($id){
      $id = intval($id); 
      $item_model = new \App\Models\ItemModel();
      $item = $item_model->find($id);
      if ($item) {
          $item_model->delete($id);
          return redirect()->to(base_url());
    }
  }


    public function insert(){
    //  dd($_POST);

        // if($this->request->getMethod()=='post'){
        //     $post = $this->request->getPost(['name','price','decription']);
        //     // dd($post);
        //     $item_model = new \App\Models\ItemModel();
            



        //     $item_model->save($post);
        //     return redirect()->to(base_url());
        //     // return redirect()->to('item/index');
        // }


    }
















}
