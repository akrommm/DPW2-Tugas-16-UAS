<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\UserController;

class UserStoreRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required|unique:user,nama',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            'no_handphone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Field nama wajib di isi',
            'username.required' => 'Field Username wajib di isi',
            'username.unique' => 'Username sudah terpakai',
            'nama.unique' => 'nama sudah terpakai',
            'email.required' => 'email wajib di isi',
            'email.email' => 'Field Email tidak valid',
            'jenis_kelamin.required' => 'Field Jenis kelamin wajib di isi',
            'password.required' => 'Field Password wajib di isi',
            'no_handphone.required' => 'Field No Hp wajib di isi',

        ];
    }
}
