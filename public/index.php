<?php
// public/index.php
define('BASE_PATH', __DIR__ . '/../');


// Activer la gestion des erreurs pour tout rediriger vers le fichier error.log
ini_set('log_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('error_log', BASE_PATH.'logs/error.log'); // Rediriger les erreurs vers logs/error.log

require_once BASE_PATH . 'src/controllers/ContactController.php';
require_once BASE_PATH . 'src/models/Database.php';
require_once BASE_PATH . 'src/error-handler.php';


// Connexion à la base de données
$database = new Database();
$db = $database->getConnection();

// Créer une instance du contrôleur ContactController
$controller = new ContactController($db);

// Router les requêtes selon l'action demandée
$action = $_GET['action'] ?? 'showForm';

if ($action === 'submitContact') {
    $controller->submitContact();
} else {
    $controller->showForm();
}