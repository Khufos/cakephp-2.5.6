<?php

class FilmesController extends AppController
{
    public function index()
    {

        // $filmes = array(

        //     array('Filme' => array('nome' => 'Avengers', 'ano' => '2019', 'duracao' => '5.0', 'idioma' => 'Ingles')),
        //     array('Filme' => array('nome' => 'Pantera ', 'ano' => '2020', 'duracao' => '10.0', 'idioma' => 'Português')),
        //     array('Filme' => array('nome' => 'Sapoto', 'ano' => '2045', 'duracao' => '2.0', 'idioma' => 'Italiano')),
        // );

        $filmes = $this->Filme->find('all');
        $this->set(compact('filmes'));
    }
}
