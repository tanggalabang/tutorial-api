<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;

class JobVacancyController extends Controller
{
    public function getAllJobVacancies()
    {
        $vacancies = JobVacancy::with(['jobCategory', 'availablePositions'])->get();

        return response()->json(['vacancies' => $vacancies]);
    }

    public function getJobVacancyDetail($id)
    {
        $vacancy = JobVacancy::with(['jobCategory', 'availablePositions'])->find($id);

        if (!$vacancy) {
            return response()->json(['message' => 'Job Vacancy not found'], 404);
        }

        return response()->json(['vacancy' => $vacancy]);
    }
}
