<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;


class CommentController extends Controller
{
    public function create(Request $request)
    {
        $comments = new Comment;
        $comments->comment = $request->comment;
        $comments->post_id = $request->id;
        $comments->user_id = $request->id;
        $comments->save();

        $post = Post::findOrFail($id);
        $postOwner = User::where('id', $post->user_id)->first()->toArray();

        $text = Comment::all();
        return view(
            'posts.show',
            [
                'post' => $post,
                'postOwner' => $postOwner,
                'comments' => $comments
            ]
        );
    }
}
