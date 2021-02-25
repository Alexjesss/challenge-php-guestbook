<?php


class Post
{
    private string $Title;
    private string $Date;
    private string $Content;
    private string $Author_name;



    public function __construct(string $Title, string $Date, string $Content, string $Author_name)
    {
        $this->Title = $Title;
        $this->Date = $Date;
        $this->Content = $Content;
        $this->Author_name = $Author_name;
    }

    public function toArray(): array
    {
        return
            [
            'name'=>$this->Title,
            'date'=>$this->Date,
            'content'=>$this->Content,
            'authorName'=>$this->Author_name,
        ];
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): void
    {
        $this->Title = $Title;
    }


    public function getDate(): string
    {
        return $this->Date;
    }

    public function setDate(string $Date): void
    {
        $this->Date = $Date;
    }

    public function getContent(): string
    {
        return $this->Content;
    }

    public function setContent(string $Content): void
    {
        $this->Content = $Content;
    }

    public function getAuthorName(): string
    {
        return $this->Author_name;
    }

    public function setAuthorName(string $Author_name): void
    {
        $this->Author_name = $Author_name;
    }

}