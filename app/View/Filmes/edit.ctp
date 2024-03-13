<?php

echo $this->Html->tag('h1','Alterar Filme');
echo $this->Form->create('Filme');
echo $this->Form->hidden('Filme.id');
echo $this->Form->input('nome');
echo $this->Form->input('idioma');
echo $this->Form->input('duracao');
echo $this->Form->input('ano');
echo $this->Form->submit('Gravar');
echo $this->Form->end();

?>
