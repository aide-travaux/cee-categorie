<?php

namespace AideTravaux\CEE\Categorie;

use AideTravaux\CEE\Categorie\Utils\HelperCategorie;
use AideTravaux\CEE\Categorie\Utils\HelperFractionClassique;
use AideTravaux\CEE\Categorie\Utils\HelperFractionGrandePrecarite;
use AideTravaux\CEE\Categorie\Utils\HelperFractionPrecarite;
use AideTravaux\CEE\Categorie\Utils\HelperPlafondGrandePrecarite;
use AideTravaux\CEE\Categorie\Utils\HelperPlafondPrecarite;

abstract class CeeCategorie
{
    /**
     * @param int
     * @param int
     * @param string
     * @return null|string
     */
    public static function get(int $ressources, int $compositionFoyer, string $codeRegion): ?string
    {
        return HelperCategorie::get($ressources, $compositionFoyer, $codeRegion);
    }

    /**
     * Retourne le plafond de ressource de la catégorie "Précarité énergétique"
     * @param int
     * @param string
     * @return int
     */
    public static function getPlafondPrecarite(int $compositionFoyer, string $codeRegion): int
    {
        return HelperPlafondPrecarite::get($compositionFoyer, $codeRegion);
    }

    /**
     * Retourne le plafond de ressource de la catégorie "Grande précarité énergétique"
     * @param int
     * @param string
     * @return int
     */
    public static function getPlafondGrandePrecarite(int $compositionFoyer, string $codeRegion): int
    {
        return HelperPlafondGrandePrecarite::get($compositionFoyer, $codeRegion);
    }

    /**
     * Retourne la fraction du volume de certificats d'économies d'énergie "Classique"
     * @param string 
     * @param string
     * @return float
     */
    public static function getFractionCeeClassique(string $categorieCee, string $codeDepartement): float
    {
        return HelperFractionClassique::get($categorieCee, $codeDepartement);
    }

    /**
     * Retourne la fraction du volume de certificats d'économies d'énergie "Précarité"
     * @param string 
     * @param string
     * @return float
     */
    public static function getFractionCeePrecarite(string $categorieCee, string $codeDepartement): float
    {
        return HelperFractionPrecarite::get($categorieCee, $codeDepartement);
    }

    /**
     * Retourne la fraction du volume de certificats d'économies d'énergie "Grande précarité"
     * @param string 
     * @param string
     * @return float
     */
    public static function getFractionCeeGrandePrecarite(string $categorieCee, string $codeDepartement): float
    {
        return HelperFractionGrandePrecarite::get($categorieCee, $codeDepartement);
    }

}
