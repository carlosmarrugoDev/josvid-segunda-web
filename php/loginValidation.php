<?php
    session_start();
    include 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM useraccount 
    WHERE email = '$email' and password = '$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $query = "CREATE VIEW USERTEM as SELECT * FROM usercourses WHERE Id_user = (SELECT id FROM useraccount 
        WHERE email = '$email' and password = '$password')";
        mysqli_query($conexion, $query);
            $_SESSION['user'] = $email;
            echo '
                <script>
                    window.location = "../courses.html";
                </script>
                exit;
            ';
    } else {
        echo '
            <script>
                alert("No eres tu, Somos Nosotros!");
                windows.location = "../login.html";
            </script>
            exit;
        ';
    }
