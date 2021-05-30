<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPosts()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getOnePost($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    public function addPost()
    {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'the title',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae nemo facilis dolor optio? Omnis error ratione laudantium quod praesentium, architecto consectetur ducimus eveniet nisi ab, eaque voluptatem, accusamus recusandae optio!',
        ]);
        return $response->json();
    }

    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'the title update',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae nemo facilis dolor optio? Omnis error ratione laudantium quod praesentium, architecto consectetur ducimus eveniet nisi ab, eaque voluptatem, accusamus recusandae optio!',
        ]);
        return $response->json();
    }

    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }
}
