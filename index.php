<?php

//Парсинг номеров коинтов

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://coinmarketcap.com/ru/?page=1');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

$start_1 = 'Последние 7 дней</p>';
$end_1 = 'Показано 1 – 100';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);

$pos_q = $pos_end_1 - $pos_start_1;

$query = substr($query, $pos_start_1, $pos_q);

$query = preg_replace('/[^a-zA-Zа-яА-Я0-9-. \/,<>]/ui', '', $query);

$start_1 = '<td styletext-alignleft><p colortext2 font-size0 classsc-1eb5slv-0 etpvrL>';
$start_1 = str_replace("/", "\/", $start_1);

$end_1 = '</p></td><td styletext-alignleft>';
$end_1 = str_replace("/", "\/", $end_1);

$query = preg_replace("/$end_1(.*?)$start_1/", ';', $query);

$start_1 = '<td styletext-alignleft><p colortext2 font-size0 classsc-1eb5slv-0 etpvrL>';
$end_1 = '</p></td><td styletext-alignleft>';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);
        
$pos = $pos_end_1 - $pos_start_1;
$query = substr($query, $pos_start_1, $pos);

$query = str_replace("<td styletext-alignleft><p colortext2 font-size0 classsc-1eb5slv-0 etpvrL>", "", $query);

$result = explode(";", $query);

for($i=0; $i<count($result); $i++){
    echo $result[$i];
    echo '<br>';
}

//Парсинг названий коинтов

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://coinmarketcap.com/ru/?page=1');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

$start_1 = 'Последние 7 дней</p>';
$end_1 = 'Показано 1 – 100';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);

$pos_q = $pos_end_1 - $pos_start_1;

$query = substr($query, $pos_start_1, $pos_q);

$query = preg_replace('/[^a-zA-Zа-яА-Я0-9-. \/,<>]/ui', '', $query);

$start_1 = '<p font-weightsemibold colortext font-size1 classsc-1eb5slv-0 iworPT>';
$start_1 = str_replace("/", "\/", $start_1);

$end_1 = '</p><div classsc-1teo54s-2 fZIJcI>';
$end_1 = str_replace("/", "\/", $end_1);

$query = preg_replace("/$end_1(.*?)$start_1/", ';', $query);

$start_1 = '<p font-weightsemibold colortext font-size1 classsc-1eb5slv-0 iworPT>';
$end_1 = '</p><div classsc-1teo54s-2 fZIJcI>';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);
        
$pos = $pos_end_1 - $pos_start_1;
$query = substr($query, $pos_start_1, $pos);

$query = str_replace("<p font-weightsemibold colortext font-size1 classsc-1eb5slv-0 iworPT>", "", $query);

$result = explode(";", $query);

for($i=0; $i<count($result); $i++){
    echo $result[$i];
    echo '<br>';
}

//Парсинг цены коинта

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://coinmarketcap.com/ru/?page=1');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

$start_1 = 'Последние 7 дней</p>';
$end_1 = 'Показано 1 – 100';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);

$pos_q = $pos_end_1 - $pos_start_1;

$query = substr($query, $pos_start_1, $pos_q);

$query = preg_replace('/[^a-zA-Zа-яА-Я0-9-. \/,<>]/ui', '', $query);

$start_1 = '/markets/ classcmc-link><span>';
$start_1 = str_replace("/", "\/", $start_1);

$end_1 = '</span></a></div></td><td styletext-alignright>';
$end_1 = str_replace("/", "\/", $end_1);

$query = preg_replace("/$end_1(.*?)$start_1/", ';', $query);

$start_1 = '/markets/ classcmc-link><span>';
$end_1 = '</span></a></div></td><td styletext-alignright>';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);
        
$pos = $pos_end_1 - $pos_start_1;
$query = substr($query, $pos_start_1, $pos);

$query = str_replace("/markets/ classcmc-link><span>", "", $query);

$result = explode(";", $query);

for($i=0; $i<count($result); $i++){
    echo $result[$i];
    echo '<br>';
}

//Парсинг капитализации коинта

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://coinmarketcap.com/ru/?page=1');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

$start_1 = 'Последние 7 дней</p>';
$end_1 = 'Показано 1 – 100';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);

$pos_q = $pos_end_1 - $pos_start_1;

$query = substr($query, $pos_start_1, $pos_q);

$query = preg_replace('/[^a-zA-Zа-яА-Я0-9-. \/,<>]/ui', '', $query);

$start_1 = '<span classsc-1ow4cwt-1 ieFnWP>';
$start_1 = str_replace("/", "\/", $start_1);

$end_1 = '</span></p></td><td styletext-alignright>';
$end_1 = str_replace("/", "\/", $end_1);

$query = preg_replace("/$end_1(.*?)$start_1/", ';', $query);

$start_1 = '<span classsc-1ow4cwt-1 ieFnWP>';
$end_1 = '</span></p></td><td styletext-alignright>';

$pos_start_1 = strpos($query, $start_1);
$pos_end_1 = strpos($query, $end_1);
        
$pos = $pos_end_1 - $pos_start_1;
$query = substr($query, $pos_start_1, $pos);

$query = str_replace("<span classsc-1ow4cwt-1 ieFnWP>", "", $query);

$result = explode(";", $query);

for($i=0; $i<count($result); $i++){
    echo $result[$i];
    echo '<br>';
}

 
?>