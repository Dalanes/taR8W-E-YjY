<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Repositories\CommmentsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CommentsController extends Controller
{
    private $commentsRepository;

    public function __construct()
    {
        $this->commentsRepository = app(CommmentsRepository::class);

    }

    /**Главная страница с комментариями
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = $this->commentsRepository->getComments();
        $storeCommentsRoute = route("comments.store");

        return Response::view("comments.comments", compact("comments", "storeCommentsRoute"));
    }

    /**Post запрос на сохранение комментария
     * @param Request $request
     */
    public function store(Request $request)
    {
        $newComment = $request->input();
        Comments::create($newComment);
    }
}
