<?php
if (!function_exists('Connect')) {
    function Connect()
    {
        try {
            $connection = new mysqli("isw613.com", "root", "1234", "workshop5");
            return $connection;
        } catch (mysqli_sql_exception $e) {
            echo "Error " . $e->getMessage();
            die();
        }
    }
}
