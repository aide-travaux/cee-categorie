<?php

namespace AideTravaux\CEE\Categorie\Utils;

use AideTravaux\CEE\Categorie\Data\Entries;

abstract class HelperPlafondGrandePrecarite
{
    /**
     * Retourne le plafond de ressource de la catégorie "Grande précarité énergétique"
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return int
     */
    public static function get(int $compositionFoyer, string $codeRegion): int
    {
        if (!in_array($codeRegion, Entries::CODES_REGION) || !$compositionFoyer) {
            return 0;
        }

        switch ($codeRegion) {
            case '11':
                switch ($compositionFoyer) {
                    case 1:
                        return 20470;
                    case 2:
                        return 30044;
                    case 3:
                        return 36080;
                    case 4:
                        return 42128;
                    case 5:
                        return 48198;
                    default:
                        return 48198 + ($compositionFoyer - 5) * 6059;
                }
            
            default:
                switch ($compositionFoyer) {
                    case 1:
                        return 14790;
                    case 2:
                        return 21630;
                    case 3:
                        return 26013;
                    case 4:
                        return 30389;
                    case 5:
                        return 34784;
                    default:
                        return 34784 + ($compositionFoyer - 5) * 4385;
                }
        }
    }
}
