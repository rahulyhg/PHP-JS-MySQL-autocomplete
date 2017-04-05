<?php
/**
 * Created by PhpStorm.
 * User: dudu
 * Date: 05/04/17
 * Time: 09:15
 */
class_exists('DBManager') || require ('services/database/DBManager.php');

//get search term
$searchTerm = $_GET['term'];

if(empty($searchTerm)) return;

$dbMngr = new DBManager();
$query = "SELECT title FROM books WHERE title LIKE '%".$searchTerm."%' ORDER BY title ASC";
$dbMngr->processQuery($query);
echo $dbMngr->getQueryResponse();

