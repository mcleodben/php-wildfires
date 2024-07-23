<?php
    $dbConnection = new PDO('sqlite:FPA_FOD_20170508.sqlite');

    $forests = $dbConnection->query("SELECT DISTINCT NWCG_REPORTING_UNIT_NAME FROM Fires")->fetchAll(PDO::FETCH_ASSOC);

    var_dump($forests);
?>