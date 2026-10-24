<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    require_once __DIR__ . '/../app/config/config.php';

    // Autoloader untuk memuat class otomatis
    spl_autoload_register(function ($class) {
        foreach (['core', 'controllers', 'models'] as $dir) {
            $file = ROOT_PATH . '/app/' . $dir . '/' . $class . '.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    });

    // Penanganan URL untuk XAMPP
    if (!isset($_GET['url'])) {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        if ($basePath !== '/' && $basePath !== '' && str_starts_with($uri, $basePath)) {
            $uri = substr($uri, strlen($basePath));
        }
        $_GET['url'] = trim((string) $uri, '/');
    }

    session_start();
    $app = new App();

} catch (Throwable $e) {
    echo "<div style='padding: 20px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; font-family: monospace; margin: 20px;'>";
    echo "<h3 style='margin-top:0;'>⚠️ Terjadi Error pada Aplikasi:</h3>";
    echo "<b>Pesan:</b> " . htmlspecialchars($e->getMessage()) . "<br>";
    echo "<b>File:</b> " . htmlspecialchars($e->getFile()) . "<br>";
    echo "<b>Baris:</b> " . $e->getLine() . "<br>";
    echo "<pre style='margin-top: 10px; background: #fff; padding: 10px;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</div>";
}