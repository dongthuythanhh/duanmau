<?php
    function insert_taikhoan($user,$pass,$email,$address,$tel,$role){
        $sql="INSERT INTO taikhoan(user,pass,email,address,tel,role) VALUES ('$user','$pass','$email','$address','$tel','$role')";
        pdo_execute($sql);
    }
    function delete_taikhoan($id){
        $sql = "DELETE FROM taikhoan WHERE id=".$id;
            pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
            $sp=pdo_query_one($sql);
            return $sp;
    }
    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
            $sp=pdo_query_one($sql);
            return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel,$role){       
            $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."',role='".$role."' WHERE id=".$id;
            pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id=".$id;
            $dm=pdo_query_one($sql);
            return $dm;
    }
?>