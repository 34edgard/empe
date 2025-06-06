<?php
interface Ruta_Server {
    public static function validar_metodo(string $metodo): bool;
    public static function validar_parametros(array $parametros, array $variable_global): bool;
    public static function get(string $url,callable $funcion, array $parametros = [], array $funcion_extra = []);
    public static function post(string $url,callable $funcion, array $parametros = [], array $funcion_extra = []);
}

class Ruta implements Ruta_Server {

    public static function validar_parametros(array $parametros, array $variable_global): bool {
        foreach ($parametros as $parametro) {
            if (!isset($variable_global[$parametro])) {
                return false;
            }
        }
        return true;
    }

    public static function validar_metodo(string $metodo): bool {
        return $_SERVER['REQUEST_METHOD'] === $metodo;
    }

    public static function get(string $url,callable $funcion, array $parametros = [], array $funcion_extra = []) {
       if($_SERVER['REQUEST_URI'] !== $url) return;
     if (Ruta::validar_metodo('GET')) {
            $numero_parametros = count($parametros);
            $numero_get = count($_GET);

            if ($numero_parametros === 0 && $numero_get === 0) {
                // No hay parámetros esperados y tampoco se recibieron
                $funcion($funcion_extra);
            } elseif ($numero_parametros === $numero_get && Ruta::validar_parametros($parametros, $_GET)) {
                // Se recibieron los parámetros esperados
                $funcion($_GET, $funcion_extra);
            }
        }
    }

    public static function post(string $url,callable $funcion, array $parametros = [], array $funcion_extra = []) {
     if($_SERVER['REQUEST_URI'] !== $url) return;
     if (Ruta::validar_metodo('POST')) {
            $numero_parametros = count($parametros);
            $numero_post = count($_POST);

            if ($numero_parametros === 0 && $numero_post === 0) {
                // No hay parámetros esperados y tampoco se recibieron
                $funcion($funcion_extra);
            } elseif ($numero_parametros === $numero_post && Ruta::validar_parametros($parametros, $_POST)) {
                // Se recibieron los parámetros esperados
                $funcion($_POST, $funcion_extra);
            }
        }
    }
}