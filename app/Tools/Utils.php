<?php

namespace Tools;

/**
 * Class permettant d'utilser des methodes statiques dans les vues
 */

class Utils
{
	
	public static function priceTTC($price_ht, $tva)
    {
    	$price_ttc = ($price_ht + ($price_ht*$tva/100));
    	return $price_ttc;
    }

	public static function calculTVA($price_ttc, $price_ht)
    {
        $calcul_tva = $price_ttc - $price_ht;
        return $calcul_tva;
    }
        //pas encore operationnel 
    public static function discount($price_ht, $percent)
    {
		$discount = $price_ht *(1-($percent/100));
		return $discount;
    }


    public static function priceTTCWithDiscount($price_ht, $tva, $percent)
    {
        if($percent > 0){
            $price_ht_discount = self::discount($price_ht, $percent);
        }
        else {
            $price_ht_discount = $price_ht;
        }

        return self::priceTTC($price_ht_discount, $tva);
    }


     public static function subTotal($price_ttc, $qty)
     {
        $subTotal = $price_ttc * $qty;
        return $subTotal;
     }

}