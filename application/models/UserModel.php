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
            $this->db->where('is_active', 1);

            $result = $this->db->get('users');

            if($result->num_rows() > 0){
                foreach($result->result() as $row):
                    $userData["id"] = $row->id;
                    $userData["username"] = $row->username;
                endforeach;

                $this->session->set_userdata($userData);

                $response["Status"] = 1;
                $response["Message"] = 'Successfully login.';
                $response["Data"] = $result->row();
            }
            else{
                $response["Status"] = 0;
                $response["Message"] = 'Invalid username/password! Please try again.';
            }

            return $response;
        }
    }
?>