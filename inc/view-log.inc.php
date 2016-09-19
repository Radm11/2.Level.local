<?
if(is_file($_SERVER['DOCUMENT_ROOT'].'/log/'.PATH_LOG)){
    $file = file($_SERVER['DOCUMENT_ROOT'].'/log/'.PATH_LOG);
    echo "<ol>";
    foreach($file as $line) {
        list($dt, $page, $ref) = explode("|", $line);
        $dt = date('d-m-Y H:i:s', $dt);
        echo <<<OUT
          <li>
            [$dt]: $ref -> $page
          </li>
OUT;
    }
    echo "</ol>";
}
//echo $_SERVER['DOCUMENT_ROOT'];
//file_put_contents($_SERVER['DOCUMENT_ROOT'].'/log/'.'test.txt', "Testing test", FILE_APPEND);
/*
if(is_file("log/".PATH_LOG)){
    $file = file("log/".PATH_LOG);
    echo "<ol>";
    foreach($file as $line) {
            list($dt, $page, $ref) = explode("|", $line);
            $dt = date('d-m-Y H:i:s', $dt);
            echo <<<OUT
            <li>
            [$dt]: $ref -> $page 
            </li>
OUT;
                            }
        echo "</ol>";
                            }*/
//echo $_SERVER['DOCUMENT_ROOT'];
//file_put_contents($_SERVER['DOCUMENT_ROOT'].'/log/'.'test.txt', "Testing test", FILE_APPEND);
/*define('PATH_LOG', 'path.log');
if(is_file($_SERVER['DOCUMENT_ROOT'].'/log/'.PATH_LOG)){
    $file = file($_SERVER['DOCUMENT_ROOT'].'/log/'.PATH_LOG);
    echo "<ol>";
    foreach($file as $key => $line) {
        echo "$key : $line<br/>";
    }
  }*/
//echo "Файла нет!!!";
/*        list($dt, $page, $ref) = explode("|", $line);
        $dt = date('d-m-Y H:i:s', $dt);
        echo <<<OUT
            <li>
            [$dt]: $ref -> $page
            </li>
OUT;
    }
    echo "</ol>";
}*/