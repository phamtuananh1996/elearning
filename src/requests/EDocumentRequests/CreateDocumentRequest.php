<?php
namespace GFL\Elearning\Requests\EDocumentRequests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDocumentRequest extends FormRequest
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
            'name'=>'unique:e_documents|required|max:255',
            'description'=>'max:5000',
            'file'=>'required|File|mimes:jpeg,bmp,png,doc,docx,pdf|size:2000000'
        ];
    }
}
