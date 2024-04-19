<?php
    include 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM useraccount 
    WHERE email = '$email' and password = '$password'");

    if(mysqli_num_rows($validar_login) > 0){
            echo '
                <script>
                    window.location = "../courses.html";
                </script>
            ';
    } else {
        echo '
            <script>
                alert("No eres tu, Somos Nosotros!");
                windows.location = "../login.html";
            </script>
        ';
    }
