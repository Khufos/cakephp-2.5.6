<?php
// Assumindo que $filmes é um array preenchido anteriormente com dados dos filmes.

// Criando o botão "Novo" apenas uma vez, corrigindo o caminho e a classe.
$novoButton = $this->Html->link('Novo', '/filmes/add', array('class' => 'btn btn-success'));

// Construindo o formulário de filtro sem exibi-lo diretamente.
$filtro = $this->Form->create('Filme', array('class' => 'form-inline'));
$filtro .= $this->Form->control('Filme.nome', array(
    'required' => false,
    'label' => array('text' => 'Nome', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome'
));
$filtro .= $this->Form->button('Filtrar', array('type' => 'submit', 'class' => 'btn btn-primary mb-2'));
$filtro .= $this->Form->end();

// Combinando o filtro e o botão novo numa barra de ferramentas.
$filtroBar = $this->Html->div('row',
    $this->Html->div('col-md-6', $filtro) .
    $this->Html->div('col-md-6', $novoButton)
);

// Preparando detalhes dos filmes.
$detalhes = array();
foreach ($filmes as $filme) {
    $viewLink = $this->Html->link($filme['Filme']['nome'], '/filmes/view/' . $filme['Filme']['id']);
    $editLink = $this->Html->link('Alterar', array('controller' => 'filmes', 'action' => 'edit', $filme['Filme']['id']));
    $deleteLink = $this->Html->link('Excluir', '/filmes/delete/' . $filme['Filme']['id'], array('confirm' => 'Tem certeza?'));
    $detalhes[] = array($viewLink, $filme['Filme']['ano'], $filme['Filme']['duracao'], $filme['Filme']['idioma'], $filme['Genero']['nome'], $editLink . ' ' . $deleteLink);
}

// Cabeçalhos da tabela.
$titulos = array('Nome', 'Ano', 'Duração', 'Idioma', 'Gênero do Filme');
$header = $this->Html->tag('thead', $this->Html->tableHeaders($titulos));

// Paginação (sem duplicar links personalizados de limitação).
$paginateLinks = array(
    $this->Paginator->first(),
    $this->Paginator->prev(),
    $this->Paginator->numbers(),
    $this->Paginator->next(),
    $this->Paginator->last(),
    $this->Paginator->counter(['format' => 'Página {:page} de {:pages}, mostrando {:current} de {:count} filmes no total'])
);
$paginate = implode('', $paginateLinks);
$paginate = $this->Html->para('', $paginate);

// Montando o corpo da tabela.
$body = $this->Html->tableCells($detalhes);

// Exibindo tudo.
echo $this->Html->tag('h1', 'Filmes');
echo $filtroBar; // Exibe o filtro e o botão "Novo" juntos.
echo $this->Html->tag('table', $header . $body, array('class' => 'table'));
echo $paginate;
?>
