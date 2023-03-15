<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    /**
     * Creates a new entry
     *
     * @param array $data
     * @return void
     */
    public function store(array $data)
    {
        Post::create($data);
    }

    /**
     * Updates an entry
     *
     * @param array $data
     * @return void
     */
    public function update(array $data)
    {

    }
}
