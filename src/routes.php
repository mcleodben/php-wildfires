<?php

/**
 * Define routes and their corresponding controller and function.
 */
const ROUTES = [
    '/'        => ['WildfireController', 'getForests'],
    '/details' => ['WildfireController', 'getByForest'],
];