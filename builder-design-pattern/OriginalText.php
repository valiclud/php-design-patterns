<?php

class OriginalText
{
    public $id;

    public $author_text;

    public $title;

    public $text;

    public $text_img;

    public $century;

    public $insert_date;

    public $hits;

    public $place_id;

    public $old_language_id;

    public ?object $place = null;

    public ?object $oldLanguage = null;


    public function __construct($id, $author_text, $title, $text, $text_img, $century,
     $insert_date, $hits, $place, $oldLanguage)
    {
    }
    public function setAuthor(String $author): void
    {
        $this->author_text = $author;
    }
    public function getAuthor() {
        return $this->author_text;
    }
    public function setTitle(String $title): void
    {
        $this->title = $title;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setText(String $text): void
    {
        $this->text = $text;
    }
    public function getText() {
        return $this->text;
    }
    public function setTextimg(String $textimg): void
    {
        $this->text_img = $textimg;
    }
    public function getTextimg() {
        return $this->text_img;
    } 
    public function setCentury(String $century): void
    {
        $this->century = $century;
    }
    public function getCentury() {
        return $this->century;
    } 
    public function setInsertdate(String $insertdate): void
    {
        $this->insert_date = $insertdate;
    }
    public function getInsertdate() {
        return $this->insert_date;
    }
    public function setHits(String $hits): void
    {
        $this->hits = $hits;
    }
    public function getHits() {
        return $this->hits;
    } 
    public function setPlace(?object $place) {
$       $this->place = $place;
    }
    public function getPlace()
    {
        return $this->place;
    }
    public function setOldLanguage(?object $oldLanguage) {
        $this->oldLanguage = $oldLanguage;
            }
    public function getOldLanguage()
    {
        return $this->oldLanguage;
    }
}