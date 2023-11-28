<?php

declare(strict_types=1);

namespace App\Services\Article;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use App\Repositories\MysqlArticleRepository;

class StoreArticleService
{
    private ArticleRepository $articleRepository;

    public function execute(string $title, string $description): void
    {
        $article = new Article(
            $title,
            $description,
            'https://via.assets.so/img.jpg?w=500&h=500',
        );

        $this->articleRepository->save($article);
    }
}