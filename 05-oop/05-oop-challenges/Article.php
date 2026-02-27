<?php

class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article0 = new Article("My First Article", "This is the content of my first article.");
$article0->publish();

$article1 = new Article("My Second Article", "This is the content of my second article.");

echo "Article 0: " . $article0->title . " - Published: " . ($article0->isPublished() ? "Yes" : "No") . "<br/>";
echo "Article 1: " . $article1->title . " - Published: " . ($article1->isPublished() ? "Yes" : "No") . "<br/>";

echo '<br/>';

var_dump($article0);

echo '<br/>';
echo '<br/>';

var_dump($article1);