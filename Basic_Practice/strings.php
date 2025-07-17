<?php

$name = "John";

echo 'Hello, $name!\n';
echo "Hello, $name!\n";


$heredoc = <<< EOD

Multi line string
with variable $name
we can write here whatever we want

EOD;

$nowdoc = <<< 'EOD'

Multi line string
with variable $name
we can write here whatever we want

EOD;

echo $heredoc;
echo $nowdoc;