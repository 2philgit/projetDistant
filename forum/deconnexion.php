<?php

session_start();
unset($_SESSION['auth']);

header('Location: ./');  // "./" : revient à la racine du répertoire dans lequel on doit être