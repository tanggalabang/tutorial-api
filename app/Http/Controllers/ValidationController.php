<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Society; // Import your Society model

class ValidationController extends Controller
{
    public function validation(Request $request)
    {
        $token = $request->input('token');

        // Find the user based on the token
        $user = Society::where('login_tokens', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid token'], 401);
        }

        $society = Society::where('login_tokens', $request['token'])
            ->first();

        $job = JobCategory::where('job_category', $request['job_category'])
            ->first();

        $data = new Validation();
        $data->work_experience = trim($request->work_experience);
        $data->job_category_id = $job->id;
        $data->job_position = trim($request->job_position);
        $data->reason_accepted = trim($request->reason_accepted);
        $data->society_id = $society->id;
    }
}
