<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Services\CommentService;

class CommentController
{
    /**
     * The CommentService
     *
     * @var CommentService
     */
    private $serivce;

    /**
     * Creates a new CommentController instance
     *
     * @param CommentService $service
     * @return void
     */
    public function __construct(CommentService $service)
    {
        $this->serivce = $service;
    }

    /**
     * Creates a new entry
     *
     * @param StoreRequest $request
     * @return void
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $this->serivce->store($data);
        return response()
            ->json(['message' => 'created'])
            ->setStatusCode(201);
    }

    /**
     * Updates an entry
     *
     * @param UpdateRequest $request
     * @param Comment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $this->serivce->update($comment, $data);
        return response()
            ->json()
            ->setStatusCode(204);
    }

    /**
     * Deletes an entry
     *
     * @param Comment $comment
     * @return void
     */
    public function delete(Comment $comment)
    {
        $comment->delete();
        return response()
            ->json(['message' => 'deleted'])
            ->setStatusCode(200);
    }
}
