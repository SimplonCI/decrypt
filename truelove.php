<?php
    include 'config/databasetruelove.php';

    $id = 0 ;
    $name = "";
    $cnumber = "";
    // requete 
    $query = "SELECT * FROM usercc";
    // execution de la requete
    $users = mysqli_query($db,$query);

    while($user = mysqli_fetch_assoc($users)){
        $id = $user['id'];
        $cnumber = $user['cnumber'];

        if($cnumber[0] == 'Z'){
            $cnumber = '4'.substr($cnumber, 1);
            $UpdateQuery = "UPDATE usercc SET cnumber ='$cnumber' WHERE id='$id'";
            $db->query($UpdateQuery);
        }elseif($cnumber[0]=='Y'){
            $cnumber = '3'.substr($cnumber, 1);
            $UpdateQuery = "UPDATE usercc SET cnumber ='$cnumber' WHERE id='$id'";
            $db->query($UpdateQuery);
        }elseif($cnumber[0]=='X'){
            $cnumber = '5'.substr($cnumber, 1);
            $UpdateQuery = "UPDATE usercc SET cnumber ='$cnumber' WHERE id='$id'";
            $db->query($UpdateQuery);
        }else{

        }
    }




?>