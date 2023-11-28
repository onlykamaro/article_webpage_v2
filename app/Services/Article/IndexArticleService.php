<?php

declare(strict_types=1);

namespace App\Services\Article;

use App\Collections\ArticleCollection;
use App\Repositories\ArticleRepository;
use App\Repositories\EmptyArticleRepository;

class IndexArticleService
{
    private ArticleRepository $articleRepository;
    public function __construct()
    {
        $this->articleRepository = new EmptyArticleRepository();
    }

    public function execute(): ArticleCollection
    {
        return $this->articleRepository->getAll();
    }
}