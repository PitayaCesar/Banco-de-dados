<?php
        $servername = "db-pitaya.cmwiopokui49.us-east-1.rds.amazonaws.com";
        $username = "pitaya";
        $password = "pitayaCESAR2021";
        $dbname = "dbpadrao";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully<br>" ;
        $sql = "SELECT nick, score FROM jogador_save";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "nick: " . $row["nick"]. "<br>Score: " . $row["score"]. "<br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
?>