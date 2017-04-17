<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\OptionsModel;


class MarketController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function accueilSlider()
	{
    
        $accueil = new OptionsModel();
        $options = $accueil->findAll(); 
     
        $this->show('accueil_Market/accueilslider',['options'=>$options]);

	}
    
    
    public function admin()
    {
        $this->show('accueil_Market/admin'); 
    }

     public function shop()
    {
        $this->show('accueil_Market/shop'); 
    }
    
    public function client()
    {
        $this->show('accueil_Market/client'); 
    }
    
    public function mrbricolage()
    {
        $this->show('accueil_Market/mrbricolage');
    }
    
   
    
      public function carrefour()
    {
        $this->show('accueil_Market/carrefour');
    }
    
      public function intersport()
    {
        $this->show('accueil_Market/intersport');
    }
    
}

  
    
    
    
    
/*
    $viewModel = new NewsModel();
        $view = $viewModel->find($id);
        
        $params = [
            'view' => $view
        ];
        $this->show('news/newsarticle', $params);*/