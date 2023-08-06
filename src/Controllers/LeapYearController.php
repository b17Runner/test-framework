<?php

namespace App\Controllers;

use App\Models\LeapYear;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class LeapYearController
{
    private LeapYear $model;

    public function __construct(LeapYear $model)
    {
        $this->model = $model;
    }

    public function index(int $year): JsonResponse
    {
        if ($this->model->isLeapYear($year)) {
            return new JsonResponse('Yep, this is a leap year!');
        }

        return new JsonResponse('Nope, this is not a leap year.');
    }
}