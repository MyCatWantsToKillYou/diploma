<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Автоматическое заполнение документов</title>
<style type="text/css">

.tabs {
    width: 100%;
    height: 700px;
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
TABLE {
	
    width: 70%; /* Ширина второй колонки */
    text-align: center; /* Выравнивание по правому краю */
   
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
        <label for="tabs-0-0">Общее</label>
     <div>
        <h3>Полное название организации</h3>
         <p><input type="text" name="orgName" size="100" />
         <h3>Адрес организации</h3>
         <input type="text" name="orgAddr" placeholder="Курганская обл., г. Курган, ул. Строительная, д.25, офис 404" size="100" />
         <h3>Дата проведения обследования</h3>
         <p><input type="date" name="survDate"></p>
         <h3>Номер и дата заключения договора</h3>
         <p><input type="text" name="contractNum"/> &nbsp;
         <input type="date" name="contractDate">
         <h3>ФИО и должность ответственного за электропитание</h3>
         <p><input type="text" placeholder="Иванов Иван Иванович" name="respName"/> &nbsp;
         <input type="text" placeholder="Заведующий" name="contractDate">
         <h3>Количество телефонных линий &nbsp;&nbsp;
         <input type="text"  name="phoneQuantity" size="3" />
         <h3>Пожарная безопасность(организация)</h3>
         <p><input type="text" name="fireSec" placeholder= "ООО 'Рога и копыта'"  size="50" />
         <h3>Тревожная кнопка(организация)</h3>
         <p><input type="text" name="alarm" placeholder= "ООО 'Рога и копыта'"  size="50" />
         <h3>Обслуживание комьютеров(организация)</h3>
         <p><input type="text" name="compService" placeholder= "ООО 'Рога и копыта'"  size="50" />
         <h3>Официальный сайт и организация ответственная за наполнение</h3>
         <p><input type="text" name="site" placeholder= "https://javascript.ru/forum/jquery/"  size="50" /> &nbsp; 
         	<input type="text" placeholder="ООО 'Рога и копыта'"  name="orgSite" size="50">
    </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-1" />
       <label for="tabs-0-1">Кабинеты</label>
     <div>
      <table border="1" width="150px" align="center"  >
 
 <tr>
    	<td colspan="11"><input type="text" name="alarm" placeholder= "Название кабинета"  size="50" />
    </td>
</tr>
     <tr>
     	<td colspan="11">
     	<input type="text" name="cabinFIO" placeholder= "ФИО ответственного"  size="50" /> 
     	<input type="text" name="post" placeholder= "Должность"  size="25" />
     </td>
 </tr>
 <tr>
    <th width="33%" colspan="3">Двери</th>
    <th width="33%" colspan="3">Окна</th>
    <th width="33%" colspan="4">Сейф</th>
</tr>
<tr>
    <td width="11%"><input type="text"  name="doorQuan" placeholder="Количество" size="8" /></td>
    <td width="11%"><input type="text"  name="doorMat" placeholder="Материал" size="10" /></td>
    <td width="11%"><input type="text"  name="Lock" placeholder="Замок" size="10" /></td>
    <td width="11%"><input type="text"  name="winQuan" placeholder="Количество" size="10" /></td>
    <td width="11%"><input type="text"  name="winMat" placeholder="Материал" size="10" /></td>
    <td width="11%"><input type="text"  name="lattice" placeholder="Решётка" size="10" /></td>
    <td width="11%" colspan="4"><input type="text"  name="safeQuan" placeholder="Количество" size="8" /></td>
</tr>
<tr>
    <th width="25%" colspan="3">Электропитание</th>
    <th width="25%" colspan="3">Сигнализация</th>
    <th width="25%" colspan="3">Сеть</th>
    <th width="25%" colspan="3">Телефон</th>
</tr>
<tr>
    <th width="25%" colspan="3"><input type="checkbox"  name="electicity"/></th>
    <th width="25%" colspan="3"><input type="checkbox"  name="signalization"/></th>
    <th width="25%" colspan="3"><input type="checkbox"  name="net"/></th>
    <th width="25%" colspan="3"><input type="checkbox"  name="phone"/></th>
</tr>
      </table>
 <div>
    <input type="button" value="Create Table" onclick="createTable()" />
</div>
<script language="javascript" type="text/javascript">
<!--
function createTable() {
    // Create table.
    var table = document.createElement('table');
    // Insert New Row for table at index '0'.
    var row1 = table.insertRow(0);
    // Insert New Column for Row1 at index '0'.
    var row1col1 = row1.insertCell(0);
    row1col1.innerHTML = 'Col1';
    // Insert New Column for Row1 at index '1'.
    var row1col2 = row1.insertCell(1);
    row1col2.innerHTML = 'Col2';
    // Insert New Column for Row1 at index '2'.
    var row1col3 = row1.insertCell(2);
    row1col3.innerHTML = 'Col3';
    // Append Table into div.
    var div = document.getElementById('divTable');
    div.appendChild(table);
}

//-->
</script> 

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
