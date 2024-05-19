<?php


class OriginalTextObserver implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state >= 3) {
            echo "OriginalTextObserver: Reacted to the event-sending email and sms.\n";
        }
    }
}