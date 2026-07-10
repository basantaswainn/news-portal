<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\FrontendService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected FrontendService $frontendService)
    {
    }

    public function index(Request $request)
    {
        return view('home', ['viewModel' => $this->frontendService->getHomeViewModel()]);
    }
}
