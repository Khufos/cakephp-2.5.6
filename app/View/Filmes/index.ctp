<?php

// $filmes = array(
//     array('Filme' => array('nome' => 'Avengers', 'ano' => '2019', 'duracao' => '5.0', 'idioma' => 'Ingles')),
//     array('Filme' => array('nome' => 'Pantera ', 'ano' => '2020', 'duracao' => '10.0', 'idioma' => 'Português')),
//     array('Filme' => array('nome' => 'Sapoto', 'ano' => '2045', 'duracao' => '2.0', 'idioma' => 'Italiano')),
// );

$filtro = $this->Form->create('Filme',array('class'=>'form-inline'));
$filtro .= $this->Form->input('Filme.nome',array(
    'required'=>false,
    'label' => array('text'=>'Nome', 'class'=>'sr-only')
));
$filtro .= $this->Form->end('Filtrar');

$detalhes = array();
foreach ($filmes as $filme) {
    $view = $this->Html->link($filme['Filme']['nome'], '/filmes/view/' . $filme['Filme']['id']);
    $editLink = $this->Html->link('Alterar', array('controller' => 'filmes', 'action' => 'edit', $filme['Filme']['id']));
    $deleteLink = $this->Html->link('Excluir', '/filmes/delete/' . $filme['Filme']['id']);
    $detalhes[] = array($view , $filme['Filme']['ano'], $filme['Filme']['duracao'], $filme['Filme']['idioma'], $filme['Genero']['nome'], $editLink.' '.$deleteLink);
}

echo $this->Html->tag('h1', 'Filmes');
echo $filtro;
$titulos = array('Nome', 'Ano', 'Duração', 'Idioma', 'Genero do Filme');
$header = $this->Html->tag('thead',$this->Html->tableHeaders($titulos));
$novoBotao = $this->Html->link('Novo', '/filmes/add');

// Adicione cada link de paginação ao array $paginate
$paginate[] = $this->Paginator->first();
$paginate[] = $this->Paginator->prev();
$paginate[] = $this->Paginator->numbers();
$paginate[] = $this->Paginator->next();
$paginate[] = $this->Paginator->last();
$paginate[] = $this->Html->link('5 por página', array('controller' => 'filmes', 'action' => 'index', 'limit' => 5));
$paginate[] = $this->Html->link('10 por página', array('controller' => 'filmes', 'action' => 'index', 'limit' => 10));
$paginate[] = $this->Paginator->counter();

// Concatene todos os links de paginação em uma string usando a função implode()
$paginate = implode('', $paginate);

// Encapsule a string $paginate em uma tag <p> utilizando a função $this->Html->para()
$paginate = $this->Html->para('', $paginate);

$body = $this->Html->tableCells($detalhes);
echo $novoBotao;
echo $this->Html->tag('table', $header . $body,array('class'=>'table'));
echo $paginate;


?>