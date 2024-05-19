<?php


class TranslatedTextObserver implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state < 3) {
            echo "TranslatedTextObserver: Reacted to the event-sending email.\n";
        }
    }
}