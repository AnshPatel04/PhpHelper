<?php
    
    include("config/database.php");
    // require("config/database.php");

    // requireonce
    // includeonce

    ## Insert
    // //$date = date(Y-m-d H:i:s);
    // $insertQ = "insert into users (username, password) 
    // values('Ansh', 'Ansh..loki')";
    // // '$date'
 
    // $result = $connection->query($insertQ);

    // if($result){
    //     echo "New record created";
    // }else{
    //     echo "No record Created, Error : ". $connection->error;
    // }

    ## Read
    // $selectQ = "Select userID, UserName, created from users";

    // $result = $connection->query($selectQ);

    // if($result->num_rows > 0){
    //     while ($row = $result->fetch_assoc()) {
    //         echo "<pre>";
    //         print_r($row);
    //         // print_r($row['UserName']);
    //     }
    // }


    ## Update
    // $updateQ = "Update users set username = 'Ansh' where userId = 1";
    // $result = $connection->query($updateQ);

    // if($result){
    //     echo "Updated";
    // }else{
    //     echo "Not Updated";

    // }


    ## Delete
    $deleteQ = "Delete from users where userID = 15";

    $result = $connection->query($deleteQ);
    if($result){
        echo "Record Deleted";
    }else{
        echo "Can't Delete";
    }

?>