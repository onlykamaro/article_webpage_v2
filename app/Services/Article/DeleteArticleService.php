<?php

declare(strict_types=1);

namespace App\Services\Article;

use App\Repositories\ArticleRepository;
use App\Repositories\MysqlArticleRepository;

class DeleteArticleService
{

    private ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new MysqlArticleRepository();
    }

    public function execute(int $id): void
    {
        $article = $this->articleRepository->getById($id);

        if ($article == null)
        {
            // throw exception
            return;
        }

        $this->articleRepository->save($article);
    }
}