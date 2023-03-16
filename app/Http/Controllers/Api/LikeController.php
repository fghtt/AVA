<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Like\StoreRequest;
use App\Models\Like;
use App\Models\Post;
use App\Services\LikeService;

class LikeController
{
    /**
     * The LikeService
     *
     * @var LikeService
     */
    private $service;

    /**
     * Creates a new LikeController instance
     *
     * @param LikeService $service
     * @return void
     */
    public function __construct(LikeService $service)
    {
        $this->service = $service;
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
        $this->service->store($data);

        return response()
            ->json(['message' => 'created'])
            ->setStatusCode(201);
    }

    /**
     * Deletes an entry
     *
     * @param Like $post
     * @return void
     */
    public function delete(Post $post)
    {
        $this->service->delete($post);
        return response()
            ->json(['message' => 'deleted'])
            ->setStatusCode(200);
    }
}
