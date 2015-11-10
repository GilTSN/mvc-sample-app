<?php

namespace App\Services\Validation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesValidation
{
    public function validates(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        if ($validation->fails()) {
            return $validation->errors()->all();
        }

        return true;
    }
}