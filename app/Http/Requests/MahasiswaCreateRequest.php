<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nim' => 'unique:mahasiswas|max:10|min:10',
            'name' => 'max:100|required',
            'alamat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nim.required' => 'Nim harus di isi !',
            'nim.unique' => 'Nim yang anda masukan sudah ada !',
            'nim.max' => 'Nim maksimal :max karakter',
            'nim.min' => 'Nim minimal :min karakter',
            'name.max' => 'Nama :max karakter',
            'name.required' => 'Nama harus di isi !',
        ];
    }
}

