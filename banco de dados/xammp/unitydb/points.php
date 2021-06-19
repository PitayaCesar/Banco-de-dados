<?php
        $servername = "db-pitaya.cmwiopokui49.us-east-1.rds.amazonaws.com";
        $username = "pitaya";
        $password = "pitayaCESAR2021";
        $dbname = "dbpadrao";

        $playerUser = $_POST["playerUser"];
        $playerScore =$_POST["playerScore"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO jogador_save (nick, Score) VALUES ('" . $playerUser ."', '" . $playerScore ."')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>