<?php


class PostLoader
{
    public function storeAndLoadMessages(Post $post)
    {
        $file = 'saveContent.txt';
        try {
            $json = json_encode($post->toArray(), JSON_THROW_ON_ERROR,);
        } catch (JsonException $e) {
        }
    }
}