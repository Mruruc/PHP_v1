<?php
    class User implements JsonSerializable{
        private $id;
        private $userName;
        private $password;

        function __construct($id,$userName,$password)
        {
            $this->id=$id;
            $this->userName=$userName;
            $this->password=$password;

        }

        // A  destructor is called when the object is destructed or the script is stopped or exited. 
        function __destruct() 
        {
         //   echo "<br/>.test";
        }
        public function jsonSerialize() {
            return [
                'id' => $this->id,
                'userName' => $this->userName,
                'password' => $this->password
            ];
        }
        function setId($id){
            $this->id=$id;
        }

        function getId(){
            return $this->id;
        }

        function setUserName($userName){
            $this->userName=$userName;
        }

        function getUserName(){
            return $this->userName;
        }

        function setPassword($password){
            $this->password=$password;
        }

        function getPassword(){
            return $this->password;
        }

        public function __toString() {
            return "User={ id={$this->id}, userName={$this->userName}, password={$this->password} }";
        }

        /*
        function getUser(){
            return 
            "User={
                id={$this->id},
                userName={$this->userName},
                password={$this->password}>
            }";
        }
        */
    }

?>