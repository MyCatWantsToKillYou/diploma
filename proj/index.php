<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Автоматическое заполнение документов</title>
<style type="text/css">

.tabs {
    width: 100%;
    height: 220px;
}
.tabs ul,
.tabs li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.tabs,
.tabs input[type="radio"]:checked + label {
    position: relative;
}
.tabs li,
.tabs input[type="radio"] + label {
    display: inline-block;
}
.tabs li > div,
.tabs input[type="radio"] {
    position: absolute;
}
.tabs li > div,
.tabs input[type="radio"] + label {
    border: solid 1px #ccc;
}
.tabs {
font: normal 11px Arial, Sans-serif;
    color: #404040;
}
.tabs li {
    vertical-align: top;
}
.tabs li:first-child {
margin-left: 8px;
}
.tabs li > div {
    top: 33px;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 8px;
    overflow: auto;
    background: #fff;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.tabs input[type="radio"] + label {
    margin: 0 2px 0 0;
    padding: 0 18px;
    line-height: 32px;
    background: #f1f1f1;
    text-align: center;
    border-radius: 5px 5px 0 0;
    cursor: pointer;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
}
.tabs input[type="radio"]:checked + label {
    z-index: 1;
    background: #fff;
    border-bottom-color: #fff;
    cursor: default;
}
.tabs input[type="radio"] {
    opacity: 0;
}
.tabs input[type="radio"] ~ div {
    display: none;
}
.tabs input[type="radio"]:checked:not(:disabled) ~ div {
    display: block;
}
.tabs input[type="radio"]:disabled + label {
    opacity: .5;
    cursor: no-drop;
}
</style></head>

<body>


<div id="main-body">
<p align="center"><span class="title1"></span>
</p>

<h2>Демонстрация</h2>
<form action="/proj/FromDB.php" method="post" enctype="multipart/form-data">
  Файлы:
  <input name="userfile[]" type="file" id="file" multiple="multiple" /> 
  <br />
  <br />

  <div class="tabs">
  <ul>
    <li>
     <input type="radio" name="tabs-0" checked="checked" id="tabs-0-0" />
        <label for="tabs-0-0">Вкладка 1</label>
     <div>
        <h3>Номер</h3>
         <p><input type="text" name="number"/>
         </p>
         <h3>Название организации</h3>
         <p><input type="text" name="number"/>
         </p>
    </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-1" />
       <label for="tabs-0-1">Вкладка 2</label>
     <div>
       <h3>Зловещий повелитель</h3>
        <p>В стародавние времена в одном мусорном контейнере жил-был эльф-полукровка. Звали его Лавруша, но он
           просил чтобы к нему обращались не иначе как Лаврентий Павлович. Из pодных и близких y него была одна
            нянечка, Арина Родионовна.И в один прекрасный день с ним встречается побитый сосед. И говорит: -
            Как, ты еще жив?! Герой в упор его не замечает. Тогда странный собеседник говорит: - Враг у ворот! И
            герой вынужден покинуть родные места. Он бежит, и деревья своими ветвями хлещут его в лицо. А
            странный визитер падает замертво.
         </p>
    </div>
    </li>
    <li>
      <input type="radio" name="tabs-0" id="tabs-0-2" />
        <label for="tabs-0-2">Вкладка 3</label>
      <div>
        <h3>Одинокий цветок</h3>
        <p>Когда-то в одном маленьком селе жил-был хулиганистый, задиристый, но очень добрый в душе паренек.
           Звали его как отца, но похож он был на соседа. Из pодных и близких y него была сестрица Аленушка,
           подлюка редкая. И вот однажды к немy подходит стpанно выглядящий человек. И говорит: - Следуй за
           мной! Герой прикидывает, куда бы перепрятать накопленное золотишко. Тогда странный собеседник
           говорит: - Я заболтаю тебя до смерти!
        </p>
      </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-3" disabled="disabled" />
        <label for="tabs-0-3">Вкладка 4</label>
     <div>
       <h3>Разрушая одиночку</h3>
       <p>Главный злодей растерян. Он-то думал, что это он Хороший, а оказалось совсем наоборот. Не в силах
          перенести это потрясение злодей делает себе харакири двуручным мечом.
          Все делают вид, что счастливы. А главный герой понимает, что исполнил свое предназначение, и теперь он
          может вернуться домой, чтобы в сытости и довольстве прозябать до самой старости.</p>
     </div>
   </li>
  </ul>
</div>
<br />
  <input type="submit" value="Сгенерировать" />
</form>


</table>





</div>
</html>
