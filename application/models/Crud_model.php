<?php
class Crud_model extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	function saverecords($data)
	{
          $this->db->insert('crud1',$data);
          return $this->db->insert_id();
	}
	
}