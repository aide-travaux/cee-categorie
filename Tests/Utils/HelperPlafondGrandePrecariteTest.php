<?php

namespace AideTravaux\CEE\Categorie\Test;

use PHPUnit\Framework\TestCase;
use AideTravaux\CEE\Categorie\Entries;
use AideTravaux\CEE\Categorie\Utils\HelperCategorie;
use AideTravaux\CEE\Categorie\Utils\HelperPlafondGrandePrecarite;

class HelperPlafondGrandePrecariteTest extends TestCase
{
    public function testGetFailed()
    {
        $this->assertEquals(HelperPlafondGrandePrecarite::get(1, ''), 0);
        $this->assertEquals(HelperPlafondGrandePrecarite::get(0, '11'), 0);
    }

    /**
     * @dataProvider simulationProvider
     */
    public function testGet($codeRegion, $compositionMenage)
    {
        $limit = HelperPlafondGrandePrecarite::get($compositionMenage, $codeRegion);

        $this->assertEquals(
            HelperCategorie::get($limit, $compositionMenage, $codeRegion),
            Entries::CATEGORIES_CEE['categorie_cee_2']
        );
        $this->assertEquals(
            HelperCategorie::get($limit - 1, $compositionMenage, $codeRegion),
            Entries::CATEGORIES_CEE['categorie_cee_3']
        );
    }

    public function simulationProvider()
    {
        return [
            ['11', 1],
            ['11', 2],
            ['11', 3],
            ['11', 4],
            ['11', 5],
            ['11', 6],
            ['01', 1],
            ['01', 2],
            ['01', 3],
            ['01', 4],
            ['01', 5],
            ['01', 6]
        ];
    }
}
