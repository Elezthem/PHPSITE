<?php
    //session_start();

    $title = "Главная страница";
    require_once "blocks/header.php";

//    function info() {
//        global $x;
//        $x = 0;
//    }

//    function click() {
        // static $count;
//        $count = 0;
//        $count++;
//        echo $count.'<br>';
//    }

//    click();
//    click();
//    click();

//    $x = 10;
//    info();
//    echo $x;

//    function summary($arr) {
//        foreach($arr as $value) {
//            $summa += $value;
//        }

//        return $summa;
//    }

//    $list = [4, 2, 3];
//    echo summary($list)."<br>";
//    echo summary([6, 7, 3])."<br>";


//    function info($word) {
//        echo "$word<br>";
//    }

//    function math($x, $y) {
//        return $x + $y;
//    }

//    $res_1 = math(4, 6);
//    $res_2 = math(8, 6);

//    info($res_1);
//    info($res_2);


    //for($i = 100; $i >= 20; $i -= 5) 
        //echo $i. '<br>';
    
    //$i = 1;
    //while($i <= 10) {
      //  echo $i.'<br>';
        //$i++;
    //}

    //$isHasHouse = true;
    //while($isHasHouse) {
    //    echo $i.'<br>';
    //}

//    $i = 100;
//    do {
//        echo $i;
//    } while($i < 10);

//    for($el = 100; $el > 10; $el /= 2) {
//        if($el < 15)
//            break;
//        
//        if($el % 2 == 0)
//            continue;

//        echo $el.'<br>';
//    }

//    $list = [5, 7, 3, 8, "text", 45.9];

//    for($i = 0; $i < count($list); $i++)
//        echo "Element $i: $list[$i]<br>";

//    $list = ["age" => 16, "name" => "Sergey", "hobby" => "Coding"];
//    $arr = [5, 6, 8, 9];

//    foreach ($list as $item => $value) {
//        echo "Key: $item. Value: $value.<br>";
//    }

//    foreach ($arr as $i => $value)
//        echo "Index: $i. Value: $value.<br>";

//    $nums = array(4, 5, 8, 9, 11, 1, -90, 3);
//    $nums[1] = 45;
//    echo $nums[1].'<br>';

//    $arr = [4, true, 7, "9", 0.5, 'c', 33, 17];
//    $arr[0] = "false";
//    echo $arr[0]. '<br>';

//    $list = ["age" => 16, "name" => "Sergey", "hobby" => "Programming"];
//    $list["name"] = "Sasha";
//    echo $list["name"]. '<br>';

//    $matrix = [
//            [4, 7, 9],
//            [1, 2, 3],
//            [6, 9, 10, "111"]
//    ];
    
//    $matrix[0][1] = 4;
//    echo $matrix[0][1];


//    $x = 1;

//    switch($x) {
//        case 5:
//            echo "Var: 5";
//            break;
//        case 8:
//            echo "Var: 8";
//            break;
//        case 10:
//            echo "Var: 10";
//            break;
//        case 21:
//            echo "Var: 21";
//            break;
//        default:
//            echo "Default work";
//            break;
//    }

    //$a = 5;
    //$str = "Hello";
    
    //$isWeatherGood = false;

    //if($str == "Hello" && !$isWeatherGood)
        //echo 'First j4j';
    //else if($a == 5) {
        //$res = "Second j44444j";
        //echo $res;

        //if($str == "Hello") {
            //echo "<br>Yes";
        //}
    //}
    //else if($a > 50)
        //echo ('$a > 50');
    //else if($a <= 30)
        //echo '$a <= 30'; 
     //else 
        //echo 'else';
    

    //$str = "Hello";
    //echo "VAR: $str" . 'World! ';
    //echo "<input type=\"text\"><br>";

    //$length = strlen($str);
    //echo strtoupper (trim("       Star Elezthem          "));
    //echo $length;

    //echo md5("Krutoy 4el");

//    $x = 10;
//    $y = 20;

//    echo $x + $y.'<br>';
//    echo $x - $y.'<br>';
//    echo $x * $y.'<br>';
//    echo $x / $y.'<br>';
//    echo $x % $y.'<br>';

//    $x += 10; // $x = $x + 10;
//    $y -= 10; // $y = $y - 10;
//    echo $x.'<br>';
//    echo $y.'<br>';

//    $x++; // $x += 1;
//    $x--; // $x -= 1;

