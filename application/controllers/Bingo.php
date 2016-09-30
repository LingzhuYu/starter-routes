<?php

class Bingo extends Application{
    
    function __construct()
    {
            parent::__construct();
    }
    
    public function index(){
         // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);

        $this->data = array_merge($this->data, $source);
        $this->render();
    }
    
}
