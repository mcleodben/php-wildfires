<?php

define('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . '/FPA_FOD_20170508.sqlite');

class Model
{
    function __construct()
    {

    }

    protected function connectDB()
    {
        try {
            return new PDO('sqlite:' . DB_PATH);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}