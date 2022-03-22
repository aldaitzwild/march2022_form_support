<?php

$loginToValid = 'toto';
$passwordToValid = 'toto123';

$authencators = [
    ['toto', 'toto123'],
    ['titi', 'titi456'],
    ['admin', 'admin'],
    ['jean', 'jeanTest'],
];

/*
$data = [];

foreach($_POST as $key => $value) {
    $data[$key] = trim($value);
}
*/

$data = array_map('trim', $_POST);

if (!isset($data['login']) || empty($data['login'])) {
    echo 'Le login est obligatoire.';
    die();
}

if (!isset($data['password']) || empty($data['password'])) {
    echo 'Le mot de passe est obligatoire.';
    die();
}



if ( $data['login'] === $loginToValid && $data['password'] === $passwordToValid) {
    echo 'Vous etes connecté !';
} else {
    echo 'Vos identifiants sont incorrects !';
}


/*
foreach($authencators as $authencator) {
    if($data['login'] === $authencator[0] && $data['password'] === $authencator[1]) {
        echo 'Vous etes connecté !';
        die();
    }
}

echo 'Vos identifiants sont incorrects !';
*/
