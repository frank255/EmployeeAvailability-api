<?php

namespace App\Http\Controllers;

use App\Models\EmployeeAvailability;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeAvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
return  response()->json(EmployeeAvailability::all(),
   Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
EmployeeAvailability::create($request->only([
    'employee-name','title','office','presence','reason','departure-time','return-time'
]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeAvailability  $employeeAvailability
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeAvailability $employeeAvailability)
    {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeAvailability  $employeeAvailability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeAvailability $employeeAvailability)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeAvailability  $employeeAvailability
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeAvailability $employeeAvailability)
    {
        //
    }
}
