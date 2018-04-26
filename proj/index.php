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
      <table border="1" width="150px" align="center" id="room" />
 
 <tr>
    	<td colspan="11"><input type="text" name="roomName" placeholder= "Название кабинета"  size="50" /></td>
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
    <td width="11%"><input type="text"  name="doorQuan" placeholder="Количество" size="10" /></td>
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
    <input type="button" onclick="createTable()" id="creat" value="Добавить кабинет" />
</div>
<body></body>
    </div>
    </li>
    <li>
      <input type="radio" name="tabs-0" id="tabs-0-2" />
        <label for="tabs-0-2">ИСПДн</label>
      <div>
        <h3>Количество ИСПДн</h3>
        <p><input type="text"  name="ispdnQuan" size="3" />
     
        <table border="1" width="150px" align="center">
    <tr>
        <td><input type="text"  name="ispdnName" placeholder="Название ИСПДн" size="30" /></td>
    </tr>
    <tr>
        <td><input type="text"  name="ispdnNumber" placeholder="Порядковый номер" size="30" /></td>
    </tr>
    <tr>
        <td><textarea rows="15" cols="137" name="text" placeholder="Перечень ПДн в ИСПДн(через точку с запятой)"></textarea></td>
    </tr>
    <tr>
        <td><input type="text"  name="ispdnArmQuan" placeholder="Количество АРМ" size="20"/></td>
    </tr>
    <tr>
        <td><input type="text"  name="ispdnArmNumber" placeholder="Номера АРМ" size="20" /></td>
    </tr>
    <tr>
        <td><input type="text"  name="level" placeholder="Уровень защищённости" size="20"/></td>
    </tr>
    <tr>
        <td><input type="text"  name="type" placeholder="Тип угрозы" size="20" /></td>
    </tr>
</table>
      </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-3"/>
        <label for="tabs-0-3">АРМ</label>
     <div>
       <h3>Количество АРМ(всего)</h3>
       <p><input type="text"  name="armQuantity" size="3" /></p>
       <table border="1" width="150px" align="center">
       	<tbody id="arm">
    <tr>
        <td><input type="text"  name="armNumber" placeholder="№ АРМ" size="20"/></td>
    </tr>
    <tr>
    	<th>
    		Системное ПО &nbsp;<input type="button" onclick='createRowSys()' value="+" />
    	</th>

    </tr>
    <tr>
        <td><input type="text"  name="sysPO1" placeholder="Системное ПО" size="50"/></td> 

    </tr> 
    
    <tr>
    	<th>
    		Прикладное ПО &nbsp;<input type="button" onclick='createRowApp()' value="+" />
    	</th>
    </tr>
    <tr>
        <td><input type="text"  name="appliedPO1" placeholder="Прикладное ПО" size="50"/></td>
    </tr>
</tbody>
</table>
<br></br>
     </div>
     <script type="text/javascript">
     	  var i = 2;
	var j = 3;
    function createRowSys() {
      var table = document.getElementById("arm"); // find table to append to
      var row = table.insertRow(j);
      var col = document.createElement('td'); // create column node
      row.appendChild(col); // append first column to row
      col.innerHTML = "<input type=\"text\" " +"name=\"sysPO"+i+"\"" + "placeholder=\"Системное ПО\" size=\"50\"/>"; // put data in first column
      i++;
      j++;
    }
    var k = 2;
    var m = 5;
    function createRowApp() {
      var table = document.getElementById("arm"); // find table to append to
      var row = table.insertRow(m);
      var col = document.createElement('td'); // create column node
      row.appendChild(col); // append first column to row
      col.innerHTML = "<input type=\"text\" " +"name=\"appliedPO"+k+"\"" + "placeholder=\"Прикладное ПО\" size=\"50\"/>"; // put data in first column
      k++;
      m++;
    }
    function createTable() {
    var body = document.getElementsByTagName('div')[3];
    var tbl = document.createElement('table');
    tbl.style.width = '70%';
    tbl.setAttribute('border', '1');
    tbl.setAttribute('align', 'center');
    var row = document.createElement('tr');
    var col = document.createElement('td');
    row.appendChild(col); // append first column to row
      col.innerHTML = "<input type=\"text\" " +"name=\"roomName"+1+"\"" + "placeholder=\"Название кабинета\" size=\"50\"/>";
    var row1 = document.createElement('tr');
    var col1 = document.createElement('td');
    row1.appendChild(col1); // append first column to row
    col1.innerHTML = "<input type=\"text\" name=\"cabinFIO\" placeholder= \"ФИО ответственного\"  size=\"50\" /> <input type=\"text\" name=\"post\" placeholder= \"Должность\"  size=\"25\" />";

	tbl.appendChild(row); 
	tbl.appendChild(row1); 
    body.appendChild(tbl)
}
     </script>
   </li>
  </ul>
</div>
<br />
  <input type="submit" value="Сгенерировать" />
</form>


</table>





</div>
</html>
