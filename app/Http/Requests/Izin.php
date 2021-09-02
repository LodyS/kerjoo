<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Izin extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tanggal_izin'=>'required|date_format:Y-m-d',
            'user_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'tanggal_izin.required'=>'Tanggal wajib diisi',
            'user_id.required'=>'Pegawai wajib diisi',
        ];
    }
}
