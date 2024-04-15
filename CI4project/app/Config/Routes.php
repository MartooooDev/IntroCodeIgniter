<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//qualquer request sem conteúdo especificado será tratado pelo método index() no arquivo 'Home.php'

use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);
//segunda regra do objeto $routes; realiza um metodo GET para o endereço /pages, mapeando para o método index() da classe 'Pages'

$routes->get('(:segment)', [Pages::class, 'view']);
//terceira regra do objeto $routes; realiza um método GET usando o placeholder (:segment) e passa o parametro para o método view() da classe 'Pages'

//$routes->metodo('endereço', [Objeto::tipo, 'método na classe']);
//Daqui, ir para os controllers, seguindo as regras criadas. Nesse caso, ir para os Controllers e criar a página "Pages.php"
