<?php

class User{
    function add_user_email($db, $username, $email, $pswd, $birthdate){
        // $db->query("INSERT INTO user(username, name,  email, password, birthdate) VALUES('$username','$username', '$email', '$pswd', '$birthdate')");
        $db = $db->prepare('INSERT INTO user(username, name,  email, password, birthdate) VALUES(:user, :user, :email, :pswd, :birthdate)' );
        $db->execute(['user' => $username, 'email' => $email, "pswd" => $pswd, "birthdate" => $birthdate] );        
    }
    function add_user_phone($db, $username, $phone, $pswd, $birthdate){
        // $db->query("INSERT INTO user(username, name,  phone, password, birthdate) VALUES('$username','$username', '$phone', '$pswd',  '$birthdate')");
        $db = $db->prepare('INSERT INTO user(username, name,  phone, password, birthdate) VALUES(:user, :user, :phone, :pswd, :birthdate)' );
        $db->execute(['user' => $username, 'phone' => $phone, "pswd" => $pswd, "birthdate" => $birthdate] );

    }

    function check_user_exist($db, $login){
        // $login_fetch = $db->query("SELECT * FROM user WHERE email = '$login' OR phone = '$login' OR username = '$login'");
        $db = $db->prepare('SELECT * FROM user WHERE email = :login OR phone = :login OR username = :login');
        $db->execute(["login"=> $login]);
        $info = $db->fetchAll();
        return $info;
    }
    
    function edit_update_name($db, $id, $name){
        $db = $db->prepare('UPDATE user SET name = :name  WHERE id = :id');
        $db->execute(['id' => $id, 'name' => $name] );
    }
    function edit_update_bio($db, $id, $bio){
        $db = $db->prepare('UPDATE user SET token = :bio  WHERE id = :id');
        $db->execute(['id' => $id, 'bio' => $bio] );
    }
    function edit_update_location($db, $id, $location){
        $db = $db->prepare('UPDATE user SET location = :location  WHERE id = :id');
        $db->execute(['id' => $id, 'location' => $location] );
    }
    function edit_update_website($db, $id, $website){
        $db = $db->prepare('UPDATE user SET website = :website  WHERE id = :id');
        $db->execute(['id' => $id, 'website' => $website] );
    }
    function edit_update_avatar($db, $id, $avatar){
        $db = $db->prepare('UPDATE user SET avatar = :avatar  WHERE id = :id');
        $db->execute(['id' => $id, 'avatar' => $avatar] );
    }
    function edit_update_cover($db, $id, $cover){
        $db = $db->prepare('UPDATE user SET cover = :cover  WHERE id = :id');
        $db->execute(['id' => $id, 'cover' => $cover] );
    }

    function searchUser($db, $dataUser){
        $db = $db->prepare("SELECT * FROM user WHERE username LIKE :dataUser ");
        $db->execute([ "dataUser" => $dataUser."%"]);
        $info = $db->fetchAll();
        return $info;
    }
    
    function search_User_username($db, $username){
        $db = $db->prepare("SELECT * FROM user WHERE username = :username ");
        $db->execute([ "username" => $username]);
        $info = $db->fetchAll();
        return $info;
    }
}
?>