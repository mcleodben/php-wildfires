<?php

require BASE_PATH . '/core/Model.php';

class WildfireModel extends Model
{
    private const TABLE = 'Fires';

    function __construct()
    {

    }

    public function getForests()
    {
        $dbConnection = $this->connectDB();

        if (!$dbConnection) {
            return null;
        }

        $query = 'SELECT DISTINCT NWCG_REPORTING_UNIT_NAME FROM ' . self::TABLE . ' ORDER BY NWCG_REPORTING_UNIT_NAME ASC';

        return $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByForest($forest)
    {
        $dbConnection = $this->connectDB();

        if (!$dbConnection) {
            return null;
        }

        $query = "SELECT * FROM " . self::TABLE . " WHERE NWCG_REPORTING_UNIT_NAME = '$forest' ORDER BY FIRE_YEAR DESC";

        return $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
}