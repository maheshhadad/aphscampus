<?php 
class Student extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin_session'))
		{
			redirect(base_url());
		}
	}
	public function  student_registration()
	{
		if($this->input->method()=='post')
		{
			$data=$this->input->post();
			$data['password']=md5(123456);
			$res=$this->db->insert('student',$data);
			if($res)
				echo "1";
			else 
				echo "0";
		}
		else 
		{
			$data['all_category']=$this->CM->select_data('category','*');
			$data['students']=$this->CM->select_data('student','*');
			$data['classes']=$this->CM->select_data('classes','*');
			$this->load->view('include/header');
			$this->load->view('student_registration',$data);
			$this->load->view('include/footer');
		}
			
	}
	function delete_student($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('student');
		redirect(base_url().'index.php/student/student_registration');
	}
	function edit_student($id)
	{
		if($this->input->method()=='post')
		{
			$this->db->where('id',$id);
			$res=$this->db->update('student',$_POST);
			if($res)
			{
				echo '1';
			}
			else 
			{
				echo '0';
			}
		}
		else 
		{
			$data['student_data']=$this->CM->select_data('student','*',array('id'=>$id))[0];
		     $data['all_category']=$this->CM->select_data('category','*');
			$data['classes']=$this->CM->select_data('classes','*');
			$this->load->view('include/header');
			$this->load->view('edit_student',$data);
			$this->load->view('include/footer');
		}
	}
}
?>