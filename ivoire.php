<?php
    include 'config/databasetruelove.php';

    $id = 0 ;
    $name = "";
    $cnumber = "";
    // requete 
    $query = "SELECT * FROM userccbilling";
    // execution de la requete
    $users = mysqli_query($db,$query);

    while($user = mysqli_fetch_assoc($users)){
        $id = $user['id'];
        $cnumber = $user['cnumber'];
        $type = $user['type'];

        echo $type."<br/>";
        if($type == 'V'){
            $cnumber = '4'.substr($cnumber, 1);
            $UpdateQuery = "UPDATE userccbilling SET cnumber ='$cnumber' WHERE id='$id'";
            $db->query($UpdateQuery);
        }elseif($type=='A'){
            $cnumber = '3'.substr($cnumber, 1);
            $UpdateQuery = "UPDATE userccbilling SET cnumber ='$cnumber' WHERE id='$id'";
            $db->query($UpdateQuery);
        }elseif($type=='M'){
            $cnumber = '5'.substr($cnumber, 1);
            $UpdateQuery = "UPDATE userccbilling SET cnumber ='$cnumber' WHERE id='$id'";
            $db->query($UpdateQuery);
        }else{

        }
    }




?>