<?php
class HomeController{
    public function index(){
        //echo "Home";
        try {
            $colecPostagens = Postagem::selecionarTodos();
            $loader = new \Twig\Loader\FilesystemLoader('app/view/');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.html');
            $parametros = array();
            $parametros["postagens"] = $colecPostagens;
            $conteudo = $template->render($parametros);
            echo $conteudo;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
}
?>