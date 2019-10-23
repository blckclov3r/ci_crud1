 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

 	class Crud_model extends CI_Model{
 		public function __construct(){
 			$this->load->database();
 		}

 		function insertData(){
 			$data = array(
 				'firstName' => $this->input->post('firstName'),
 				'lastName' => $this->input->post('lastName'),
 				'role' => $this->input->post('role')
 			);
 			$this->db->insert('users',$data);
 		}

 		function getAllData(){
 			// $query = $this->db->query("SELECT * FROM users");
 			$query = $this->db->get('users');
 			return $query->result();
 		}

 		function getData($id){
 			// $query = $this->db->query("SELECT * FROM users WHERE id = '$id'");
 			$query = $this->db->get_where('users',array('id'=>$id));
 			return $query->row();
 		}

 		function updateData($id){
 			$data = array(
 				'firstName' => $this->input->post('firstName'),
 				'lastName' => $this->input->post('lastName'),
 				'role' => $this->input->post('role')
 			);
 			$this->db->where('id',$id);
 			$this->db->update('users',$data);
 		}

 		function deleteData($id){
 			// $this->db->where('id',$id);
 			// $this->db->delete('users');
 			$this->db->delete('users', array('id' => $id));
 		}

 	}
 ?>