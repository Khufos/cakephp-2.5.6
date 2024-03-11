<?php
// você criar o form diante o nome do model , no meu caso o nome do meu model é noticias
echo $this->Form->create("Noticia"); 
echo $this->Form->input("titulo", array("label" => "Titulo da notícia", "placeholder" => "Digite algo"));
echo $this->Form->input("texto");
echo $this->Form->input("data");
echo $this->Form->input("Categoria_id",array("empty"=>"Selecione uma opção"));
echo $this->Form->submit("Cadastrar");
echo $this->Form->end();
?>