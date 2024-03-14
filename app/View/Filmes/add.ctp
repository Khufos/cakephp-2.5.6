<?php
echo $this->Html->tag('h1','Novo Filme');
echo $this->Form->create('Filme');
echo $this->Form->input('nome');
echo $this->Form->input('idioma');
echo $this->Form->input('duracao',array('label'=>array('text'=>'Duração')));
echo $this->Form->input('ano',array('type'=> 'text','maxlength'=>4));
echo $this->Form->submit('Gravar');
echo $this->Form->end();

?>
