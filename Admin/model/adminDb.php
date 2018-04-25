<?php
    function connect($username,$password){
        $req="Select * from admin where username='$username' and password='$password'";
        return ($req);
    }

    function register($login,$password,$email){
        $req="INSERT into admin values('$login','$password','$email')";

        return ($req);
    }
    function search($login){
        $req="Select login from admin where Login='$login'";
        $res =  execute($req);
        $r=mysqli_fetch_row($res);
        return $r[0];
    }
?>