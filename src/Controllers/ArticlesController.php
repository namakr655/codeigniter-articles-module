<?php

namespace Modules\Articles\Controllers;

use App\Controllers\BaseController;

class ArticlesController extends BaseController
{
    public function index()
    {
        echo "Homepage of Articles";
    }

    public function show()
    {
        echo "Individual Article, bitches";
    }
}
