<?php

function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "seats";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function add_user($dname, $email, $password)
{
    $sql="INSERT INTO users (display_name,email,password) VALUES ('$dname','$email','$password') ";

    if (connect()->query($sql) === true) {
        header("Location: ./home.php");
        $_SESSION['user']=$dname;
    } else {
        echo "Error updating record: " . mysqli_error(connect());
    }
}
function login($email, $password)
{
    $found_user = false;
    $sql="SELECT * FROM users";
    $result = connect()->query($sql);

    if ($result->num_rows >0) {
        while ($row=$result->fetch_assoc()) {
            if ($row["email"]==$email && $row["password"]==$password) {
                $found_user = true;
                header("Location: ./home.php");
                $_SESSION['user']=$row["display_name"];
            } else {
                continue;
            }
        }
        if (!$found_user) {
            header("Location: ./login.php");
            $_SESSION['error'] = "Incorrect email or password";
        }
    } else {
        echo "empty record";
    }
}
