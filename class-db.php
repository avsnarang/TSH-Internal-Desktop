<?php 
class DB {
    private $dbHost     = "localhost";
    private $dbUsername = "u950483018_scholars";
    private $dbPassword = "Scholars123";
    private $dbName     = "u950483018_auth_verify";
  
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
 
    public function get_user($id) {
        $sql = $this->db->query("SELECT * FROM g_users WHERE google_uid = '$id'");
        return $sql->fetch_assoc();
    }
  
    public function upsert_user($arr_data = array()) {
        $uid = $arr_data['sub'];
        $name = $arr_data['name'];
        $email = $arr_data['email'];
 
        // check if user exists by fetching it's details
        $user = $this->get_user($uid);
 
        if(!$user) {
            // insert the user
            $this->db->query("INSERT INTO users(google_uid, name, email) VALUES('$uid', '$name', '$email')");
        } else {
            // update the user
            $this->db->query("UPDATE users SET name = '$name', email = '$email' WHERE google_uid = '$uid'");
        }
    }
}