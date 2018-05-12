
        <?php
        session_start();
        session_unset();
        session_destroy();
        session_write_close();
        setcookie(session_name(),'',0,'/');
        session_regenerate_id();
        $cookie_name1='username';
        $cookie_name2='password';
        unset($_COOKIE['username']);
        unset($_COOKIE['password']);
        setcookie($cookie_name1,'guest',time()-3600);
        setcookie($cookie_name2,'guest',time()-3600);
        $_SESSION["username"]="guest";
        header("Location:index.php");

