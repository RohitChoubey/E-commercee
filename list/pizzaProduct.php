<?php

// Use to fetch product data
class pizzaProduct
{
    
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){

        //$result = $this->db->con->query("SELECT * FROM {$table}");
		$result = mysqli_query($this->db->con,"select * from {$table} where type='pizza'");
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}?>
