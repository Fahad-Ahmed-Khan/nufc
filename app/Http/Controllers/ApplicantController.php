<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ApplicantController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'nullable',
            'profile_picture' => 'nullable|image',
            'password' => 'required|confirmed',
            'position' => 'required',
            'gender' => 'required',
            'birth_day' => 'required',
            'birth_month' => 'required',
            'birth_year' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'address' => 'required',
            'why' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable'
        ]);

        $data['dob'] = $data['birth_year'] . '-' . $data['birth_month'] . '-' . $data['birth_day'];
        unset($data['day'], $data['month'], $data['year']);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('images/profile_pictures', 'public');
        }

        $data['social_links'] = json_encode([
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'twitter' => $data['twitter']
        ]);

        unset($data['facebook'], $data['instagram'], $data['twitter']);

        try {
            Applicant::create($data);
            return ['status' => 'success', 'message' => 'Your application has been submitted. We will contact you soon. Thank you!'];
        } catch (\Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }

    }


}