//    echo M_PI.'<br>';
//    echo M_E.'<br>';

//    echo abs(-22).'<br>';
//    echo ceil(3.1).'<br>';
//    echo floor(3.9).'<br>';
//    echo round(3.5576775775, 2).'<br>';
//    $rand =  mt_rand(1, 20);
//    $rand++;
//    echo $rand.'<br>';

//    echo min(2, 4, 6, 1, 3, 7, 8, 9).'<br>';
//    echo max(2, 4, 6, 1, 3, 7, 8, 9).'<br>';

//    define("MY_AGE", 26);
//    echo "MY_AGE" . '<br>';

//    $number = 5;
    // $number = 45;
//    $num = -0.55;

//    $str = "Переменная";
//    $bool = false;
//    
//    $a = 0.5;
//    $b = "0.5";

//    echo $a + floatval($b);

//    echo $str . ': ' . $number . ' Var 2: ' . $num;

?>
<h1>Главная страница</h1>
<?php
    // $user_name = "Sergey";
    // setcookie("user_name", $user_name, time() + 180);
    // print_r($_COOKIE);

    // setcookie("user_name", $user_name, time() - 180);

    // echo $_COOKIE['user_name'];

    // $_SESSION['user_name'] = $user_name;
    
    //unset($_SESSION['user_name']);
    //session_destroy();

    //if($_SESSION['user_name'] = "Alex")
     //       echo "Сессия установлена!";

    // $message = "Сообщение";
    // $to = "admin@elezthem.com";
    // $from = "example@elezthem.com";
    // $subject = "Тема сообщения";

    // $subject = "?utf-8?B?".base64_encode($subject)."?=";
    // $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=urf-8\r\n";

    // mail($to, $subject, $message, $headers);

    //phpinfo();

    //print_r($_SERVER);

    //echo '<pre>';
    //print_r($_SERVER);
    //echo '</pre>';

    //echo $_SERVER['HPPTS'];
    //echo $_SERVER['HTTP_HOST'].' - '.$_SERVER['REQUEST_URI'];
    //echo $_SERVER['HTTP_USER_AGENT'];
    
//    if($_GET['sourse'] != "") {
//        $link = explode("?source=", $_SERVER['REQUEST_URI']);
//        $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

//        header('HTTP/1.1 301 Moved Parmanently');
//        header('Location: '.$redirect);
//        exit();
//    }

    //$file = fopen("text.txt", "a");
    
    //fwrite($file, "\nHello World!\nkak dela?");

    //fclose($file);

    //$filename = "text.txt";

    //$file = fopen($filename, "r");

    //$content = fread($file, filesize($filename));

    //fclose($file);

    //echo "<pre>".$content."</pre><br>";

    //file_put_contents("a.txt", "Privet\nYAAAAAA");
    //echo file_get_contents("a.txt")."<br>";

    //echo file_exists("a.txt")."<br>";
    //rename("a.txt", "new_name.txt");
    //unlink("new_name.txt");

    //chmod(__FILE__, 0777);
    //echo fileperms(__FILE__);
    
    //$lis = [5, 7, 3, 1, 2, 4, 8];
    //unset($lis[1]);
    //$lis = array_values($lis);
    //rsort($lis);
    
    //$arr = array_slice($lis, 2, 2);
    //print_r($arr);
    //echo "<br>";

    //$arr_1 = [5, 7];
    //$arr_2 = [6, 8, 9];
    //$arr_3 = array_merge($arr_1, $arr_2);
    //print_r($arr_3);
    //echo "<br>";

    //shuffle($lis);
    //sort($lis);
    //if(in_array(3, $lis) == "")
    //        echo "Not found ";
    //    else
    //        echo "Found ";
    
    
    //print_r($lis);
    //echo "<br>";

    //$x = "10";
    //echo gettype($x). '<br>';
    //echo is_numeric($x). '<br>';
    //echo is_array($x). '<br>';

    //$str = "Example";
    //echo strpos($str, "am"). '<br>';

    //$words = "John,bob,alex";
    //$arr_words = explode(",", $words);
    //print_r($arr_words);
    //echo '<br>'.implode(" | ", $arr_words);

    //echo date('m-l H:i:s', time() - 10000).'<br>';
    //echo date('m-d H:i:s', strtotime("-1 Week -2 Day -3 Hour"));
    //echo date('m-d H:i:s', strtotime("next Month"));

    require_once "blocks/footer.php";
?>