<?php
    function autoload($pClassName) { 
        include(__DIR__. "/models/" . $pClassName. '.php'); 
    }
    spl_autoload_register("autoload");

    echo file_get_contents("index.html");

    if(isset($_POST['sign_up'])) {
        $user = new Users();
        if($user->sign_up($_POST['login'], $_POST['email'], $_POST['password'], $_POST['repeat'], $_POST['real_name'])){
            echo '<script>
                    let msg = document.querySelector(".msg");
                    msg.innerHTML = "Registration succeed";
                    msg.style.color = "green";
                </script>';
        } else {
            echo '<script>
                    let msg = document.querySelector(".msg");
                    msg.innerHTML = "Registration failde";
                    msg.style.color = "red";
                </script>';
        }
    }
?>
