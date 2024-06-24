<?php
require_once './includes/_essentials.php';

class item
{
    // private database object\
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getItemsByCategoryId($id)
    {
        try {
            if ($id == 0) {
                $sql = "
                SELECT ft_01_items.id as itm_id, ft_01_categories.id as cat_id, 
                ft_01_items.name as itm_name, ft_01_items.description as itm_description, 
                ft_01_items.price as itm_price, ft_01_items.image as itm_img, ft_01_categories.name as cat_name 
                FROM ft_01_items JOIN ft_01_categories on ft_01_categories.id = ft_01_items.category_id 
                ";
            } else {
                $sql = "
                SELECT ft_01_items.id as itm_id, ft_01_categories.id as cat_id, 
                ft_01_items.name as itm_name, ft_01_items.description as itm_description, 
                ft_01_items.price as itm_price, ft_01_items.image as itm_img, ft_01_categories.name as cat_name 
                FROM ft_01_items JOIN ft_01_categories on ft_01_categories.id = ft_01_items.category_id 
                WHERE ft_01_categories.id = '$id'
                ";
            }
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo _alert_link($e->getMessage(), "danger", "", "Press following link to ", "Go back.");
            return false;
            return false;
        }
    }

    public function getItemsByItemId($id)
    {
        try {
            $sql = "
                SELECT ft_01_items.id as itm_id, ft_01_categories.id as cat_id, 
                ft_01_items.name as itm_name, ft_01_items.description as itm_description, 
                ft_01_items.price as itm_price, ft_01_items.image as itm_img, ft_01_categories.name as cat_name 
                FROM ft_01_items JOIN ft_01_categories on ft_01_categories.id = ft_01_items.category_id 
                WHERE ft_01_items.id = '$id'
                ";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo _alert_link($e->getMessage(), "danger", "", "Press following link to ", "Go back.");
            return false;
            return false;
        }
    }


    public function getItemsWithcategories()
    {
        try {
            $sql = "
                SELECT ft_01_items.id as itm_id, ft_01_categories.id as cat_id, 
                ft_01_items.name as itm_name, ft_01_items.description as itm_description, 
                ft_01_items.price as itm_price, ft_01_categories.name as cat_name 
                FROM ft_01_items JOIN ft_01_categories on ft_01_categories.id = ft_01_items.category_id 
                ";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo _alert_link($e->getMessage(), "danger", "", "Press following link to ", "Go back.");
            return false;
            return false;
        }
    }
}
