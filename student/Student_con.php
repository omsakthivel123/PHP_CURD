<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_con extends CI_Controller
{
    public function __construct()
    {   
        parent ::__construct();
        $this->load->model('model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
      
    }
   
    public function index()
    { 
         $this->load->view('std_log');
    }

    public function login()
    {   
         $user= $this->input->post('user');
         $pass=$this->input->post('pass');
         $this->data['result'] = $get = $this->model->getmail($user);

         if($get==false)
         {
            $data['error'] = 'Useename And Password Not Exits!';
            $this->load->view('std_log', $data);
         }
         else
         {
           $ps =$get->email;
           $ps1= $get->password;
        if($ps==$user && $ps1==$pass)
         {
            // print_r($ps);
            // print_r($user);
            // print_r($ps1);
            // print_r($pass); 
             $this->data['result'] = $get = $this->model->getdata();
             $this->load->view('reg_edit', $this->data);
         }
         else
         {
            $data['error'] = 'Check Username And Password!';
            $this->load->view('std_log', $data);
         }
       
        }
    }
       
    public function register()
    {  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('dept', 'department', 'trim|required');        
        $this->form_validation->set_rules('mob', 'number', 'trim|is_unique[regdata.number]', array('is_unique' => 'Mobile Number is Exits!'));
        $this->form_validation->set_rules('email', 'email', 'trim|is_unique[regdata.email]', array('is_unique' => 'Email_id is Exits!'));
        $this->form_validation->set_rules('pass', 'password', 'trim|required' );

        

        if ($this->form_validation->run() == false) 
        {
            $this->load->view('reg');
        }
        else
         {
            $name = $this->input->post('name');
            $mbl = $this->input->post('mob');
            $dob = $this->input->post('dob');
            $email = $this->input->post('email');
            $bg = $this->input->post('bg');
            $dept = $this->input->post('dept');
            $add = $this->input->post('add');
            $pass= $this->input->post('pass');
    
            $data = array(
                'name' => $name,
                'number' => $mbl, 
                'dob' => $dob,
                'email' => $email,
                'bloodgroup' => $bg,
                'department' => $dept,
                'address' => $add,
                'password' => $pass
            );
        
            $this->model->regdata($data);
            $this->data['result'] = $get = $this->model->getdata();
            $this->load->view('reg_edit', $this->data);

        }  
    }
    public function delete()
    {
         $id=$this->input->get('id');
         $del= $this->model->delete($id);
         if($del==true)
         {
             $this->data['result'] = $get = $this->model->getdata();
             $this->load->view('reg_edit', $this->data);
         }
    }

    public function update()
    {   
        $id = $this->input->get('id');
        $this->data['result'] = $get = $this->model->selid($id);
        $this->load->view('edit', $this->data);
    }

    public function edited()
    {       
        $id=$this->input->post('id');       
        $name = $this->input->post('name');
        $mbl = $this->input->post('mob');
        $dob = $this->input->post('dob');
        $bg = $this->input->post('bg');
        $dept = $this->input->post('dept');
        $add = $this->input->post('add');
        $email = $this->input->post('email');
        $pass =$this->input->post('pass');
    
        $this->model->edit($id, $name, $mbl, $dob, $bg, $dept, $add,$email,$pass);
        $this->data['result'] = $get = $this->model->getdata();
        $this->load->view('reg_edit', $this->data);
        
    }
}
?>    