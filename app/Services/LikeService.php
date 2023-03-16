<?php

namespace App\Services;

use App\Models\Like;

class LikeService
{
    /**
     * Creates a new entry
     *
     * @param array $data
     * @return void
     */
    public function store(array $data)
    {
        Like::create($data);
    }
}
