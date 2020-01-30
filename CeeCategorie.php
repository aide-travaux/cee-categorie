<?php

namespace AideTravaux\Cee\Categorie;

use AideTravaux\Core\Data\Entries;

class CeeCategorie
{
    /**
     * Liste des codes région
     */
    const CODES_REGION = [
        "01", "02", "03", "04", "06", "11", "24", "27", "28",
        "32", "44", "52", "53", "75", "76", "84", "93", "94"
    ];

    /**
     * 
     * @param int Ressources du foyer
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return null|string
     */
    public static function get(int $income, int $household, string $codeRegion): string
    {
        self::validateHousehold($household);
        self::validateCode($codeRegion);

        switch ($codeRegion) {
            case '11':
                switch ($household) {
                    case 1:
                        if ($income < 20470) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 24918) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 2:
                        if ($income < 30044) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 36572) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 3:
                        if ($income < 36080) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 43924) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 4:
                        if ($income < 42128) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 51289) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 5:
                        if ($income < 48198) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 58674) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    default:
                        if ($income < 48198 + ($household - 5) * 6059) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 58674 + ($household - 5) * 7377) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                }
                return Entries::CEE_CATEGORIES['cee_category_1'];
            
            default:
                switch ($household) {
                    case 1:
                        if ($income < 14790) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 18960) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 2:
                        if ($income < 21630) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 27729) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 3:
                        if ($income < 26013) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 33346) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 4:
                        if ($income < 30389) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 38958) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    case 5:
                        if ($income < 34784) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 44592) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                        break;
                    default:
                        if ($income < 34784 + ($household - 5) * 4385) {
                            return Entries::CEE_CATEGORIES['cee_category_3'];
                        } else if ($income < 44592 + ($household - 5) * 5617) {
                            return Entries::CEE_CATEGORIES['cee_category_2'];
                        }
                }
                return Entries::CEE_CATEGORIES['cee_category_1'];
        }
    }

    private static function validateCode(string $codeRegion)
    {
        if (!\in_array($codeRegion, self::CODES_REGION)) {
            throw new \Exception("Invalid code region value");
        }
    }

    private static function validateHousehold(int $household)
    {
        if (!$household) {
            throw new \Exception("Invalid household value");
        }
    }
}
