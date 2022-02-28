<?php
function replace($word){
        $newWord = str_replace ("Python", "PHP", $word);
        echo $newWord;
}
replace("hello Python");
?>