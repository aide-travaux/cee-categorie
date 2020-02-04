<?php

namespace AideTravaux\CEE\Categorie;

use PHPUnit\Framework\TestCase;
use AideTravaux\CEE\Categorie\Entries;
use AideTravaux\CEE\Categorie\CeeCategorie;

class CeeCategorieTest extends TestCase
{
    /**
     * @dataProvider simulationProvider
     */
    public function testGet(int $ressources, int $compositionFoyer, string $codeRegion, ?string $expect)
    {
        $this->assertEquals(CeeCategorie::get($ressources, $compositionFoyer, $codeRegion), $expect);
    }

    public function testGetPlafondPrecarite()
    {
        $this->assertTrue(\is_int(CeeCategorie::getPlafondPrecarite(1, '11')));
        $this->assertEquals(CeeCategorie::getPlafondPrecarite(1, ''), 0);
        $this->assertEquals(CeeCategorie::getPlafondPrecarite(0, '11'), 0);
    }

    public function testGetPlafondGrandePrecarite()
    {
        $this->assertTrue(\is_int(CeeCategorie::getPlafondGrandePrecarite(1, '11')));
        $this->assertEquals(CeeCategorie::getPlafondGrandePrecarite(1, ''), 0);
        $this->assertEquals(CeeCategorie::getPlafondGrandePrecarite(0, '11'), 0);
    }

    public function simulationProvider()
    {
        return [
            [24918, 1, '11', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [36572, 2, '11', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [43924, 3, '11', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [51289, 4, '11', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [58674, 5, '11', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [58674 + 7377, 6, '11', Entries::CATEGORIES_CEE['categorie_cee_1']],

            [24918 - 1, 1, '11', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [36572 - 1, 2, '11', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [43924 - 1, 3, '11', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [51289 - 1, 4, '11', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [58674 - 1, 5, '11', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [58674 + 7377 - 1, 6, '11', Entries::CATEGORIES_CEE['categorie_cee_2']],

            [20470 -1, 1, '11', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [30044 -1, 2, '11', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [36080 -1, 3, '11', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [42128 -1, 4, '11', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [48198 -1, 5, '11', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [48198 + 6059 -1, 6, '11', Entries::CATEGORIES_CEE['categorie_cee_3']],

            [18960, 1, '02', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [27729, 2, '02', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [33346, 3, '02', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [38958, 4, '02', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [44592, 5, '02', Entries::CATEGORIES_CEE['categorie_cee_1']],
            [44592 + 5617, 6, '02', Entries::CATEGORIES_CEE['categorie_cee_1']],

            [18960 - 1, 1, '02', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [27729 - 1, 2, '02', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [33346 - 1, 3, '02', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [38958 - 1, 4, '02', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [44592 - 1, 5, '02', Entries::CATEGORIES_CEE['categorie_cee_2']],
            [44592 + 5617 - 1, 6, '02', Entries::CATEGORIES_CEE['categorie_cee_2']],

            [14790 -1, 1, '02', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [21630 -1, 2, '02', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [26013 -1, 3, '02', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [30389 -1, 4, '02', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [34784 -1, 5, '02', Entries::CATEGORIES_CEE['categorie_cee_3']],
            [34784 + 4385 -1, 6, '02', Entries::CATEGORIES_CEE['categorie_cee_3']],

            [0, 0, 'CODE', null]
        ];
    }

}
