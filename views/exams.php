<?php

$conn = mysqli_connect("localhost:blabla", "username", "password");

$query = mysqli_query($conn, "select naam from exams");

?>

<div class="container text-center">
    <div class="row align-items-start">
        <?php while ($row = mysqli_fetch_array($query)) { ?>
            <div class="col">
                <?php echo $row['naam']; ?>
            </div>
        <?php } ?>
    </div>
</div>