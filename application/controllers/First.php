<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author lizewu
 */
class First extends Application{
    //put your code here
    function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
            // this is the view we want shown
            $this->data['pagebody'] = 'justone';

            // build the list of authors, to pass on to our view
            $source = $this->quotes->first();
            $this->data = array_merge($this->data, $source);


            $this->render();
	}
        
        public function zzz(){
            $this->data['pagebody'] = 'justone';

            // build the list of authors, to pass on to our view
            $source = $this->quotes->first();
            $this->data = array_merge($this->data, $source);


            $this->render();
            
        }
        
        public function gimme($id){
            // this is the view we want shown
            $this->data['pagebody'] = 'justone';

            // build the list of authors, to pass on to our view
            $source = $this->quotes->get(3);

            $this->data = array_merge($this->data, $source);
            $this->render();
        }
}
