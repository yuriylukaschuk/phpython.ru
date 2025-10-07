<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{

	/**
	 * Создание задачи: POST /tasks (поля: title, description, status)
	 */
	public function store(StoreTaskRequest $request): JsonResponse
	{
		\Log::info('Raw request data:', $request->all());

		$task = Task::create($request->validated());

		\Log::info('Created task:', $task->toArray());
		
		return response()->json([
			'data' => $task,
			'message' => 'Task created successfully'
		], 201);
	}

	/**
	 * Просмотр списка задач: GET /tasks (возвращает все задачи).
	 */
	public function index(): JsonResponse
	{
		$tasks = Task::all();
		return response()->json([
			'data' => $tasks,
			'message' => 'Tasks retrieved successfully'
		]);
	}

	/**
	 * Просмотр одной задачи: GET /tasks/{id}.
	 */
	public function show(Task $task)
	{
		return new TaskResource($task);
	}

	/**
	 * Обновление задачи: PUT /tasks/{id}.
	 */
	public function update(UpdateTaskRequest $request, Task $task)
	{
		$task->update($request->validated());

		return new TaskResource($task);
	}

	/**
	 * Удаление задачи: DELETE /tasks/{id}.
	 */
	public function destroy(Task $task): JsonResponse
	{
		$task->delete();

		return response()->json([
			'message' => 'Задача удалена'
		], 200);
	}
}
