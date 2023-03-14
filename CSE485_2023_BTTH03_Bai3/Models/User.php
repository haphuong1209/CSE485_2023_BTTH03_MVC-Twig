<?php
    class User {
        private $id;
        private $name;
        private $email;
        private $password;

        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function validate(){
            $error = array();
             
            // Validate name
            if (empty($this->name)) {
                $error['name'] = 'Name is required';
            }

            // Validate email
            if (empty($this->email)) {
                $error['email'] = 'Email is required';
            }
            else if (! filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'Email is invalidate';
            }

            // Validate password
            if (empty($this->password)) {
                $error['password'] = 'Password is required';
            }
            else if (strlen($this->password) <16) {
                $error['password'] = 'Password must be least 16 characters';
            }

            return $error;
        }

        public function save() {
            $error = $this->validate();

            if (count($error) >0) {
                throw new Exception('Validate failed: '.json_encode($error));
            }
        }

        public static function getById($id) {
            // Retrieve the user with the given ID from the database
            // ...
        }

        public static function getAll() {
            // Retrieve all users from the database
            // ...
        }

        public function delete() {
            // Delete the user from the database
            // ...
        }
    }
?>