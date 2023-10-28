<?php

require_once __DIR__ . '/data/functions.php';

require_once __DIR__ . '/data/variables.php';

$post_number = isset($_POST['number']) ? $_POST['number'] : '';

$gen_pass = genPass($post_number, $characters_list);



//var_dump(checkPass($gen_pass));

//var_dump($gen_pass);

$message = "Scegli una password con un minimo di 8 caratteri ed un massimo di 32 caratteri.";



if(isset($_POST['number'])) {
    if(checkPass($gen_pass)) {
        session_start();
        //array globale
        $_SESSION['send_pass'] = $_POST['number'];
        header('location: ./success_page.php');
    }else {
        $message = "Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri";
    };
}

if (isset($_POST['reset'])) {
    $_POST['number'] = '';
    $gen_pass = '';
    $message = "Scegli una password con un minimo di 8 caratteri ed un massimo di 32 caratteri.";
}

require_once __DIR__ . '/partials/head.php';

?>



<body class="bg-gray">

    <header>
        <h1 class="text-center mt-5 text-info">STRONG PASS GENERATOR</h1>
    </header>

    <main>
        <h3 class="text-center text-light ">Genera una password sicura</h3>
        <div class="container">
            <div class="message bg-info">
                <p class="lh-5 p-3 "><?php echo $message ?></p>
            </div>
            <div class="genPassBox bg-light ">

                <!-- FORM -->
                <form action="index.php" method="POST">
                    <div class="row d-flex align-items-center p-3 ">
                        <div class="col-3">
                            <p class="fw-bold">Lunghezza Password:</p>
                        </div>
                        <div class="col-9">
                            <div class="mb-3">
                                <input type="text" name="number" class="form-control w-50 " id="text" placeholder="Inserisci un numero.">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button type="submit" name="reset" class="btn btn-secondary">Annulla</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>

</body>

</html>