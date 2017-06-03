<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ForumController extends Controller
{
    public function index(){

        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', 'http://maqe.github.io/json/authors.json');
        $authors = [];
        if($res->getStatusCode()=='200'){
            $authors = json_decode($res->getBody(), true);
        }

        $res = $client->request('GET', 'http://maqe.github.io/json/posts.json');
        $posts = [];
        if($res->getStatusCode()=='200'){
            $posts = json_decode($res->getBody(), true);
        }

        return view('forum',compact('authors','posts'));
    }

    public function getPosts(){
        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', 'http://maqe.github.io/json/posts.json');
        $posts = [];
        if($res->getStatusCode()=='200'){
            $posts = json_decode($res->getBody(), true);
        }

        return response()->json($posts);
    }

    public function getAuthors(){
        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', 'http://maqe.github.io/json/authors.json');
        $authors = [];
        if($res->getStatusCode()=='200'){
            $authors = json_decode($res->getBody(), true);
        }

        return response()->json($authors);
    }
}
