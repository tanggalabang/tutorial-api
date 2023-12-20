<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller
{
    public function applyForJob(Request $request)
    {
        $request->validate([
            'vacancy_id' => 'required|integer|exists:job_vacancies,id',
            'positions' => 'required|array',
            'positions.*' => 'string',
            'notes' => 'sometimes|string'
        ]);

        $society = Auth::user(); // Assuming you're using default auth guard

        // Example logic for creating a job application
        $application = JobApplication::create([
            'society_id' => $society->id,
            'job_vacancy_id' => $request->vacancy_id,
            'positions' => implode(',', $request->positions), // Adjust based on your schema
            'notes' => $request->notes
        ]);

        return response()->json(['message' => 'Applying for job successful', 'application' => $application], 200);
    }

    /**
     * Get all job applications of the authenticated society.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllSocietyJobApplications(Request $request)
    {
        $society = Auth::user();

        $applications = JobApplication::where('society_id', $society->id)->get();

        return response()->json(['vacancies' => $applications], 200);
    }
}
