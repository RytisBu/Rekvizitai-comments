<?php

namespace Rekvizitai\Comments\Controllers;


use Illuminate\Support\Facades\Blade;

class CommentsController extends \App\Http\Controllers\Controller
{
    public function displayCommentsUi()
    {
        $response = '{"id":"12"}';
        $data = json_decode($response);

        return view('comments::index')->with('data', $data);
    }
}