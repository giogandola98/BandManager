<?php
function register()
{

}
function db_id()
{
  require_once 'db_connect.php'
  //query di ricerca
  $query="";

}
function login($username,$password)
{
  //check in db
  return db_id($username,md5($password))
}
 ?>
