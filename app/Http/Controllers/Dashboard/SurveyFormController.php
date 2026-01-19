<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyForm;
use Illuminate\Http\Request;

class SurveyFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Survey $survey)
    {
        return view('dashboard.survey-form.index', [
            'survey' => $survey,
            'survey_forms' => SurveyForm::where('survey_id', $survey->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Survey $survey)
    {
        return view('dashboard.survey-form.create', [
            'survey' => $survey
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SurveyForm $surveyForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SurveyForm $surveyForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SurveyForm $surveyForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SurveyForm $surveyForm)
    {
        //
    }
    
    public function truncate(Survey $survey, Request $request)
    {
        SurveyForm::where('survey_id', $survey->id)->query()->delete();

        return redirect()->route('dashboard.visi-misi.index')->with('success', 'Successfuly deleted all!');
    }
}
