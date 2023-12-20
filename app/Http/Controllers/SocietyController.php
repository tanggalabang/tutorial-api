<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validation;

class SocietyController extends Controller
{

    public function requestDataValidation(Request $request)
    {
        $society = $request->attributes->get('authenticatedSociety');

        if (Validation::where('society_id', $society->id)->exists()) {
            return response()->json(['message' => 'Validation request already exists.'], 400);
        }

        Validation::create(array_merge($request->only(['job_category_id', 'work_experience', 'job_position', 'reason_accepted']), [
            'society_id' => $society->id,
            'status' => 'pending'
        ]));

        return response()->json(['message' => 'Validation request sent successfully'], 200);
    }

    public function getSocietyDataValidation(Request $request)
    {
        $society = $request->attributes->get('authenticatedSociety');

        $validation = Validation::with('validator')
            ->where('society_id', $society->id)
            ->first();

        if (!$validation) {
            return response()->json(['message' => 'No validation data found.'], 404);
        }

        $response = $validation->toArray() + [
            'validator' => $validation->validator ? $validation->validator->only(['id', 'name']) : null
        ];

        return response()->json(['validation' => $response], 200);
    }

    public function requestDataValidation1(Request $request)
    {
        // Validate the request data
        // $request->validate([
        //     'work_experience' => 'required|string',
        //     'job_category_id' => 'required|exists:job_categories,id',
        //     'job_position' => 'required|string',
        //     'reason_accepted' => 'required|string'
        // ]);

        // Get data the authenticated society
        // $society = Auth::user();
        $society = $request->attributes->get('authenticatedSociety');


        // Check if a validation request already exists
        $existingValidation = Validation::where('society_id', $society->id)->first();
        if ($existingValidation) {
            return response()->json(['message' => 'You have already made a validation request.'], 400);
        }

        // Create a new validation request
        Validation::create([
            'society_id' => $society->id,
            'job_category_id' => $request->job_category_id,
            'work_experience' => $request->work_experience,
            'job_position' => $request->job_position,
            'reason_accepted' => $request->reason_accepted,
            'status' => 'pending' // default status
        ]);

        return response()->json(['message' => 'Request data validation sent successful'], 200);
    }

    public function getSocietyDataValidation1(Request $request)
    {
        // Get the authenticated society
        // $society = Auth::user();
        $society = $request->attributes->get('authenticatedSociety');

        // Retrieve the validation data along with job category and validator
        $validation = Validation::with(['validator'])
            ->where('society_id', $society->id)
            ->first();

        if (!$validation) {
            return response()->json(['message' => 'No validation data found.'], 404);
        }

        // Format the response
        $response = [
            'id' => $validation->id,
            'status' => $validation->status,
            'work_experience' => $validation->work_experience,
            'job_category_id' => $validation->job_category_id,
            'job_position' => $validation->job_position,
            'reason_accepted' => $validation->reason_accepted,
            'validator_notes' => $validation->validator_notes,
            'validator' => $validation->validator ? [
                // Include the desired fields from the validator
                'id' => $validation->validator->id,
                'name' => $validation->validator->name,
                // Add other fields you need from the validator
            ] : null
        ];

        return response()->json(['validation' => $response], 200);
    }
}
