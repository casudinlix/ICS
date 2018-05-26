<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_menus extends CI_Model {

	public function get_list_menus($nip, $level = null, $parent = null)
	{
        $this->db->select('*')
                    ->from('view_privileges')
                    
                    ->where('user_nip', $nip)
                    ->where('priv_read', 1)
                    ->where('is_published', 1)
                    ->order_by('menu', 'ASC');
		 

        if($level !== null)
            $this->db->where('level', $level);

        if($parent !== null)
            $this->db->where('parent', $parent);
        
        $query = $this->db->get();

        if($query->num_rows() > 0)
            $result = $query->result_array();
        else
            $result = array();

        return $result;
	}

    public function get_menu($role_id, $link)
    {
        $this->db->get_where('view_privileges',array());
$this->db->select('m.id, m.menu,priv_read as access_module, is_published,CONCAT(priv_create,",",priv_update,",",priv_delete) as privileges')
                    ->from('view_privileges as m')
                    ->where('role_id',$role_id)
                    ->where('link', $link);

        $query = $this->db->get();
   
        if($query->num_rows() > 0)
            $result = $query->row_array();
        else
            $result = array();

        return $result;
    }
     
}

/* End of file Model_menus.php */
/* Location: ./application/models/Model_menus.php */