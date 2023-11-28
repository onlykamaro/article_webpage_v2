<?php

declare(strict_types=1);

namespace App\Services\Article;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use App\Repositories\EmptyArticleRepository;
use Doctrine\DBAL\Connection;

class ShowArticleService
{
    protected Connection $database;

    private ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new EmptyArticleRepository();
    }

    public function execute(int $id): ?Article
    {
        return $this->articleRepository->getById($id);
    }
}