<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
     $siteName = "Recipes1";
    $menu = array(
        "Main",
        "Contacts",
        "List recipes"
    );

    $sortBlock = [
        ["title", "icon", "desc"],
        ["title1", "icon1", "desc1"]
    ];


    $sortBlock1 = [
        "icon1" =>  ["title", "desc"],
        "icon2" =>  ["title1", "desc1"]
    ];


    $sortTitles = [
        "icon1" =>  "title",
        "icon2" =>  "title1"
    ];

    $sortDesc = [
        "icon1" =>  "desc",
        "icon2" =>  "desc1"
    ];
    
    
    
    ?>

<?echo $siteName;?>

<? foreach ($sortTitles as $val):?>
    
   <div><?=$key?> : <?=$val?></div>
   <div><?=$key?> : <?=$sortDesc[$key]?></div>
<? endforeach?>

<? echo "<pre>"; print_r($sortBlock); echo "</pre>"; ?>
<? print_r($sortBlock);?>


<?
$phone1 = "+7 (927) 000-00-07";

function trimTel ($phone) {
    // $symbols = array(" ", "(", ")", "-");
    // $clearPhone = str_replace($symbols, "", $phone);
    return str_replace(array(" ", "(", ")", "-"), "", $phone);;
 }
?>
<? echo "<pre>"; print_r(trimTel($phone1)); echo "</pre>"; ?>

<a href="tel:<?echo trimTel($phone1);?>"><?=$phone1?></a>

</body>
</html>