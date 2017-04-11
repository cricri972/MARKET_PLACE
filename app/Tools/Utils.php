<?php

namespace Tools;

/**
 * Class permettant d'utilser des methodes statiques dans les vues
 */

class Utils
{
	
	public static function priceTTC($price_ht, $tva)
    {
		$pricettc = $price_ht + ($price_ht*$tva/100);
		return $pricettc;
    }

	public static function calculTVA($price_ht, $tva)
    {
        $calcultva = ($price_ht*$tva/100);
        return $calcultva;
    }
        //pas encore operationnel 
    public static function discount($discount)
    {
		$pricettc = $price_ht + ($price_ht*$tva/100);
		return $pricettc;
    }


}