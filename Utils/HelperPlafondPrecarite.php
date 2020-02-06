<?php

namespace AideTravaux\CEE\Categorie\Utils;

use AideTravaux\CEE\Categorie\Data\Entries;

abstract class HelperPlafondPrecarite
{
    /**
     * Retourne le plafond de ressource de la catégorie "Précarité énergétique"
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
                        return 24918;
                    case 2:
                        return 36572;
                    case 3:
                        return 43924;
                    case 4:
                        return 51289;
                    case 5:
                        return 58674;
                    default:
                        return 58674 + ($compositionFoyer - 5) * 7377;
                }
            
            default:
                switch ($compositionFoyer) {
                    case 1:
                        return 18960;
                    case 2:
                        return 27729;
                    case 3:
                        return 33346;
                    case 4:
                        return 38958;
                    case 5:
                        return 44592;
                    default:
                        return 44592 + ($compositionFoyer - 5) * 5617;
                }
        }
    }
}