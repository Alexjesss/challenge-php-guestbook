<?php


class PostLoader
{
    private array $allPosts = [];
    public const MAXIMUM_POSTS = 20;

    public function storeMessages(Post $post): void
    {
        $file = 'saveContent.txt';
        try {
            $arrayPost = $post->toArray();
            $temp = json_decode(file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
            array_unshift($temp, $arrayPost);
            file_put_contents($file, json_encode($temp, JSON_THROW_ON_ERROR));
            $this->allPosts = $temp;
        } catch (JsonException $e) {
        }
    }

    public function displayMessages(): void
    {
        for ($i = 0; $i < min(self::MAXIMUM_POSTS, count($this->allPosts)); $i++) {
            $this->postedMessages($this->allPosts[$i]);
        }
    }

    public function postedMessages(array $array)
    {

        echo $array['title'] . ' ' . $array['date'] . " " . $array['content'] . " " . $array['authorName'];
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