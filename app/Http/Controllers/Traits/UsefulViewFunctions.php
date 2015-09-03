<?php

namespace App\Http\Controllers\Traits;


trait UsefulViewFunctions {

    private function createAuStateList()
    {
        return [
            'ACT' => 'ACT',
            'NSW' => 'NSW',
            'NT' => 'NT',
            'QLD' => 'QLD',
            'SA' => 'SA',
            'TAS' => 'TAS',
            'VIC' => 'VIC',
            'WA' => 'WA'
        ];
    }

    private function createNzRegionList()
    {
        return [
            'Northland' => 'Northland',
            'Auckland' => 'Auckland',
            'Waikato' => 'Waikato',
            'Bay of Plenty' => 'Bay of Plenty',
            'Gisborne' => 'Gisborne',
            "Hawke's Bay" => "Hawke's Bay",
            'Taranaki' => 'Taranaki',
            'Manawatu-Wanganui' => 'Manawatu-Wanganui',
            'Wellington' => 'Wellington',
            'Tasman' => 'Tasman',
            'Nelson' => 'Nelson',
            'Marlborough' => 'Marlborough',
            'West Coast' => 'West Coast',
            'Canterbury' => 'Canterbury',
            'Otago' => 'Otago',
            'Southland' => 'Southland'
        ];
    }

    private function createTitleList()
    {
        return [
            'Mr' => 'Mr',
            'Ms' => 'Ms',
            'Miss' => 'Miss',
            'Dr.' => 'Dr.',
            'Prof.' => 'Prof.',
        ];
    }

    private function createBusinessTypeList()
    {
        return [
            'company' => 'Company',
            'partnership' => 'Partnership',
            'sole_enterprise_or_trade' => 'Sole Enterprise/Trade',
        ];
    }
}