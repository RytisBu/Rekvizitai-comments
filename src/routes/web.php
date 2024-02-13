<?php

use Illuminate\Support\Facades\Route;
use Rekvizitai\Comments\Controllers\CommentsController;

Route::get('comments', function(CommentsController $comments) {
    return $comments->displayCommentsUi();
});
