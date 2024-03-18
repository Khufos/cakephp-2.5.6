<?php
// Use os helpers necessários
echo $this->Html->tag('h1', 'Novo Filme');

// Crie o formulário
echo $this->Form->create('Filme');

// Campos de entrada
echo $this->Form->input('nome');
echo $this->Form->input('idioma', array(
    'type' => 'select',
    'options' => array(
        'Inglês' => 'Inglês',
        'Português' => 'Português',
        'Espanhol' => 'Espanhol',
        'Francês' => 'Francês' // Corrija o erro de digitação aqui
    )
));
echo $this->Form->input('duracao', array('label' => 'Duração'));
echo $this->Form->input('ano', array('type' => 'text', 'maxlength' => 4));

// Campo de seleção de gênero
echo $this->Form->input('genero_id', array(
    
    'type' => 'select',
    'options' => $generos // Certifique-se de que $generos contém as opções necessárias
));

// Botão de envio
echo $this->Form->submit('Gravar');

// Fechar o formulário
echo $this->Form->end();
?>