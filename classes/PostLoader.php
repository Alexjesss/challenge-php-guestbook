<?php


class PostLoader
{
    private array $allPosts = [];

    public function storeAndLoadMessages(Post $post): void
    {
        $file = 'saveContent.txt';
        file_put_contents($file, $post);
        try {
            $json = json_encode($file, JSON_THROW_ON_ERROR,);
        } catch (JsonException $e) {
        }
        file_get_contents($file,$json);
    }

    public function getAllPosts(): array
    {
        return $this->allPosts;
    }

    public function setAllPosts(array $allPosts): void
    {
        $this->allPosts = $allPosts;
    }


}