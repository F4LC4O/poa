<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReuniaoModel extends Model
{
    //
    private $id;            //integer
    private $id_scopia;     //integer
    private $link;          //string
    private $horario;       //timestamp
    private $equip_reuniao; //array

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

}
