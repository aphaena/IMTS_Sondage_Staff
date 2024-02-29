<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveyModel extends Model
{
    protected $table = 'surveys';

    protected $allowedFields = ['user_id', 'question', 'rating'];

    public function create_survey($user_id, $question, $rating)
    {
        $data = [
            'user_id' => $user_id,
            'question' => $question,
            'rating' => $rating
        ];

        return $this->insert($data);
    }

    public function get_surveys($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }
}