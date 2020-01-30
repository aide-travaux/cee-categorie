<?php

namespace AideTravaux\Cee\Categorie\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\Core\Data\Entries;
use AideTravaux\Cee\Categorie\CeeCategorie;

class CeeCategorieTest extends TestCase
{
    public function testInvalidHousehold()
    {
        $this->expectException(\Exception::class);
        CeeCategorie::get(1, 0, '01');
    }

    public function testInvalidCodeRegion()
    {
        $this->expectException(\Exception::class);
        CeeCategorie::get(1, 1, 'CODE');
    }

    /**
     * @dataProvider simulationProvider
     */
    public function testSimulation(int $income, int $household, string $codeRegion, string $expect)
    {
        $this->assertEquals(CeeCategorie::get($income, $household, $codeRegion), $expect);
    }

    public function simulationProvider()
    {
        return [
            [24918, 1, '11', Entries::CEE_CATEGORIES['cee_category_1']],
            [36572, 2, '11', Entries::CEE_CATEGORIES['cee_category_1']],
            [43924, 3, '11', Entries::CEE_CATEGORIES['cee_category_1']],
            [51289, 4, '11', Entries::CEE_CATEGORIES['cee_category_1']],
            [58674, 5, '11', Entries::CEE_CATEGORIES['cee_category_1']],
            [58674 + 7377, 6, '11', Entries::CEE_CATEGORIES['cee_category_1']],

            [24918 - 1, 1, '11', Entries::CEE_CATEGORIES['cee_category_2']],
            [36572 - 1, 2, '11', Entries::CEE_CATEGORIES['cee_category_2']],
            [43924 - 1, 3, '11', Entries::CEE_CATEGORIES['cee_category_2']],
            [51289 - 1, 4, '11', Entries::CEE_CATEGORIES['cee_category_2']],
            [58674 - 1, 5, '11', Entries::CEE_CATEGORIES['cee_category_2']],
            [58674 + 7377 - 1, 6, '11', Entries::CEE_CATEGORIES['cee_category_2']],

            [20470 -1, 1, '11', Entries::CEE_CATEGORIES['cee_category_3']],
            [30044 -1, 2, '11', Entries::CEE_CATEGORIES['cee_category_3']],
            [36080 -1, 3, '11', Entries::CEE_CATEGORIES['cee_category_3']],
            [42128 -1, 4, '11', Entries::CEE_CATEGORIES['cee_category_3']],
            [48198 -1, 5, '11', Entries::CEE_CATEGORIES['cee_category_3']],
            [48198 + 6059 -1, 6, '11', Entries::CEE_CATEGORIES['cee_category_3']],

            [18960, 1, '02', Entries::CEE_CATEGORIES['cee_category_1']],
            [27729, 2, '02', Entries::CEE_CATEGORIES['cee_category_1']],
            [33346, 3, '02', Entries::CEE_CATEGORIES['cee_category_1']],
            [38958, 4, '02', Entries::CEE_CATEGORIES['cee_category_1']],
            [44592, 5, '02', Entries::CEE_CATEGORIES['cee_category_1']],
            [44592 + 5617, 6, '02', Entries::CEE_CATEGORIES['cee_category_1']],

            [18960 - 1, 1, '02', Entries::CEE_CATEGORIES['cee_category_2']],
            [27729 - 1, 2, '02', Entries::CEE_CATEGORIES['cee_category_2']],
            [33346 - 1, 3, '02', Entries::CEE_CATEGORIES['cee_category_2']],
            [38958 - 1, 4, '02', Entries::CEE_CATEGORIES['cee_category_2']],
            [44592 - 1, 5, '02', Entries::CEE_CATEGORIES['cee_category_2']],
            [44592 + 5617 - 1, 6, '02', Entries::CEE_CATEGORIES['cee_category_2']],

            [14790 -1, 1, '02', Entries::CEE_CATEGORIES['cee_category_3']],
            [21630 -1, 2, '02', Entries::CEE_CATEGORIES['cee_category_3']],
            [26013 -1, 3, '02', Entries::CEE_CATEGORIES['cee_category_3']],
            [30389 -1, 4, '02', Entries::CEE_CATEGORIES['cee_category_3']],
            [34784 -1, 5, '02', Entries::CEE_CATEGORIES['cee_category_3']],
            [34784 + 4385 -1, 6, '02', Entries::CEE_CATEGORIES['cee_category_3']]
        ];
    }

}
