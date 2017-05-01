<?php
	class Practice_model extends CI_Model {

		function getData() {
			$query = $this->db->get('data');

			if($query->num_rows() > 0) {
				return $query->result();
			}
			else {
				show_error('Cannot display confirmation');
			}
		}
	}
?>