<!-- its in model -->
<?php
	Class User_model extends CI_Model
	{
		public function record_count()
    	{
        	return $this->db->count_all("trials");
    	}

		function insert_to_db($data)
		{
			$this->load->database();
			$q = $this->db->insert('trials', $data);
			return $q->result();
		}
		function get_from_db($limit, $start)	
		{
			$this->db->limit($limit, $start);
	        $query = $this->db->get("trials");
         	if ($query->num_rows() > 0) 
        		{
            		foreach ($query->result() as $row) 
            		{
               			 $data[] = $row;
            		}
            		return $data;
        		}
        	return false;
    	}
}
?>