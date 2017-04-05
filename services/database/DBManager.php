<?php
/**
 * Created by PhpStorm.
 * User: dudu
 * Date: 05/04/17
 * Time: 10:13
 */
class_exists('DBConfig') || require ('DBConfig.php');

class DBManager
{
    private $db = null;
    private $data = null;

    public function __construct()
    {
        $this->db = DBConfig::getConnection();

        if(mysqli_error($this->db)) {
            echo "Error connecting to database:".mysqli_error($db);
        }
    }

    public function processQuery($query)
    {
        if(empty($this->db)) {
            echo "Error processing query: database not connected";
            return;
        }

        $result = $this->db->query($query);
        while ($row = $result->fetch_assoc()) {
            $this->data[] = $row['title'];
        }
    }

    public function getQueryResponse()
    {
        //return json data
        return json_encode($this->data);
    }
}