<?php
$file = '1.php';

$fp = fopen($file, 'r');
$str = fread($fp, filesize($file));
fclose($fp);
$code = strdecode($str);

//变量和函数
$vals = $funs = array();

$code = fmt_code($code);


//echo $code;exit;

preg_match('/function [a-z]+\(&\\$(.*?)\)\{(.*)return "[0-9a-zA-Z]{1}";\}/iesU', $code, $res);
$fun = str_replace($res[2],'$'.$res[1].'=@gzuncompress(base64_decode($'.$res[1].'));',$res[0]);
$code = str_replace($res[0], $fun, $code);

preg_match('/\."\(@\\$(.*?)\(\\$/iesU', $code, $res);

$str = str_replace('$'.$res[1].'(', 'file_put_contents(\'detmp2.php\',', $res[0]);
$code = str_replace($res[0], $str, $code);

$code = destr($code);
file_put_contents('detmp.php', $code);
include('detmp.php');

$fp = fopen('detmp2.php', 'r');
$str = fread($fp, filesize('detmp2.php'));
fclose($fp);

unlink('detmp2.php');
unlink('detmp.php');

$decode = gzuncompress($str);
$decode = preg_replace('/^;\?>/', '', $decode);
$decode = preg_replace('/<\?php unset\((.*?)\?>$/', '', $decode);

file_put_contents($file.'.de.php' ,$decode);
print_r($decode);

////////////
function val_replace($code, $val, $deval){
    $code = str_replace('$'.$val.',', '$'.$deval.',', $code);
    $code = str_replace('$'.$val.';', '$'.$deval.';', $code);
    $code = str_replace('$'.$val.'=', '$'.$deval.'=', $code);
    $code = str_replace('$'.$val.'(', '$'.$deval.'(', $code);
    $code = str_replace('$'.$val.')', '$'.$deval.')', $code);
    $code = str_replace('$'.$val.'.', '$'.$deval.'.', $code);
    $code = str_replace('$'.$val.'/', '$'.$deval.'/', $code);
    $code = str_replace('$'.$val.'>', '$'.$deval.'>', $code);
    $code = str_replace('$'.$val.'<', '$'.$deval.'<', $code);
    $code = str_replace('$'.$val.'^', '$'.$deval.'^', $code);
    $code = str_replace('$'.$val.'||', '$'.$deval.'||', $code);
    $code = str_replace('($'.$val.' ', '($'.$deval.' ', $code);
    return $code;
}

function fmt_code($code){
    global $vals,$funs;
    preg_match_all("/\\$[0-9a-zA-Z\[\]]+(,|;)/iesU", $code, $res);
    foreach($res[0] as $v){
        $val = str_replace(array('$',',',';'), '', $v);
        $deval = destr($val, 1);
        $vals[$val] = $deval;
        $code = val_replace($code, $val, $deval);
    }

    preg_match_all("/\\$[0-9a-zA-Z\[\]]+=/iesU", $code, $res);
    foreach($res[0] as $v){
        $val = str_replace(array('$','='), '', $v);
        $deval = destr($val, 1);
        $vals[$val] = $deval;
        $code = val_replace($code, $val, $deval);
    }

    preg_match_all("/function\s[0-9a-zA-Z\[\]]+\(/iesU", $code, $res);
    foreach($res[0] as $v){
        $val = str_replace(array('function ','('), '', $v);
        $deval = destr($val, 1);
        $funs[$val] = $deval;
        $code = str_replace('function '.$val.'(', 'function '.$deval.'(', $code);
        $code = str_replace('='.$val.'(', '='.$deval.'(', $code);
        $code = str_replace('return '.$val.'(', 'return '.$deval.'(', $code);
    }
    return $code;
}

function strdecode($str){
    $len = strlen($str);
    $newstr = '';
    for($i=0; $i<$len; $i++){
        $n = ord($str[$i]);
        $newstr .= decode($n);
    }
    return $newstr;
}

function decode($dec){
    if(($dec > 126 || $dec<32) && $dec<>13 && $dec<>10){
        return '['.$dec.']';
    }else{
        return chr($dec);
    }
}

function destr($str, $val=0){
    $k = 0;
    $num = '';
    $n = strlen($str);
    $code = '';
    for($i=0; $i<$n; $i++){
        if($str[$i] == '['){
            $k = 1;
        }elseif($str[$i] == ']'){
            $num = intval($num);
            if($val==1){
                $num = 97 + fmod($num, 25);
            }
            $code .= chr($num);
            $k = 0;
            $num = null;
        }else{
            if($k == 1){
                $num .= $str[$i];
            }else{
                $code .= $str[$i];
            }
        }
    }
    return $code;
}
?>