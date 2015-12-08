<?php

namespace App\Medlab\Traits;


trait UsefulViewFunctions {

    private function createCountryList()
    {
        return [
            'Australia' => 'Australia',
            'New Zealand' => 'New Zealand'
        ];
    }

    private function createAuStateList()
    {
        return [
            '' => '',
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
            '' => '',
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
            '' => '',
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
            '' => '',
            'company' => 'Company',
            'partnership' => 'Partnership',
            'sole_enterprise_or_trade' => 'Sole Enterprise/Trade',
        ];
    }

    private function createMonthList()
    {
        return [
            '1' => 'January',
            '2' => 'February',
            '3' => 'March',
            '4' => 'April',
            '5' => 'May',
            '6' => 'June',
            '7' => 'July',
            '8' => 'August',
            '9' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
    }

    private function createYearList()
    {
        return array_combine(range(date('Y'), date('Y')+5), range(date('Y'), date('Y')+5));
    }
}