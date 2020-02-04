<?php

namespace AideTravaux\CEE\Categorie;

abstract class CeeCategorie
{
    /**
     * @param int Ressources du foyer
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return null|string
     */
    public static function get(int $ressources, int $compositionFoyer, string $codeRegion): ?string
    {
        if (!in_array($codeRegion, Entries::CODES_REGION) || !$compositionFoyer) {
            return null;
        }

        switch ($codeRegion) {
            case '11':
                switch ($compositionFoyer) {
                    case 1:
                        if ($ressources < 20470) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 24918) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 2:
                        if ($ressources < 30044) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 36572) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 3:
                        if ($ressources < 36080) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 43924) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 4:
                        if ($ressources < 42128) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 51289) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 5:
                        if ($ressources < 48198) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 58674) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    default:
                        if ($ressources < 48198 + ($compositionFoyer - 5) * 6059) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 58674 + ($compositionFoyer - 5) * 7377) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                }
                return Entries::CATEGORIES_CEE['categorie_cee_1'];
            
            default:
                switch ($compositionFoyer) {
                    case 1:
                        if ($ressources < 14790) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 18960) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 2:
                        if ($ressources < 21630) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 27729) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 3:
                        if ($ressources < 26013) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 33346) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 4:
                        if ($ressources < 30389) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 38958) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    case 5:
                        if ($ressources < 34784) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 44592) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                        break;
                    default:
                        if ($ressources < 34784 + ($compositionFoyer - 5) * 4385) {
                            return Entries::CATEGORIES_CEE['categorie_cee_3'];
                        } else if ($ressources < 44592 + ($compositionFoyer - 5) * 5617) {
                            return Entries::CATEGORIES_CEE['categorie_cee_2'];
                        }
                }
                return Entries::CATEGORIES_CEE['categorie_cee_1'];
        }
    }

    /**
     * Retourne le plafond de ressource de la catégorie "Précarité énergétique"
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return int
     */
    public static function getPlafondPrecarite(int $compositionFoyer, string $codeRegion): int
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

    /**
     * Retourne le plafond de ressource de la catégorie "Grande précarité énergétique"
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return int
     */
    public static function getPlafondGrandePrecarite(int $compositionFoyer, string $codeRegion): int
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
