<?php
class Home_model extends CI_Model{

	public function retrive(){
		$a=[
			'FirstName'=>'Zohar',
			'LastName'=>'Morbiwala',
			'age'=>20,
			'std'=>'TE'
		];
		return $a;
	}

	public function save($data){
		$a=$this->db->insert('register',$data);
		
		if($a){
			return true;
		}
		else{
			return false;
		}

	}

	public function save1($data){
		$a=$this->db->set($data)->get_compiled_insert('student',$data);
		echo $a;
		if($a){
			return true;
		}
		else{
			return false;
		}

	}
	public function show(){
		$a=$this->db->get_compiled_select('student');
		echo $a;
		return($a->result());

	}
		public function delete(){
		$this->db->empty_table('student');

	}
	public function check_data($username,$password)
	{
		$a=$this->db->select('username,password')->where(array('username'=>$username,'password'=>$password))->get('register');
		

		if($a->num_rows()==1)
		return $a->result();
		else{
		site_url('Kisaan/register');
		}
		

	}
	public function searchregister($search) {
			var_dump($search);
    $condition = "username like '%" . $search."'";
    $this->db->select('username,Firstname, Lastname, mobilenumber,gender');
    $this->db->from('register');
    $this->db->where($condition);
    $query = $this->db->get();
    return $result = $query->result();
}          

}

?>