<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecommendationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
             'g-recaptcha-response' => 'required|recaptcha'

        ];
    }
}
