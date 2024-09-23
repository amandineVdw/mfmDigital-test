<?php

// src/error-handler.php

function customError($errno, $errstr, $errfile, $errline)
{
    $error_message = "[" . date("Y-m-d H:i:s") . "] Erreur: [$errno] $errstr - Fichier: $errfile - Ligne: $errline\n";
    
    // Enregistrer les erreurs dans le fichier log
    error_log($error_message, 3, '../logs/error.log');
}

// Définir le gestionnaire d'erreurs
set_error_handler("customError");