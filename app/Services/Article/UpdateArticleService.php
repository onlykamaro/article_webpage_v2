<?php

declare(strict_types=1);

namespace App\Services\Article;

use App\Repositories\ArticleRepository;
use App\Repositories\MysqlArticleRepository;

class UpdateArticleService
{
    private ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new MysqlArticleRepository();
    }

    public function execute(int $id, string $title, string $description): void
    {
        $article = $this->articleRepository->getById($id);

        if ($article == null)
        {
            return;
        }

        $article->update([
           'title' => $title,
           'description' => $description
        ]);

        $this->articleRepository->save($article);
    }
}