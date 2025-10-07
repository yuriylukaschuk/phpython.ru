<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskCollection extends ResourceCollection
{
	/**
	 * Transform the resource collection into an array.
	 *
	 * @return array<int|string, mixed>
	 */
	public function toArray(Request $request): array
	{
		return [
			'data' => $this->collection,
			'meta' => [
				'count' => $this->count(),
				'total' => $this->total(), // для пагинации
			]
		];
		// return parent::toArray($request);
	}
}
