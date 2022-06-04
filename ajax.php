<?php
require_once ("db.php");

//строковые данные должны быть в кодировке UTF-8
header('Content-type: text/html; charset=utf-8');

//строка пришла на сервер
$str = $_POST['a'];

//что-то делаем на сервере, преобразуем строку в верхний регистр
$str = strtoupper($str);

//отправляем обратно, помещаем строку в массив
$ara = array($str);

//кодируем массив в строку формата JSON
$str = json_encode($ara);

//возрващаем строку в формате JSON
echo $str;


if (!$conn) {
    die("Connection failed: ");
}
$id = $_GET['id'];
var_dump($id);
echo $id;
die;
$sql = "UPDATE Product SET `Pub`='0' WHERE id=$id";

if ($conn->query($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ";
}
?>

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
                </script>


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

-->
