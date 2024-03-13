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
        $fields = array('Filme.nome', 'Filme.ano');
        $order = array('Filme.nome' => 'desc');
        $filmes = $this->Filme->find('all', compact('first', 'order'));

        $this->set(compact('filmes'));
    }

    public function add()
    {
        if (!empty($this->request->data)) {
            $this->Filme->create();
            if ($this->Filme->save($this->request->data)) {
                // Correção na definição da mensagem flash
                $this->Session->setFlash('Filme gravado com sucesso!');

                // Correção no redirecionamento para a ação 'index' deste controller
                $this->redirect(array('action' => 'index'));
            }
        }
    }


    public function edit($id = null) {

        if (!empty($this->request->data)) {
            $this->Filme->create();
            if ($this->Filme->save($this->request->data)) {
                // Correção na definição da mensagem flash
                $this->Session->setFlash('Filme alterado com sucesso!');

                // Correção no redirecionamento para a ação 'index' deste controller
                $this->redirect(array('action' => 'index'));
            }
        }else{
            $fields = array('Filme.id','Filme.nome','Filme.duracao','Filme.idioma','Filme.ano');
            $conditions = array('Filme.id'=>$id);
            $this->request->data =$this->Filme->find('first', compact('fields','conditions'));
        }


    }



    public function view($id=null){

        $fields = array('Filme.id','Filme.nome','Filme.duracao','Filme.idioma','Filme.ano');
        $conditions = array('Filme.id'=>$id);
        $this->request->data =$this->Filme->find('first', compact('fields','conditions'));
    }
}
