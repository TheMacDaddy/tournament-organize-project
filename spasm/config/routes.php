<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 


use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
//use Cake\Routing\Router;



/*
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 */
/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
	$builder->registerMiddleware('csrf', new CsrfProtectionMiddleware([
		'httponly' => true,
	]));
	
	$builder->applyMiddleware('csrf');
	//$builder->connect('/pages',['controller'=>'Pages','action'=>'display','homr']);
	
	
    /*
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, templates/Pages/home.php)...
     */
    //$builder->connect('/', ['controller' => 'Tests', 'action' => 'show']);
	$builder->connect('tests/:arg1/:arg2', ['controller' => 'Tests', 'action' => 'show'],['pass' => ['arg1', 'arg2']]);
	$builder->connect('/generate',['controller'=>'Generates','action'=>'show']);
	$builder->redirect('/redirect','https://tutorialspoint.com/');
	$builder->connect('/redirect-controller',['controller'=>'Redirects','action'=>'action1']);
	$builder->connect('/redirect-controller2',['controller'=>'Redirects','action'=>'action2']);
    $builder->connect('template',['controller'=>'Products','action'=>'view']);
	$builder->connect('extend',['controller'=>'Extends','action'=>'index']);
	$builder->connect('/element-example',['controller'=>'Elems','action'=>'index']);
	
	
	$builder->connect('/', ['controller' => 'Home', 'action' => 'index']);
	$builder->connect('/home', ['controller' => 'Home', 'action'=> 'index']);
	$builder->connect('/homepage', ['controller'=> 'Homepage', 'action'=> 'index']);
	
	$builder->connect('/games', ['controller'=> 'Games', 'action'=> 'index']);
	$builder->connect('/games/add', ['controller'=> 'Games', 'action'=> 'add']);
	$builder->connect('/games/edit', ['controller'=> 'Games', 'action'=> 'edit']);
	$builder->connect('/games/delete', ['controller'=> 'Games', 'action'=> 'delete']);
	
	$builder->connect('/events', ['controller'=> 'Events', 'action'=> 'index']);
	$builder->connect('/events/add', ['controller'=> 'Events', 'action'=> 'add']);
	$builder->connect('/events/edit', ['controller'=> 'Events', 'action'=> 'edit']);
	$builder->connect('/events/delete', ['controller'=> 'Events', 'action'=> 'delete']);
	
	$builder->connect('/teams', ['controller'=> 'Teams', 'action'=> 'index']);
	$builder->connect('/teams/add', ['controller'=> 'Teams', 'action'=> 'add']);
	$builder->connect('/teams/edit', ['controller'=> 'Teams', 'action'=> 'edit']);
	$builder->connect('/teams/delete', ['controller'=> 'Teams', 'action'=> 'delete']);
	
	$builder->connect('/videos', ['controller'=> 'Videos', 'action'=> 'index']);
	$builder->connect('/videos/add', ['controller'=> 'Videos', 'action'=> 'add']);
	$builder->connect('/videos/edit', ['controller'=> 'Videos', 'action'=> 'edit']);
	$builder->connect('/videos/delete', ['controller'=> 'Videos', 'action'=> 'delete']);
	
	$builder->connect('/matches', ['controller'=> 'Matches', 'action'=> 'index']);
	$builder->connect('/matches/add', ['controller'=> 'Matches', 'action'=> 'add']);
	$builder->connect('/matches/edit', ['controller'=> 'Matches', 'action'=> 'edit']);
	$builder->connect('/matches/delete', ['controller'=> 'Matches', 'action'=> 'delete']);
	
	$builder->connect('/users', ['controller' => 'Users', 'action' => 'index']);
	$builder->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
	$builder->connect('/users/edit', ['controller' => 'Users', 'action' => 'edit']);
	$builder->connect('/users/delete', ['controller' => 'Users', 'action' => 'delete']);
	
	$builder->connect('/eventmatches', ['controller'=> 'Eventmatches', 'action'=> 'index']);
	$builder->connect('/eventmatches/add', ['controller'=> 'Eventmatches', 'action'=> 'add']);
	$builder->connect('/eventmatches/edit', ['controller'=> 'Eventmatches', 'action'=> 'edit']);
	$builder->connect('/eventmatches/delete', ['controller'=> 'Eventmatches', 'action'=> 'delete']);
	
	$builder->connect('/matchvideos', ['controller'=> 'Matchvideos', 'action'=> 'index']);
	$builder->connect('/matchvideos/add', ['controller'=> 'Matchvideos', 'action'=> 'add']);
	$builder->connect('/matchvideos/edit', ['controller'=> 'Matchvideos', 'action'=> 'edit']);
	$builder->connect('/matchvideos/delete', ['controller'=> 'Matchvideos', 'action'=> 'delete']);
	
	$builder->connect('/matchteams', ['controller'=> 'Matchteams', 'action'=> 'index']);
	$builder->connect('/matchteams/add', ['controller'=> 'Matchteams', 'action'=> 'add']);
	$builder->connect('/matchteams/edit', ['controller'=> 'Matchteams', 'action'=> 'edit']);
	$builder->connect('/matchteams/delete', ['controller'=> 'Matchteams', 'action'=> 'delete']);
	
	$builder->connect('/teammembers', ['controller'=> 'Teammembers', 'action'=> 'index']);
	$builder->connect('/teammembers/add', ['controller'=> 'Teammembers', 'action'=> 'add']);
	$builder->connect('/teammembers/edit', ['controller'=> 'Teammembers', 'action'=> 'edit']);
	$builder->connect('/teammembers/delete', ['controller'=> 'Teammembers', 'action'=> 'delete']);
	
	$builder->redirect('http://3.129.58.132/homepage','http://3.129.58.132/spasm/homepage/');
	//http://3.129.58.132/homepage
	
	/*
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /*
     * Connect catchall routes for all controllers.
     *
     * The `fallbacks` method is a shortcut for
     *
     * ```
     * $builder->connect('/:controller', ['action' => 'index']);
     * $builder->connect('/:controller/:action/*', []);
     * ```
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $builder->fallbacks();
});

/*
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * $routes->scope('/api', function (RouteBuilder $builder) {
 *     // No $builder->applyMiddleware() here.
 *     
 *     // Parse specified extensions from URLs
 *     // $builder->setExtensions(['json', 'xml']);
 *     
 *     // Connect API actions here.
 * });
 * ```
 */
