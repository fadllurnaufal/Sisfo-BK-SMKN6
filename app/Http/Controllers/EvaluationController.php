<?php

namespace App\Http\Controllers;

class EvaluationController extends Controller{
    public function index(){
        return view('/admin.features.evaluation.individual', [
            'title' => 'Konseling Individu'
        ]);
    }
}