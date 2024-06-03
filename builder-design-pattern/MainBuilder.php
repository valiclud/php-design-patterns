<?php

include 'TextBuilder.php';

$text = (new TextBuilder())
->setAuthor("XYZ")
->setText("ABCD")
->build();