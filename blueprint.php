<?php



class MainController
{
    public function index()
    {
        $smarty = View::getInstance();

        $users = UserModel::all();
        $now = date("H:i:s", time());

        $smarty->assign('users', $users);
        $smarty->assign('time', $now);
        $smarty->display('index.tpl');
    }
}















class View
{
    private static $smarty;

    private function __construct()
    {
    }

    public static function getInstance(): Smarty
    {
        if (self::$smarty) {
            return self::$smarty;
        }

        $smarty = new Smarty();
        $smarty->setTemplateDir('Views');

        return self::$smarty = $smarty;
    }
}






















class DB
{
    private static $db;

    private function __construct()
    {
    }

    public static function getInstance(): mysqli
    {
        return self::$db ?? self::$db = new mysqli("localhost:3306", 'root', '', 'skillup');
    }
}

















$requestURI = ltrim($_SERVER['REQUEST_URI'], '/'); // /orders/update/12

$parts = explode('/', $requestURI);

$class = empty($parts[0]) ? 'user' : $parts[0];
$method = $parts[1] ?? 'index';
$parameter = $parts[2] ?? null;

$controller = ucfirst($class) . 'Controller'; //main => Main || user => User

$object = new $controller();
if (method_exists($object, $method)) {
    $object->$method();
} else {
    //header("Location: /" . $class);
    die("NOT FOUND");
}



