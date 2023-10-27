<?php
$upper_list = "QWERTYUIOPASDFGHJKLZXCVBNM";
$lower_list = "qwertyuiopasdfghjklzxcvbnm";
$number_list = "1234567890";
$special_chars_list = "!@#$%^&*-_?><.;/|";
$characters_list = $upper_list . $lower_list . $number_list . $special_chars_list;

function genPass($p_length, $characters) {
  $password = '';
  $characters_list_length = strlen($characters);

  for ($i = 0; $i < $p_length; $i++) {
    $random_index = rand(0, $characters_list_length - 1);
    $password .= $characters[$random_index];
  }

  return $password;
}


$gen_pass = genPass(12,$characters_list);

var_dump($gen_pass);

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

<body class="bg-gray">

    <header>
        <h1 class="text-center mt-5 text-info">STRONG PASS GENERATOR</h1>
    </header>

    <main>
        <h3 class="text-center text-light ">Genera una password sicura</h3>
        <div class="container">
            <div class="message bg-info">
                <p class="lh-5 p-3 ">Messaggio di prova</p>
            </div>
            <div class="genPassBox bg-light ">

                <form action="index.php" method="POST">
                    <div class="row d-flex align-items-center p-3 ">
                        <div class="col-6">
                            <p class="fw-bold">Lunghezza Password:</p>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <input type="text" class="form-control w-50 " id="text" placeholder="Inserisci un numero.">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button type="reset" class="btn btn-secondary">Annulla</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>

</body>

</html>