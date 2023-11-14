<?php

$programminglanguages = ['PHP' , 'Java' , 'Python'];

$newLanguage='go';
$programminglanguages[$newLanguage]='1.15';

echo '<pre>';
print_r($programminglanguages);
echo '</pre>';