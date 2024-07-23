<?php

/**
 * Controller for Home page
 */
require BASE_PATH . '/core/Controller.php';
require BASE_PATH . '/src/models/WildfireModel.php';

class WildfireController extends Controller
{
    public function __construct()
    {
        # This not working for some reason. No time to figure out why.
        // private WildfireModel $wildfireModel;

        $this->wildfireModel = new WildfireModel();
    }

    public function getForests()
    {
        $forests = $this->wildfireModel->getForests();

        $this->loadView('home.php', ['forests' => $forests]);
    }

    public function getByForest()
    {
        $forest = $_GET['forest'];
        $fires = $this->wildfireModel->getByForest($forest);

        $this->loadView('details.php', ['fires' => $fires, 'forest' => $forest]);
    }
}