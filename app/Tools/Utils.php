<?php

namespace Tools;

/**
 * Class permettant d'utilser des methodes statiques dans les vues
 */

class Utils
{
	
	public static function prixTTC($prixht, $tva)
    {
		$prixttc = $prixht + ($prixht*$tva/100);
		return $prixttc;
    }

	public static function calculTVA($prixht, $tva)
    {
        $diftva = ($prixht*$tva/100);
        return $diftva;
    }


}