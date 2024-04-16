<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model
{
    public function __construct()
    {   
        parent ::__construct();
    }
    public function getdata()
    { 
         $sql = "Select * from regdata";
         $result = $this->db->query($sql)->result();
         return $result;
    }

    public function regdata($data)
    {
         $this->db->insert('regdata', $data);
    }
    
    public function delete($id)
    {
         $this->db->where('id', $id);
         $this->db->delete("regdata");
         return true;
    }
    
    public function selid($id)
    {
         $this->db->where('id', $id);
         $query = $this->db->get('regdata');
         return $query->result();
    }

    public function edit($id, $name, $mbl, $dob, $bg, $dept, $add,$email,$pass)
    {
        // print_r($id);exit;
        $data = array(
            'name' => $name,
            'number' => $mbl,
            'dob' => $dob,
            'bloodgroup' => $bg,
            'department' => $dept,
            'address' => $add,
            'email' => $email,
            'password'=>$pass

        );
    
        $this->db->where('id', $id);
        $result = $this->db->update('regdata', $data);
    
        return $result;
    }
    
    public function getmail($user)
        {
         $sql = "select * from regdata where email = '$user'";
         $query = $this->db->query($sql)->row();
         if($query==null)
         {
            // print_r('null');exit;
            return false;
         }
         else
         {
            // print_r($query);exit;
            return $query;
         }   
}
}
?>