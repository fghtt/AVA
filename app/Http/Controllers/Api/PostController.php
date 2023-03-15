<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Services\PostService;

class PostController
{
    /**
     * The PostService
     *
     * @var PostService
     */
    private $serivce;

    /**
     * Creates a new PostController instance
     *
     * @param PostService $service
     * @return void
     */
    public function __construct(PostService $service)
    {
        $this->serivce = $service;
    }

    /**
     * Get list a entries
     *
     * @return void
     */
    public function index()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
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
        $this->serivce->store($data);
        return response()
            ->json(['message' => 'created'])
            ->setStatusCode(201);
    }

    /**
     * Updates an entry
     *
     * @param UpdateRequest $request
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->serivce->update();
        return response()
            ->json(['message' => 'updated'])
            ->setStatusCode(204);
    }

    /**
     * Deletes an entry
     *
     * @param Post $post
     * @return void
     */
    public function delete(Post $post)
    {
        $post->delete();
    }
}
