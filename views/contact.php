<h3><?php

    $servername = "localhost";
    $username = "root";
    $password = "DitIsSQL2002";
    $dbname = "webtechdatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userId = $_GET['id'];

    $sql = "SELECT name FROM exams WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Exam: " . $row["name"]. "<br>";
        }
    } else {
        echo "Er zijn geen examens beschikbaar voor";
    }
    $conn->close();
    ?> </h3>

