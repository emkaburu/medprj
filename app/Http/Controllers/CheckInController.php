<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class CheckInController extends Controller
{
    public function checkInPatient(Request $request) {
    	$data = $request->all();

    	$patient = Patient::create([
    		'name' => $data['name'],
    		'phone' => $data['phone'],
    		'other_data' => $data['other_data']
    	]);

    	return response()->json([
            'status' => 'success',
            'data' => $patient
        ]);
    }

    public function referPatient(Request $request) {
    	
    }
}
