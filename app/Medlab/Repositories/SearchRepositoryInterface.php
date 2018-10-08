<?php
namespace App\Medlab\Repositories;


interface SearchRepositoryInterface
{
    //
    // Search Company and Practitioner
    //
    public function searchCompany($request);
    public function searchPractitioner($request);
}