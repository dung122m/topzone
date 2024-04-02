<?php

namespace App\Admin\Http\Requests\Category;

use App\Admin\Http\Requests\BaseRequest;


class CategoryRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function methodPost()
    {
        return [

            'name' => [
                'required',
                'string',
                'min:6',
                'max:100',
                //regex: 

            ],
            'slug' => ['required', 'string'],
            'status' => 'required',




        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\Category,id'],
            'name' => [
                'required',
                'string',
                'min:6',
                'max:100',
            ],
            'slug' => ['required', 'string'],
            'status' => 'required',




        ];
    }
}
