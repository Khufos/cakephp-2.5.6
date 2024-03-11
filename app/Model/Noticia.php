<?php

class Noticia extends AppModel{
    public $validate = array(

        "titulo"=>array(
            "campoVazio"=>array(
                "rule"=> array("notEmpty"),
                "message"=> array("Esse campo nao pode fica vazio.")
            )

        )
            );

public $belongsTo = array("Categoria");
   public function beforeSave($options = array())
   {
    $this->data;
   
   }
}


?>
