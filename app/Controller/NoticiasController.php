<?php

class NoticiasController extends AppController
{


    public function index()
    {


        $categorias = $this->Noticia->Categoria->find(
            "list",
            array(
                "fields" => array(
                    "id",
                    "nome"
                ),
                "order" => "nome ASC"
                )

        );
       
        $this->set(compact("categorias"));
     


        if ($this->request->is('post')) {
            if ($this->Noticia->save($this->data)) {
                $this->Session->setFlash("Noticia cadastrada com sucesso.");
                $this->redirect(array("Controller" => "noticias", "action => index"));
            } else {
                $this->Session->setFlash("Error, noticia não cadastrada");
            }
        }
    }
}
