<?php

require_once __DIR__ . '/data/functions.php';

$upper_list = "QWERTYUIOPASDFGHJKLZXCVBNM";
$lower_list = "qwertyuiopasdfghjklzxcvbnm";
$number_list = "1234567890";
$special_chars_list = "!@#$%^&*-_?><.;/|";
$characters_list = $upper_list . $lower_list . $number_list . $special_chars_list;



$post_number = isset($_POST['number']) ? $_POST['number'] : '';

$gen_pass = genPass($post_number, $characters_list);



//var_dump(checkPass($gen_pass));

//var_dump($gen_pass);

$message = "Scegli una password con un minimo di 8 caratteri ed un massimo di 32 caratteri.";



if(isset($_POST['number'])) {
    $password_length = $_POST['number'];
    if(checkPass($gen_pass)) {
        $message = "La password generata è: $gen_pass";
        $gen_pass = genPass($password_length, $characters_list);
    }else {
        $message = "Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri";
    };
}

if (isset($_POST['reset'])) {
    $_POST['number'] = '';
    $gen_pass = '';
    $message = "Scegli una password con un minimo di 8 caratteri ed un massimo di 32 caratteri.";
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <title>PHP Strong Password Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-black">

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
                        <div class="col-6">
                            <p class="fw-bold">Lunghezza Password:</p>
                        </div>
                        <div class="col-6">
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