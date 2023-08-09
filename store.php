<?php
    if (isset($_POST['transcript'])) {
       // Get the transcript from the POST request
       $transcript = $_POST['transcript'];
    
       // Perform any necessary data validation and sanitization
    
       // Connect to your database (replace with your database details)
       $dbHost = 'localhost';
       $dbUsername = 'root';
       $dbPassword = '';
       $dbName = 'fiverr_raghadpink2';

       $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
       // Check connection
       if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
       }
    
       // Insert the transcript into the database
       $sql = "INSERT INTO task3 (text) VALUES ('$transcript')";
    
       if ($conn->query($sql) === TRUE) {
          echo "Transcript stored successfully";
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
    
       $conn->close();
    } else {
       echo "No transcript data received";
    }
    ?>
    