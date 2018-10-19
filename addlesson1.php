<?php
/**
дополнительное задание к уроку
 */
//Объявляем переменные
$UserMessage = '';
if (isset($_GET['UserInt'])) {
$UserInt = $_GET['UserInt'];}//Значение введенное пользователем
$a = 1;
$b = 1;
$UserMessage = NULL;
//$c = NULL;
while ($a < $UserInt)
    {
        $c = $a;
        $a = $a + $b;
        $b = $c;
    }
if ($a > $UserInt)
    {
        $UserMessage =  "Число $UserInt НЕ входит в числовой ряд";
    }elseif ($a == $UserInt)
    {
        $UserMessage = "Число $UserInt входит в числовой ряд";
    }
/*begin:
if (isset($UserInt))
{
    if ($a > $UserInt)
        {
           $UserMessage =  "Число $UserInt НЕ входит в числовой ряд";
        }
        elseif ($a == $UserInt)
            {
                $UserMessage = "Число $UserInt входит в числовой ряд";
            }
            else
                {
                $c = $a;
                $a = $a + $b;
                $b = $c;
                goto begin;
                }
}*/
?>

<!--HTML код -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lesson1</title>
</head>
<body>
<form action="addlesson1.php" method="get">
    <p><input type="text" name="UserInt"></p>
    <p><input type="submit"></p>
    <p><?php echo $UserMessage?></p>

</form>

</body>
</html>