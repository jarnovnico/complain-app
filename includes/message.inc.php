<?php
    // Variable $conn is the connection to the database
    function setMessages($conn) {
        if(isset($_POST['submitMessage'])) {
            $message = $_POST['message'];

            // Insert data types into the table: comments
            $sql = "INSERT INTO comments (message) VALUES ('$message')";

            $result = mysqli_query($conn, $sql);
        }
    }

    function getMessages($conn) {
        // select the comments table from the database
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);

        // Everytime we have a result from the database; we need to spit it out. Loop trough all the results
        while($row = mysqli_fetch_assoc($result)) {
            // Post all the messages in the row
            echo "<div class='message-wrapper'>";

                // convert New Line tags into breaks
                echo nl2br("<p>".$row['message']."</p>");
            echo "</div>";
        }
    }