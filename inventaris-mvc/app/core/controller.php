<?php
class Controller {
    public function view(string $view, array $data = []): void {
        extract($data);
        require_once ROOT_PATH . '/app/views/' . $view . '.php';
    }

    public function model(string $model) {
        require_once ROOT_PATH . '/app/models/' . $model . '.php';
        return new $model();
    }

    public function redirect(string $path): void {
        header('Location: ' . BASEURL . '/' . ltrim($path, '/'));
        exit;
    }
}