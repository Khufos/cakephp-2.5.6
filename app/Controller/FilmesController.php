<?php

class FilmesController extends AppController
{
    
    
    public $layout = 'bootstrap';
    public $paginate = array(
       
        'fields' => array('Filme.nome','Filme.ano','Genero.nome','Filme.duracao','Filme.idioma'),
        'conditions' =>array(),
        'limit'=>10,
        'order' => array('Filme.nome' => 'asc')
    );

    
    public function index()
    {   
        
        // $fields = array('Filme.nome', 'Filme.ano','Genero.nome');
        // $order = array('Filme.nome' => 'desc');
        // $filmes = $this->Filme->find('all', compact('first', 'order'));

        if($this->request->is('post') && !empty($this->request->data['Filme']['nome'])){
        
            $this->paginate['conditions']['Filme.nome'] = $this->request->data['Filme']['nome'];
        }
        $filmes = $this->paginate();
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
        $fields = array('Genero.id','Genero.nome');
        $generos = $this->Filme->Genero->find('list', compact('fields'));
        $this->set('generos', $generos);
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
            $fields = array('Filme.id','Filme.nome','Filme.duracao','Filme.idioma','Filme.ano','Filme.genero_id');
            $conditions = array('Filme.id'=>$id);
            $this->request->data =$this->Filme->find('first', compact('fields','conditions'));
        }
        $fields = array('Genero.id','Genero.nome');
        $generos = $this->Filme->Genero->find('list', compact('fields'));
        $this->set('generos', $generos);

    }



    public function view($id=null){

        $fields = array('Filme.id','Filme.nome','Filme.duracao','Filme.idioma','Filme.ano');
        $conditions = array('Filme.id'=>$id);
        $this->request->data =$this->Filme->find('first', compact('fields','conditions'));
    }



    public function delete($id) {
        $this->Filme->delete($id);
        $this->redirect('/filmes');


	}
}
