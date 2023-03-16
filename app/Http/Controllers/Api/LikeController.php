<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Like\StoreRequest;
use App\Http\Requests\Like\UpdateRequest;
use App\Http\Resources\LikeResource;
use App\Models\Like;
use App\Services\LikeService;

class LikeController
{
    /**
     * The LikeService
     *
     * @var LikeService
     */
    private $serivce;

    /**
     * Creates a new LikeController instance
     *
     * @param LikeService $service
     * @return void
     */
    public function __construct(LikeService $service)
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
     * Deletes an entry
     *
     * @param Like $post
     * @return void
     */
    public function delete(Like $post)
    {
        $post->delete();
        return response()
            ->json(['message' => 'deleted'])
            ->setStatusCode(200);
    }
}
