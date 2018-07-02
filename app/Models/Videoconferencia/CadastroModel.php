<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*

Classe-pai: Cadastro Model
id  (integer)   : código do cadastro
name(string)    : nome do cadastro

ReturnCadastro
Retorna o resultado do cadastro como um array

toString
Retorna o resultado do cadastro como uma string.

*/
class CadastroModel extends Model
{
    //
    private $id;                //integer
    private $name;              //string

    function __get ( $name )  
	{
		$aux = strtolower ( $name );
		return $this->$aux;
	}
	
	function __set ( $name, $value )
	{
		$aux = strtolower ( $name );
		
		$this->$aux = $value;
    }
   
    function returnCadastro ()
    {
        return ( array ($this->__get ($id), $this->__get ($name)) );
    }

    function toString ( $classname = "" )
    {
        return ( $classname.": ".$this->__get ($id)." - ". $this->__get ($name)."<br>" );
    }
}

class Equipamento extends CadastroModel 
{
		function __construct ( $idValue, $nameValue )
		{
			$__set ( 'id', $idValue );
			$__set ( 'name', $nameValue );
        }
}

class Sala extends CadastroModel
{
    private $capacidade;		// integer
    private $regiao_id;         // integer
    private $id_equip_sala;     // integer
	
	function __construct ( $idValue, $nameValue )
	{
			$__set ( 'id', $idValue );
			$__set ( 'name', $nameValue );
    }

    function returnSala ()
    {
            return ( array (
                            $this->__get ($id), 
                            $this->__get ($name),
                            $this->__get ( $capacidade ),
                            $this->__set ( $regiao_id ),
                            ) );
    }

   

    function toString ()
    {
            return ( "Sala: ".
                        "ID: ".$this->__get ($id)
                        ." Nome: ".$this->__get ($name)
                        ." Capacidade: ".$this->__get ( $capacidade )
                        ."Id da região: ".$this->__get ( $id_regiao )
                        ."<br>"
                    );
    }
	
}

class Regiao extends CadastroModel
{
    function __construct ( $idvalue, $nameValue )
    {
        $__set ( 'id', $idvalue );
        $__set ( 'name', $nameValue );
    }
    
}


