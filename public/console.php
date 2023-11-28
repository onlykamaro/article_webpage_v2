<?php

require_once '../vendor/autoload.php';

$service = new \App\Services\Article\IndexArticleService();
$articles = $service->execute();

foreach ($articles->getAll() as $article) {
    /** $var \App\Models\Article */
    echo $article->getTitle() . PHP_EOL;
}

/*$service = new \App\Services\Article\ShowArticleService();
$article = $service->execute(1);

echo $article->getTitle() . ' - ' . PHP_EOL;
echo $article->getDescription();*/

/*$service = new \App\Services\Article\StoreArticleService();
$service->execute('Hello from console', 'Text from console');*/
