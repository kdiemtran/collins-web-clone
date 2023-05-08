

<?php
require 'db/config.php';
require 'db/database.php';


session_start();
ob_start();
require 'data/users.php';
require 'library/template.php';
require 'library/validation.php';

?>
<?php
db_connect($config);
$mod = isset($_GET['mod']) ?  $_GET['mod']: 'home' ;
$act = isset($_GET['act']) ? $_GET['act'] : 'main' ;
$path = "modules/{$mod}/{$act}.php";


if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}

?>

