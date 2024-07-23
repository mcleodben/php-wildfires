<?php


class Router
{
    public static function route()
    {
        require BASE_PATH . '/src/routes.php';

        $request = trim($_SERVER['REQUEST_URI']);
        $request = explode('?', $request)[0];

        // Too many nests. Refactor and early return.
        if (array_key_exists($request, ROUTES)) {
            $controller = ROUTES[$request][0];
            $method     = ROUTES[$request][1];

            if (file_exists(BASE_PATH . '/src/controllers/' . $controller . '.php')) {
                require BASE_PATH . '/src/controllers/' . $controller . '.php';

                $class = new $controller();

                if (method_exists($controller, $method)) {
                    $class->$method();
                    exit;
                }
            }
        }

        http_response_code(404);
        include BASE_PATH . '/src/views/not_found.php';
    }
}