<?php

namespace App\Controllers;

class Tool extends BaseController
{
    public function index(): string{
         // dd('hello world!');
      //  return view('welcome_message');

      $tool_model = new \App\Models\ToolModel();

      //check database
      // dd($tool_model->findAll());

      $data['tools'] = $tool_model->findAll();
      return view('tool/index',$data);
    }




    /**
     * Summary of test
     * @return string
     */
    public function test():string{

      return ('test');
    }

    public function view($id){

      $tool_model = new \App\Models\ToolModel();
      $data['tool']= $tool_model->find($id);
      return view('tool/view',$data);
    }


    public function add(){
      
      $data = array();
      helper(['form']);
      if($this->request->getMethod()=='post'){
        $post = $this->request->getPost(['name','brand','qty']);
        $rules = [
          'name' => ['label' => 'tool name', 'rules' => 'required'],
          'brand' => ['label' => 'brand', 'rules' => 'required'],
          'qty' => ['label' => 'qty', 'rules' => 'required|numeric']
        ];


        if(! $this->validate($rules)){
          $data['validation'] = $this->validator;
        }else{
          $tool_model = new \App\Models\ToolModel();
          $tool_model->save($post);
          return redirect()->to(base_url('tool/index'));
        }
    }


      return view('tool/add', $data);
    }

    public function edit($id){
     
      $data = array();
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['name','brand','qty']);
            $post['name']= strip_tags($_POST['name']);
            $post['brand']= strip_tags($_POST['brand']);

            $rules = [
                'name' => ['label' => 'name', 'rules' => 'required'],
                'brand' => ['label' => 'brand', 'rules' => 'required'],
                'qty' => ['label' => 'qty', 'rules' => 'required|numeric']
            ];

   
           
            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
           
            } else {
             
                $tool_model = new \App\Models\ToolModel();
                $tool_model->update($this->request->getPost(['id']), $post); 

                return redirect()->to(base_url('tool/index'));
            }
        }

        
        $tool_model= new \App\Models\ToolModel();
        $data['tool']= $tool_model->find($id);
        return view('tool/edit', $data);
    }
  





  public function delete($id){
      $tool_model = new \App\Models\ToolModel();
      $data['tool']= $tool_model->find($id);
      return view('tool/delete', $data);    
  }




  
  public function destroy($id){
    $id = intval($id); 
    $tool_model = new \App\Models\ToolModel();
    $tool = $tool_model->find($id);
    if ($tool) {
        $tool_model->delete($id);
        return redirect()->to(base_url('tool/index'));
  }
}

















}
