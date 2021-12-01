<?php
require "src\IteratorFile.php";
/*$file = fopen('data.csv', 'w');
fwrite($file, 'id,name'.PHP_EOL);
for($i = 1; $i< 200; $i++){
    fwrite($file, $i.','.uniqid().PHP_EOL);
}*/
function iteracia(Iterator $iterator, int $kol){
    foreach($iterator as $key=>$item){
        echo($key.' = '.implode($item)).PHP_EOL;
        if ($key == $kol)
        {
            break;
        }
    }
}
$failIterator = new IteratorFile('data.csv');

 iteracia($failIterator, 6);

