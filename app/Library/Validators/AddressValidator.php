<?php

namespace App\Library\Validators;


class AddressValidator
{
    public function validCountry($attribute, $value, $parameters)
    {
        $country = $this->createCountryList();

        $isValid = false;

        if (array_key_exists($value, $country)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validCountryError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Country';
    }

    public function validState($attribute, $value, $parameters)
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();

        $isValid = false;

        if (array_key_exists($value, $auState)) {
            $isValid = true;
        }

        if (array_key_exists($value, $nzRegion)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validStateError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid State';
    }

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

    private function createCountryList() {

        return [
            'AU' => 'AU',
            'NZ' => 'NZ'
        ];
    }
}