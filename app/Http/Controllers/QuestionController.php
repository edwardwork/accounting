<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\JsonResponse;

class QuestionController extends Controller
{
    public function store(QuestionRequest $request): JsonResponse
    {
        Question::create($request->only(['email', 'name', 'question']));

        return responseSuccess('Your question was successfully created!');
    }
}
