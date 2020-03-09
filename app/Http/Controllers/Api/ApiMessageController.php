<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Http\Services\Message\MessageServiecInterface;
use Illuminate\Http\Request;

class ApiMessageController extends Controller
{
    //

    private $messageService;

    public function __construct(MessageServiecInterface $messageService)
    {
        $this->messageService = $messageService;
    }

    public function index()
    {
        $messages = $this->messageService->getAll();
        return response()->json($messages);
    }

    public function store(MessageRequest $request)
    {
        $this->messageService->store($request);
    }
}
