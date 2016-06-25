<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class HeloController extends AppController
{
    public function index()
    {
 
	 $str = $this->request->data('radio');
        if ($str != null){
            $str = $this->request->data['radio'];
            $this->set('message', 'you typed:' . $str);
        } else {
            $this->set('message','please type...');
        }

	$text = $this->request->data('select');
 	$this->set('text',$text);


	$text2 = $this->request->data('select2');
 	$this->set('text2',$text2);




    }
}