<?php

require_once __DIR__ . '/data/functions.php';

require_once __DIR__ . '/data/variables.php';

session_start();

if (isset($_SESSION['send_pass'])) {
    $pass = $_SESSION['send_pass'];
    $gen_pass = genPass($pass, $characters_list);
}else{
    header('location: ./index.php');
}



require_once __DIR__ . '/partials/head.php';

?>


<body class="bg-black">


    <main class="pt-5">
        <h3 class="text-center text-light ">La password generata è:</h3>
        <div class="container">
            <div class="message bg-info">
                <p class="lh-5 p-3 text-center"><?php echo $gen_pass ?></p>
            </div>
            <div class="genPassBox bg-light ">

                <!-- FORM -->
                <form action="index.php" method="POST">
                    <div class="row d-flex align-items-center p-3 ">
                        <div class="col">
                            <a class="btn btn-secondary " href="index.php">Torna indietro</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>

</body>

</html>