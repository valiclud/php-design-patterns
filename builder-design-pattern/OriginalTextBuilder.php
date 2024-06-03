<?php

include 'OriginalText.php';

class TextBuilder
{
    private $id;

    private $author_text;

    private $title;

    private $text;

    private $text_img;

    private $century;

    private $insert_date;

    private $hits;

    public ?object $place = null;

    public ?object $oldLanguage = null;

    public function setAuthor(String $author)
    {
        $this->author_text = $author;
        return $this;
    }
    public function setTitle(String $title) 
    {
        $this->title = $title;
        return $this;
    }
    public function setText(String $text) 
    {
        $this->text = $text;
        return $this;
    }
    public function setTextimg(String $textimg) 
    {
        $this->text_img = $textimg;
        return $this;
    }
    public function setCentury(String $century) 
    {
        $this->century = $century;
        return $this;
    }
    public function setInsertdate(String $insertdate) 
    {
        $this->insert_date = $insertdate;
        return $this;
    }
    public function setHits(String $hits) 
    {
        $this->hits = $hits;
        return $this;
    }
    public function setPlace(?object $place) {
        $this->place = $place;
        return $this;
    }
    public function setOldLanguage(?object $oldLanguage) {
        $this->oldLanguage = $oldLanguage;
        return $this;
    }

    public function build(): OriginalText {
        $text = new OriginalText($this->id, $this->author_text, $this->title, $this->text, 
        $this->text_img, $this->century, $this->insert_date, $this->hits, $this->place,
         $this->oldLanguage);

        return $text;
    }
}
