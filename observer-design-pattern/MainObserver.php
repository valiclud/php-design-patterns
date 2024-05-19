<?php 

include 'Subject.php';
include 'TranslatedTextObserver.php';
include 'OriginalTextObserver.php';

$subject = new Subject();

$o1 = new TranslatedTextObserver();
$subject->attach($o1);

$o2 = new OriginalTextObserver();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();