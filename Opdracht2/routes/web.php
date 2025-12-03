<?php

use App\Models\Post;
use App\Models\Note;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newposttest', function(){

    $x = new Post();
    $x->title = "Mijn titel";
    $x->body = "Dit is de inhoud";
    $x->save();

    return "done";
});

Route::get('/allposts', function(){
    $posts = Post::all();
    return $posts;
});

Route::get('/newnote', function(){

    $n = Note::create([
        'title' => 'Nieuwe notitie',
        'content' => 'Dit is de inhoud van de notitie.'
    ]);

    return "created note id: " . $n->id;
});

Route::get('/allnotes', function(){
    $notes = Note::all();
    return $notes;
});