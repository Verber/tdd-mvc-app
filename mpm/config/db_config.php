<?php
$config = include realpath(dirname(__FILE__).'/../../app/config.php');
$env_key = array_search('--env', $_SERVER['argv']);
if ($env_key !== FALSE) {
    $env = $_SERVER['argv'][$env_key+1];
} else {
    $env = 'default';
}


$db_config = (object) array();
$db_config->host = $config[$env]['db']['host'];
$db_config->port = '3306';
$db_config->user = $config[$env]['db']['user'];
$db_config->pass = $config[$env]['db']['password'];
$db_config->name = $config[$env]['db']['db'];
$db_config->db_path = 'mpm/db/';
$db_config->method = 1; //PDO
$db_config->migrations_table = 'mpm_migrations';
?>
