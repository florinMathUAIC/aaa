<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Utilizator
        {
            private $username="";
            private $email="";
            private $password="";
            private $regdate;
            public function Utilizator($username,$email,$password,$regdate)
            {
                $this->username=$username;
                $this->email=$email;
                $this->password=$password;
                $this->regdate=$regdate;
            }
            public function Welcome()
            {
                echo "Welcome".$this->username;
            }
            public function get_username()
            {
                return $this->username;
            }
            public function get_email()
            {
                return $this->email;
            }
            public function get_password()
            {
                return $this->password;
            }
            public function get_regdate()
            {
                return $this->regdate;
            }
        }
        ?>
    </body>
</html>
