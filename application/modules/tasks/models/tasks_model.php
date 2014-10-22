<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks_model extends CI_Model {


	public function __construct()
	{

       parent::__construct();

	}

   public function getTasks($orderBy)
   {
      $this->db->order_by($orderBy);
      return $this->db->get('tasks')->result();

   }



	//end of class bracket
}
