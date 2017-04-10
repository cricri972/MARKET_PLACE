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

}

/*
    $viewModel = new NewsModel();
        $view = $viewModel->find($id);
        
        $params = [
            'view' => $view
        ];
        $this->show('news/newsarticle', $params);*/