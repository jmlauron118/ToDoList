<?php 
    class UserModel extends CI_Model{
        function AddUser($data){
            $result = ($this->db->insert('users', $data)) ? $this->db->insert_id() : false;
     
            if($result){
                $response["Status"] = 1;
                $response["Message"] = 'Account has successfully created!';
                $response["Data"] = $result;
            }
            else{
                $response["Status"] = 2;
                $response["Message"] = 'Unexpected error occured!';
            }

            return json_encode($response);
        }

        function GetUserByCreds($username, $password){
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $response = $this->db->get('users');

            return json_encode($response);
        }
    }
?>