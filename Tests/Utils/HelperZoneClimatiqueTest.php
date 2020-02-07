<?php

namespace AideTravaux\CEE\Categorie\Test\Utils;

use PHPUnit\Framework\TestCase;
use AideTravaux\CEE\Categorie\Data\Entries;
use AideTravaux\CEE\Categorie\Utils\HelperZoneClimatique;

class HelperZoneClimatiqueTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testGet($codeDepartement, $expect)
    {
        $this->assertEquals(HelperZoneClimatique::get($codeDepartement), $expect);
    }

    public function dataProvider()
    {
        return \array_merge(
            \array_map(function($row) {
                return [ $row, Entries::ZONES_CLIMATIQUES['zone_climatique_1'] ];
            }, HelperZoneClimatique::ZONES_CLIMATIQUES['H1']),
            \array_map(function($row) {
                return [ $row, Entries::ZONES_CLIMATIQUES['zone_climatique_2'] ];
            }, HelperZoneClimatique::ZONES_CLIMATIQUES['H2']),
            \array_map(function($row) {
                return [ $row, Entries::ZONES_CLIMATIQUES['zone_climatique_3'] ];
            }, HelperZoneClimatique::ZONES_CLIMATIQUES['H3'])
        );
    }

}
