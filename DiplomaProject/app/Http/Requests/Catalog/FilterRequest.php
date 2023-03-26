<?php
namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 
 */
class FilterRequest extends FormRequest
{
	
	public function authorize()
	{
		return true;
	}

	public function rules(){
		return [
			'id' => '',
			'Category' => 'string',
			'Title' => 'string',
			'Description' => 'string',
			'Photo' => 'string',
			'Year' => 'string'
		];
	}
}