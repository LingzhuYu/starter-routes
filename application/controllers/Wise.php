<?php

class Wise extends Application{
    
    function __construct()
    {
            parent::__construct();
    }
    
    public function bingo(){
         // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);

        $this->render();
    }
    
}
