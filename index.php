define('ROOT', dirname(__FILE__));

function binarySearch($file, $key_value){
    $handle = fopen($file, "r");
    while (!feof($handle)) {
        $string = fgets($handle,4000);
        mb_convert_encoding($string, 'cp1251');        
        $arrayString = explode('\x0A', $string); 
        array_pop($arrayString);
        foreach ($arrayString as $key = > value) {
            $arr[] = explode('\t', value);
        }
        $start = 0;
        $end = count($arr - 1);

        while ($start <= $end) {
            $middle = floor (($start + $ end)/2);
            $res = $strnatcmp($arr[$middle][0],$key_value);

            if ($res > 0) {
                $end = $middle - 1;
            } elseif ($res < 0) {
                $start = $middle + 1;
            } else {
                return $arr[$middle][1];
            }
        }
    }
    return 'undef';
}
