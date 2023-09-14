<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        // controller
        if (!empty($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            // Handle kesalahan atau arahkan ke halaman kesalahan 404.
        }

        // Include controller file
        require_once '../app/controllers/' . $this->controller . '.php';

        // Membuat instance controller jika class-nya ada
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
        } else {
            // Handle kesalahan atau arahkan ke halaman kesalahan 404.
        }

        // method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        } else {
            // Handle kesalahan atau arahkan ke halaman kesalahan 404.
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller & method, serta kirimkan params 
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
?>