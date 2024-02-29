<?php

namespace App\Controllers;

use App\Models\SurveyModel;

class SurveyController extends BaseController
{
    public function create()
    {
        // Load the SurveyModel
        $model = new SurveyModel();

        // Get the request data
        $userId = $this->request->getPost('user_id');
        $question = $this->request->getPost('question');
        $rating = $this->request->getPost('rating');

        // Create the survey
        $model->create_survey($userId, $question, $rating);

        // Redirect or show a success message
    }

    public function get($userId)
    {
        // Load the SurveyModel
        $model = new SurveyModel();

        // Get the surveys
        $surveys = $model->get_surveys($userId);

        // Return the surveys data or show it in a view
    }
}