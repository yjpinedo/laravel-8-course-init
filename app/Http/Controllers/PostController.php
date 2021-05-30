<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postCommentStore()
    {
        $post = new Post();
        $post->title = 'Lorem ipsum, dolor.';
        $post->body = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, quas quos. Delectus, soluta harum? Aperiam neque dolorem maiores vero. Similique nam reprehenderit necessitatibus rerum, atque soluta optio aliquam quae numquam?';
        $post->user_id = 51;
        $post->save();
        $comment = new Comment();
        $comment->comment = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam veritatis tenetur quas tempora illum recusandae quam. Nulla neque ducimus rerum veritatis, quisquam quaerat, similique illum recusandae fugit nemo omnis nihil.
        Officia repudiandae nobis reiciendis sunt aliquid fugiat iste sequi, voluptatibus et asperiores ipsa necessitatibus, exercitationem saepe illo placeat, dignissimos nemo similique a vitae quis architecto eius ut velit! Alias, qui!
        Laudantium autem sapiente nemo, soluta nostrum cumque repudiandae doloribus sequi enim eos dolorem quibusdam eaque dolorum consequuntur nam accusantium odit blanditiis quaerat magnam debitis tenetur accusamus asperiores. Magni, distinctio! Odit!';

        $post->comments()->save($comment);

        return 'Created post-comments successfully';
    }

    public function postStore()
    {
        $post = new Post();
        $post->title = 'Mi primer post.';
        $post->body = 'Descripción de mi primer post';
        $post->user_id = 50;
        $post->save();
        return 'Post has been created successfully!';
    }

    public function commentStore($id)
    {
        $post = Post::findOrFail($id);
        $comment = new Comment();
        $comment->comment = 'Tercer comentario de mi post ' . $post->title;

        $post->comments()->save($comment);
        return 'Commnet has been posted!';
    }

    public function getCommentsPost($id) {
        $comments = Post::findOrFail($id)->comments;
        return $comments;
    }
}
