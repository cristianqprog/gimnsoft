<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Vistas Controller
 *
 */
class VistasController extends AppController
{
	public function home(){
		
	}

	public function menuGral(){
		
	}
	public function email(){
		 if ($this->request->is('post')) {
		 $name=$this->request->getData('name');
		 $lastname=$this->request->getData('lastname');
		 $emaill=$this->request->getData('email');
		 $text=$this->request->getData('text');
			$email = new Email('gmail');
			$email->from([$emaill])
			    ->to('cristianquevedocjs@gmail.com')
			    ->subject($name)
			    ->send($text);

		 return $this->redirect(['action' => 'home', 'mensaje' => 'OK']);
			    

		 }
		
	}
}
