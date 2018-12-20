<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TodoModel
 *
 * @author adminSio
 */
/** @property CI_DB $db */

class TodoModel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function getAll() {
        $this->db->order_by('ordre');
        return $this->db->get('Todo')->result_array();       
    }
    
    function getByID($id){
        return $this->db->get_where('Todo', array('id'=>$id))->row_array();        
    }
    
    function add($params){
        $this->db->insert('Todo',$params);
        return $this->db->insert_id();
    }
    
    function delete($id){
        $this->db->delete('Todo',array('id'=>$id));        
    }
    
    function update($id, $param) {
        $this->db->where('id', $id);
        $this->db->update('Todo', $param);
    }
    
    function count($completed=NULL) {
        if ($completed == FALSE)
            {
            return $this->db->count_all_results('Todo');
            }
        else
            {              
                $this->db->where('completed', 1);
                $this->db->from('Todo');
                return $this->db->count_all_results();           
               
            }
    }
}
