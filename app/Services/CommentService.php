<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
    /**
     * Creates a new entry
     *
     * @param array $data
     * @return void
     */
    public function store(array $data)
    {
        Comment::create($data);
    }

    /**
     * Updates an entry
     *
     * @param array $data
     * @return void
     */
    public function update(Comment $comment, array $data)
    {
        $comment->update($data);
    }
}
