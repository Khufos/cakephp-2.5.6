<?php

// $filmes = array(

//     array('Filme' => array('nome' => 'Avengers', 'ano' => '2019', 'duracao' => '5.0', 'idioma' => 'Ingles')),
//     array('Filme' => array('nome' => 'Pantera ', 'ano' => '2020', 'duracao' => '10.0', 'idioma' => 'Português')),
//     array('Filme' => array('nome' => 'Sapoto', 'ano' => '2045', 'duracao' => '2.0', 'idioma' => 'Italiano')),
// );

$detalhes = array();
foreach ($filmes as $filme) {
    $view = $this->Html->link($filme['Filme']['nome'], '/filmes/view/' . $filme['Filme']['id']);
    $editLink = $this->Html->link('Alterar', array('controller' => 'filmes', 'action' => 'edit', $filme['Filme']['id']));
    $detalhes[] = array($view , $filme['Filme']['ano'], $filme['Filme']['duracao'], $filme['Filme']['idioma'], $editLink);
    
}

echo $this->Html->tag('h1', 'Filmes');


$titulos = array('Nome', 'Ano', 'Duração', 'Idioma');
$header = $this->Html->tableHeaders($titulos);
$novoBotao = $this->Html->link('Novo', '/filmes/add');

// $detalhe = array(
//     array('Avengers','2019','5:00','Ingles')
// );

$body = $this->Html->tableCells($detalhes);
echo $novoBotao;
echo $this->Html->tag('table', $header . $body);


?>


<!-- <h1>
    Filmes
</h1>

<table>
    <thead>
    <tr><th>Nome</th><th>Ano</th><th>Duração</th><th>Idioma</th></tr>
    </thead>
    <tbody>
        <tr><td>Avengers</td><td>2019</td><td>5:00</td><td>Ingles</td></tr>
    </tbody>
</table> -->