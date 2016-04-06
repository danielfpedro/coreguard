<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;

/**
 * HomePage Controller
 *
 * @property \App\Model\Table\HomePageTable $HomePage
 */
class HomePageController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('home_page');
    }
    public function home()
    {
    	$sliderConfig = [
    		'slideDuration' => 20000
    	];

    	$this->set(compact('sliderConfig'));
    }
}
