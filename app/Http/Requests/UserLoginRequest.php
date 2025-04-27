<?php

namespace App\Http\Requests;

use App\DTO\UserCredentialsDTO;

class UserLoginRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [

            'email' => 'required|email',
        'password' => 'required | string '
            ];
    }

    public function getValidatedData(): UserCredentialsDTO
    {

        $this->validate();

        return new UserCredentialsDTO(
            email : $this->request->post('email'),
        password : $this->request->post('password')
        );

    }


}
