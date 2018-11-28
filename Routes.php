<?php
//Simples rotas
//Nao define o tipo de requisicao

Route::set('index.php', function (){  
    //echo "Pagina Sobre\n";
    Index::CreateView('index');
});

Route::set('sobre', function (){  
    //echo "Pagina Sobre\n";
    Sobre::listar();
    Sobre::CreateView('sobre');
    //Sobre::teste();
});

Route::set('contato', function (){
    //echo "Pagina Contato\n";
    Contato::CreateView('contato');
});

