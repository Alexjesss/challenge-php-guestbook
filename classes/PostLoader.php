<?php


class PostLoader
{
    private array $allPosts = [];

    public function storeMessages(Post $post): void
    {
        $file = 'saveContent.txt';
        try {
            $arrayPost = $post->toArray();
            $temp = json_decode(file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
            array_unshift($temp,$arrayPost);
            file_put_contents($file, json_encode($temp, JSON_THROW_ON_ERROR));
        } catch (JsonException $e) {
        }
    }

    public function displayMessages(){
        $counter =0;
        foreach($temp as $arr){
            if($counter<10){
                echo $arr.PHP_EOL;
            }
            $counter++;
        }
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