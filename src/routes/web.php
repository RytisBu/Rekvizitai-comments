<?php

use Illuminate\Support\Facades\Route;

//Route::get('comments', \rekvizitai\comments\inspire\Controllers\CommentsController::class);

Route::get('comments', function(\rekvizitai\comments\Controllers\CommentsController $comments) {
    return $comments->displayCommentsUi();
});
