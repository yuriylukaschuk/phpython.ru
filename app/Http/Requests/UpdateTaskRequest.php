<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateTaskRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'title' => 'required|string|max:64',
			'description' => 'nullable|string|max:255',
			'status' => 'required|in:pending,created,progress,suspended,completed,returned,canceled',
		];
	}

	public function messages(): array
	{
		return [
			'title.required' => 'Название заголовка должно присутствовать обязательно',
			'status.in' => 'Статус должне иметь одно из значений: pending (В ожидании), created (Создана), progress (В работе), suspended (Приостановлена), completed (Выполнена),returned (Возвращена на доработку), canceled (Отменена)',
		];
	}

	protected function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(response()->json([
			'message' => 'Проверка не удалась',
			'errors' => $validator->errors()
		], 422));
	}
}
