<?php

namespace AideTravaux\CEE\Categorie\Data;

abstract class Entries
{
    /**
     * @property array
     */
    const CODES_REGION = [
        '01', '02', '03', '04', '06', '11', '24', '27', '28',
        '32', '44', '52', '53', '75', '76', '84', '93', '94'
    ];

    /**
     * @property array
     */
    const CATEGORIES_CEE = [
        'categorie_cee_1' => 'Classique',
        'categorie_cee_2' => 'Précarité énergétique',
        'categorie_cee_3' => 'Grande précarité énergétique'
    ];
}
