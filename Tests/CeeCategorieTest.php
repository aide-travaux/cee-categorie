<?php

namespace AideTravaux\CEE\Categorie\Test;

use PHPUnit\Framework\TestCase;
use AideTravaux\CEE\Categorie\Data\Entries;
use AideTravaux\CEE\Categorie\CeeCategorie;
use AideTravaux\CEE\Categorie\Utils\HelperCategorie;
use AideTravaux\CEE\Categorie\Utils\HelperFractionClassique;
use AideTravaux\CEE\Categorie\Utils\HelperFractionGrandePrecarite;
use AideTravaux\CEE\Categorie\Utils\HelperFractionPrecarite;
use AideTravaux\CEE\Categorie\Utils\HelperPlafondGrandePrecarite;
use AideTravaux\CEE\Categorie\Utils\HelperPlafondPrecarite;

class CeeCategorieTest extends TestCase
{
    /**
     * @dataProvider dataProvier
     */
    public function testGet($ressources, $composition, $codeRegion)
    {
        $this->assertEquals(
            CeeCategorie::get($ressources, $composition, $codeRegion),
            HelperCategorie::get($ressources, $composition, $codeRegion)
        );
    }

    /**
     * @dataProvider dataProvier
     */
    public function testGetPlafondPrecarite($ressources, $composition, $codeRegion)
    {
        $this->assertEquals(
            CeeCategorie::getPlafondPrecarite($ressources, $composition, $codeRegion),
            HelperPlafondPrecarite::get($ressources, $composition, $codeRegion)
        );
    }

    /**
     * @dataProvider dataProvier
     */
    public function testGetPlafondGrandePrecarite($ressources, $composition, $codeRegion)
    {
        $this->assertEquals(
            CeeCategorie::getPlafondGrandePrecarite($ressources, $composition, $codeRegion),
            HelperPlafondGrandePrecarite::get($ressources, $composition, $codeRegion)
        );
    }

    /**
     * @dataProvider dataProvier
     */
    public function testGetFractionCeeClassique($ressources, $composition, $codeRegion)
    {
        $categorieCee = CeeCategorie::get($ressources, $composition, $codeRegion);
        $codeDepartement = (string) \rand( 0, 9 ) . \rand( 1, 5);

        $this->assertEquals(
            CeeCategorie::getFractionCeeClassique($categorieCee, $codeDepartement),
            HelperFractionClassique::get($categorieCee, $codeDepartement)
        );
    }

    /**
     * @dataProvider dataProvier
     */
    public function testGetFractionCeePrecarite($ressources, $composition, $codeRegion)
    {
        $categorieCee = CeeCategorie::get($ressources, $composition, $codeRegion);
        $codeDepartement = (string) \rand( 0, 9 ) . \rand( 1, 5);

        $this->assertEquals(
            CeeCategorie::getFractionCeePrecarite($categorieCee, $codeDepartement),
            HelperFractionPrecarite::get($categorieCee, $codeDepartement)
        );
    }

    /**
     * @dataProvider dataProvier
     */
    public function testGetFractionCeeGrandePrecarite($ressources, $composition, $codeRegion)
    {
        $categorieCee = CeeCategorie::get($ressources, $composition, $codeRegion);
        $codeDepartement = (string) \rand( 0, 9 ) . \rand( 1, 5);

        $this->assertEquals(
            CeeCategorie::getFractionCeeGrandePrecarite($categorieCee, $codeDepartement),
            HelperFractionGrandePrecarite::get($categorieCee, $codeDepartement)
        );
    }
    
    public function dataProvier()
    {
        return [
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ],
            [ (float) \rand( 0, 100000 ), \rand( 1, 10 ), Entries::CODES_REGION[\rand( 0, 17 )] ]
        ];
    }

}
