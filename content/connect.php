<?php
$dbhost='localhost';
$dbuser= 'root';
$dbpass='';

$dbname='test';
$dbtable='ajax_seo'; // Database table set by ajax_seo.sql

$con=@mysql_connect($dbhost,$dbuser,$dbpass)or exit("Not reachable database.\nFollow installation instructions in README.md."); // mysql_error()
mysql_select_db($dbname,$con)or exit();
mysql_query("SET NAMES 'utf8'");
array_map('trim',$_GET);
array_map('stripslashes',$_GET);
array_map('mysql_real_escape_string',$_GET);

# Return 404 error, if url does not exist
class validate{
    public $fn;
    public $content;
    function status(){
        header('Status:404 Not Found',true,404);
        $this->fn='404 Page not found';
        $this->content='Sorry, this page cannot be found.';
    }
}

$url=(isset($_GET['url']) ? $_GET['url'] : NULL);
$urlid=(isset($urlid) ? $urlid : NULL);
?>