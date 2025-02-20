<?php
/**
 * Autoloader personnalisé pour le chargement automatique des classes
 */

spl_autoload_register(function ($class) {
    // Conversion du namespace en chemin de fichier
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/';

    // Vérifie si la classe utilise le namespace
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Récupère le chemin relatif de la classe
    $relative_class = substr($class, $len);
    
    // Remplace les séparateurs de namespace par les séparateurs de répertoire
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Charge le fichier s'il existe
    if (file_exists($file)) {
        require $file;
    }
});