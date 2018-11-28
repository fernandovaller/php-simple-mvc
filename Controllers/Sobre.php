<?php

class Sobre extends Controller
{
    public static function listar()
    {        
        //Consulta ao banco
        $data = self::query("SELECT * FROM usuarios");        
        print_r($data);

        //recebendo dados
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            print_r($email);
        }        
        
    }
    
}
