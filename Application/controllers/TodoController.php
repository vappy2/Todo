<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TodoController
 *
 * @author adminSio
 */
class TodoController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TodoModel');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
    }
    public function index() {        
        $all_todos= $this->TodoModel->getAll();        
        $data['todos']=$all_todos;
        $data['Titre']= "To do List";
        $data['occurence']=$this->TodoModel->getById(1);
        $compte=$this->TodoModel->count();        
        $data['Compte']=$compte;
        $reste = $this->TodoModel->count(TRUE);
        $data['reste']=$reste;
        $this->load->view('TodoView',$data);        
    }
    
    public function fait ($id){
        $params = array('completed'=>1);
        $this->TodoModel->update($id, $params);       
        redirect('TodoController/index');
    }
    
    public function add() {        
        $this->form_validation->set_rules('task','tache', 'required|max_length[255]');
        $this->form_validation->set_rules('ordre','ordre','required|integer');        
        if($this->form_validation->run()== TRUE){
            $ordre = $this->input->post('ordre');
            $task= $this->input->post('task');
            $params=array(
                'ordre'=>$ordre,
                'task'=>$task,
                'completed'=>0                
            );
            $this->TodoModel->add($params);
            redirect (base_url('TodoController/index'));
        }
        $this->load->view('TodoAdd');
        
    }
    
    public function delete($id) 
    {         
        $this->db->delete('Todo', array('id'=>$id));
        redirect (base_url('TodoController/index'));        
    }
    
    public function update($id) {
        
        $unTodo=$this->TodoModel->getByID($id);
        $data['unTodo']=$unTodo;
                
        $this->form_validation->set_rules('task','tache', 'required|max_length[255]');
        $this->form_validation->set_rules('ordre','ordre','required|integer');
        
        if($this->form_validation->run()== TRUE){
            $ordre = $this->input->post('ordre');
            $task= $this->input->post('task');
            
            $params=array(
                'ordre'=>$ordre,
                'task'=>$task,  
                'completed'=>0
            );
            
            $this->TodoModel->update($id,$params);
            redirect (base_url('TodoController/index'));
        }
        $this->load->view('TodoEdit',$data);
    }  
    
    public function order() {              
        $all_todos = $this->TodoModel->getAll();
        $index=10;
        
        foreach(todo as $all_todos)
            {
             $this->form_validation->set_rules('ordre','ordre','required|numeric');
            }
            
            if($this->form_validation->run()== TRUE){
            $ordre = $this->input->post('ordre[]');
            
                 foreach (todo as $all_todos){       
                $this->TodoModel->update(todo['id'], $ordre);
                 }
                 
            redirect (base_url('TodoController/index'));
        }
        $this->load->view('TodoOrder');         
        }  
    
}
            

