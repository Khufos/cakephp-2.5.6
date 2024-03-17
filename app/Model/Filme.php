<?php

class Filme extends AppModel{
    
    public $belongsTo = array(
        'Genero'
    );
    public $hasMany =array(
        'Critica'
    );

    public $hasAndBelongsToMany = array(
        'Ator'
    );

     public $validade = array(
        'nome'=> array('rule' =>'notBlank','message'=> 'Informe o nome, please'),
        'duracao'=>array('rule' =>'notBlank','message'=>'Informe o duração , please')
     );
}

?>