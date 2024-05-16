<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use App\Models\Blog;
class StoreBlogRequest extends FormRequest
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
            'user_id' => ['required', 'integer', 'min:1', function ($attribute, $value, $fail)   {

                $existingUser = User::where('id',$value)->first();
                $totalBlogs = Blog::where('user_id',$value)->count();
                if (!$existingUser) {
                    $fail(" user_id must be a valid user's ID");
                }
                if ($existingUser && $totalBlogs > 1) {
                    $fail('each user can have maximum 2 posts assigned to his profile');
                }
            }],
            'title' => ['required','regex:/^\S+$/u', 'min:10'],
            'description' => ['required','regex:/^\S+$/u', 'min:50'],
            'auther_name' => ['required','regex:/^[a-zA-Z]+$/u'],
        ];
    }
}
