<?php

//Aqui criamos uma estrutura base para a classe Pages, extendendo da classe BaseController, que é contém os métodos básicos dos controllers
//Classe BaseController extende da classe CodeIgniter\Controller (system/Controller.php)

//Controllers são o centro de cada request feito. Para se referir ao próprio controller dentro dele, usar $this

namespace App\Controllers;

class Pages extends BaseController{

    public function index(){
        return view('welcome_message');
    }

    public function view($page = 'home'){

    } 
}
//Classe chamada Pages com um metodo index() e um método view()
//O método index() apresenta a homepage, assim como o método da homepahe
//O método view não faz nada, mas aceita um argumento, o $pages

//O método view chamado no método index() não é o mesmo que o criado na classe Pages, apesar de possuírem a mesma assinatura.

//Para criação das views (templates de páginas), vamos para app/Views/templates e criar duas: header e footer, para serem reutilizados em cada página, para manter o site padronizado
?>