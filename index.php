<?php

require "CProducts.php";

$amount = 3;

/*$today = date("Y-m-d");
$estuday = mktime();
$qstuday = mktime( 10,25,22,6,03,2022);
$astuday = mktime( 10,25,22,6,20,2022);
$astuday = mktime( 10,25,22,5,20,2022);
echo $astuday;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tables</title>
    <link type="text/css" rel="stylesheet" href="css/demo.css">
    <!--<script type="text/javascript" language="javascript" src="js/jquery.js"></script>-->
    <!--<script type="text/javascript" language="javascript" src="js/jquery-3.6.0.min.js"></script>-->
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js



"></script>
    <script type="text/javascript" language="javascript" src="js/pub.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?
echo "<tbody>";
echo "<table><tr><td align='center'>ID</td><td align='center'>ID_PR</td><td align='center'>NAME</td><td align='center'>PRICE</td><td align='center'>ARTICLE</td><td align='center'>QUANTITY</td><td align='center'>Value</td><td align='center'>DATE_CREATE</td></tr>";

?>
<pre><?
    $Products_q = CProducts::Products($conn, $amount);
    $Products_d = CProducts::ProductsActual($Products_q);
    CProducts::HiddenAction($conn,1,1);


    foreach ($Products_d as $row => $arr) {

        if ($arr["pub"] == 1) {
            echo "<tr><td align='center'>" .       $arr["id"]
                    . "</td><td align='center'>" . $arr["PRODUCT_ID"]
                    . "</td><td align='center'>" . $arr["PRODUCT_NAME"]
                    . "</td><td align='center'>" . $arr["PRODUCT_PRICE"]
                    . "</td><td align='center'>" . $arr["PRODUCT_ARTICLE"]
                    . "</td><td align='center'>" . $arr["PRODUCT_QUANTITY"]
                    . "</td>"
?>
                    <td align='center'>
                    <form method='post' action='quanty_minus.php'>
                    <input type='hidden' id='minus_id' name='quanty_minus' value='-1' onclick=''>
                    <input type='hidden' id='id' name='id' value="<? echo $arr["id"] ?>" onclick=''>
                    <div class='counter'><button class='counter__minus'>−</button></div>
                    </form>

                    <form method='post' action='quanty_plus.php'>
                    <input type='hidden' id='plus_id' name='quanty_plus' value='1' onclick=''>
                    <input type='hidden' id='id' name='id' value="<? echo $arr["id"] ?>" onclick=''>
                    <button class='counter__plus'> + </button>
                    </div>
                    </form>
                    </td>
            
                    <td align='center'> <? date("Y-m-d", $arr["DATE_CREATE"])?> </td>

                   <!-- "<form id='tf1' name='tf1' action=''>" .
                    /*"<input type='hidden' name='first' id='first'>" .*/
                    "<input type='button' id='tf1' onclick=\"mytoggle();\" value='Скрыть' />" . "</form>" .
                   /* "<input type='button' id='tf1' onclick=\"mytoggle('{$arr['id']}');\" value='Скрыть' />" . "</form>" .*/

                    "<form action='ajax.php' method='POST'>".
                    "<input type='text' name='a'/>".
                    "<br />".
                    "<button type='button'>OK</button>".
                    "</form>"-->

<!--            <script>
 $(document).ready(function () {
     $('button').click(function() {

         var strInForm = $('form').serialize();

         $.ajax({
             url: "ajax.php",
             cache: false,
             type: "POST",
             dataType: 'json',
             data: strInForm,
             success: function (str) {
                 $('p').text('Yes!');
                 //обращаемся к массиву по индексу
                 $('label').text(str[0]);
             },
             error: function() {
                 $('p').text('Error!');
             }
         });
     });
 });
</script>-->

            <!-- <script type='text/javascript'>
                    function mytoggle(){
                    let x=document.getElementById('tf1').value;

                    xhttp=new XMLHttpRequest();
                    xhttp.onreadystatechange=function(){
                    if (xhttp.readyState==4 && xhttp.status==200)
                    document.getElementById('ajax').innerHTML=xhttp.responseText;
                }
                    xhttp.open('GET','ajax.php?x='x+',true);
                    xhttp.send(x);
                }
                </script>-->

  <?
            /*"<button onclick=\"mytoggle('{$arr['id']}')\">Скрыть</button> </p>".*/


                    /*$res=CProducts::HiddenAction($conn);

                    <input type="hidden" name="name_prod" value="{{ $product_id[$id-1]['name'] }}">

                    do{
                    $i++;
                    echo"<td><div class='pub' title='".$res['id']."'>".$res['pub']."</div></td>";
                    }
                    while(
                            /* @$res = mysql_fetch_array($sql)*/
                    //  $res = CProducts::HiddenAction($conn)

                    //     );*/

                    "</td></tr><br>";
        } else {
            echo "<tr><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . "Скрыто" .
                "</td></tr><br>";
        }

    }
    echo "</tbody>";


    /*$("#h" + num).toggle();*/

    /* $.ajax({
         type: 'POST',
         contentType: 'application/json',
         url: 'ajax.php',
         data: {data: data},
         dataType: "json",
         success: function(data) {
             alert(data);
         },
         error:  function(xhr, str){
             alert('Возникла ошибка: ' + xhr.responseCode);
         }
     });*/


    /*  $.ajax({
          type: 'POST',
          contentType: 'application/json',
          url: 'ajax.php',
          data: {data: data},
          dataType: "json",
          success: function(data) {
              alert(data);
          },
          error:  function(xhr, str){
              alert('Возникла ошибка: ' + xhr.responseCode);
          }
      });*/


    /* $.ajax({
         type:'post',
         url: 'ajax.php',          /!* Куда пойдет запрос *!/
         method: 'post',             /!* Метод передачи (post или get) *!/
         dataType: 'json',          /!* Тип данных в ответе (xml, json, script, html). *!/
         contentType: 'application/json',
         data: {id: num},           /!* Параметры передаваемые в запросе. *!/
         success: function(data){   /!* функция которая будет выполнена после успешного запроса.  *!/
             alert(data);           /!* В переменной data содержится ответ от ajax.php. *!/
         }
     });*/
    ?>


</body>
</html>


