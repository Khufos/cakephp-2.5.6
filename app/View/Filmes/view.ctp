<?php
$view = $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('', $this->request->data['Filme']['nome']); // Ajuste na chamada do método para incluir parâmetros corretamente
$view .= $this->Html->tag('h2', 'Duração');
$view .= $this->Html->para('', $this->request->data['Filme']['duracao']);
$view .= $this->Html->tag('h2', 'Idioma');
$view .= $this->Html->para('', $this->request->data['Filme']['idioma']);
$view .= $this->Html->tag('h2', 'Ano');
$view .= $this->Html->para('', $this->request->data['Filme']['ano']);

$voltarLink = $this->Html->link('Voltar', '/filmes');

echo $view;
echo $voltarLink;
?>
