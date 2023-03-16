<?php

namespace App\Services;

use App\Models\Like;
use App\Models\Post;

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

    /**
     * Deletes an entry
     *
     * @param Post $post
     * @return void
     */
    public function delete(Post $post)
    {
        list($post_id, $user_id) = [$post->id, auth()->user()->id];
        $like = Like::where('post_id', '=', $post_id)
            ->where('user_id', '=', $user_id);
        $like->delete();
    }
}
