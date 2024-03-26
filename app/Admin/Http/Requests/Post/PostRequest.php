<?php

namespace App\Admin\Http\Requests\Post;

use App\Admin\Http\Requests\BaseRequest;


class PostRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function methodPost()
    {
        return [
            
            'title' => [
                'required', 
                'string', 'min:6', 'max:100',
                //regex: 
                
            ],
            'slug' => ['required', 'string'],
            'status' =>'required',
            'is_featured' => 'required',
            'excerpt' => 'required',
            'content' => 'required'
           
           
           
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\Post,id'],
            'title' => [
                'required', 
                'string', 'min:6', 'max:100',
            ],
            'slug' => ['required', 'string'],
            'status' =>'required',
            'is_featured' => 'required',
            'excerpt' => 'required',
            'content' => 'required'
           
           
           
        ];
    }
}
