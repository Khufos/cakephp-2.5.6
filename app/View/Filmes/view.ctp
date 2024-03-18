<?php
$view = $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('', $this->request->data['Filme']['nome']);
$view .= $this->Html->tag('h2', 'Duração');
$view .= $this->Html->para('', $this->request->data['Filme']['duracao']);
$view .= $this->Html->tag('h2', 'Idioma');
$view .= $this->Html->para('', $this->request->data['Filme']['idioma']);
$view .= $this->Html->tag('h2', 'Ano');
$view .= $this->Html->para('', $this->request->data['Filme']['ano']);

// Adição do título 'Críticas' antes de listar as críticas
$view .= $this->Html->tag('h2', 'Críticas');


$criticas = ''; // Inicialização da variável
foreach ($this->request->data['Critica'] as $critica) {
    $criticas .= $critica['nome'] . ' - ' . date('d/m/y',strtotime($critica['data_avaliacao'])) . ' - Avaliação: ' . $critica['avaliacao'] . '<br>'; // Concatenação correta
}
$view .= $this->Html->para('', $criticas);


$view .= $this->Html->tag('h2', 'Atores');

$atores = '';
foreach($this->request->data['Ator'] as $atore){
    $atores .= $atore['nome'] . ' - ' . date('d/m/y',strtotime($atore['nascimento']));
}
$view .= $this->Html->para('', $atores);
// Adicionando todas as críticas em um parágrafo após o loop

$voltarLink = $this->Html->link('Voltar', '/filmes',array('class'=>'btn btn-sencondary ml-3','update'=> '#content'));

echo $view;
echo $voltarLink;
?>