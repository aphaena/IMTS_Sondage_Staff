<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

  // User routes
  $routes->get('user/login', 'UserController::login');
  $routes->post('user/login', 'UserController::authenticate');
  $routes->get('user/logout', 'UserController::logout');

  // Quiz routes
  $routes->get('quiz', 'QuizController::index');
  $routes->post('quiz/submit', 'QuizController::submit');
