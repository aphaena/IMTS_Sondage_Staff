<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class QuizController extends Controller
{
    public function index()
    {
        // Votre code ici. Par exemple, vous pouvez charger une vue :
        echo view('quiz/index');
    }


    public function submit()
    {
        // Votre code ici. Par exemple, vous pouvez récupérer les données POST :
        $data = $this->request->getPost();

        // Ensuite, vous pouvez traiter les données comme vous le souhaitez.
        // Par exemple, vous pouvez les enregistrer dans une base de données ou les utiliser pour calculer un score de quiz.

        // Enfin, vous pouvez rediriger l'utilisateur vers une autre page ou renvoyer une réponse.
        // Par exemple, vous pouvez rediriger l'utilisateur vers une page de résultats de quiz :
        return redirect()->to('/quiz/results');
    }
}