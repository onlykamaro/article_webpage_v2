<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Collections\ArticleCollection;
use App\Models\Article;

class EmptyArticleRepository implements ArticleRepository
{

    public function getAll(): ArticleCollection
    {
        return new ArticleCollection();
    }

    public function getById(int $id): ?Article
    {
        return null;
    }

    public function save(Article $article): void
    {

    }

    public function delete(Article $article): void
    {

    }
}
