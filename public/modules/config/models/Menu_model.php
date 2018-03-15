<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
public function all($level=0){

	$this->db->select('*')
        			->from('menus')
        			->where('active', 1)
        			->where('level',$level)
        			->order_by('menu_name', 'ASC');
  
 
        
        $query = $this->db->get();

        
            $result = $query->result();
         

        return $result;

}

}
