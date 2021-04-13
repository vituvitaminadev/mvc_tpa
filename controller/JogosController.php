<?php
class JogosController{

    public function all(){        
        
        // INSTANCIANDO O OBJETO usuario DA CLASSE Usuario
        $objeto = new Jogos();

        // RECUPERAR OS REGISTROS DO BANCO DE DADOS
        $jogos = $objeto->all();

        // RECUPERANDO O VALORES DOS ATRIBUTOS E MOSTRANDO NA TELA
        include "view/jogos.php";

    }

}