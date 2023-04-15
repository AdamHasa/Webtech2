<h1>Home</h1>
<h3>Welcome <?php

    $servername = "localhost";
    $username = "root";
    $password = "DitIsSQL2002";
    $dbname = "webtechdatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT name FROM exams";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["name"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

//    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

    ?> </h3>