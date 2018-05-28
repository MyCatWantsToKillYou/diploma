<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Автоматическое заполнение документов</title>
<link rel="stylesheet" type="text/css" href="styles.css"></head>

<body>


<div id="main-body">
<p align="center"><span class="title1"></span>
</p>

<h2>Демонстрация</h2>
<form action="FromDB.php" method="post" enctype="multipart/form-data">
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
         <p><input type="text" name="orgName" id="toggle" size="100" />
        <h3>Первое лицо организации</h3>
         <p><input type="text" name="FirstPerson" placeholder="Петров Иван Сидорович" id="toggle" size="50" /> &nbsp; 
        <p><input type="text" name="FirstPersonPost" placeholder="Генеральный директор, заведующий" id="toggle1" size="50" />
         <h3>Адрес организации</h3>
         <input type="text" name="orgAddr" placeholder="Курганская обл., г. Курган, ул. Строительная, д.25, офис 404" size="100" />
         <h3>Дата проведения обследования</h3>
         <p><input type="date" name="survDate"></p>
         <h3>Номер и дата заключения договора</h3>
         <p><input type="text" name="postElectr"/> &nbsp;
         <input type="date" name="contractDate">
         <h3>ФИО и должность ответственного за электропитание</h3>
         <p><input type="text" placeholder="Иванов Иван Иванович" name="respName"/> &nbsp;
         <input type="text" placeholder="Заведующий" name="contractDate">
         <h3>Количество телефонных линий &nbsp;&nbsp;
         <input type="number" min="0"  name="phoneQuantity" size="3" />
         <h3>Пожарная безопасность(организация)</h3>
         <p><input type="text" name="fireSec" placeholder= "ООО 'Рога и копыта'"  size="50" />
         <h3>Тревожная кнопка(организация)</h3>
         <p><input type="text" name="alarm" placeholder= "ООО 'Рога и копыта'"  size="50" />
         <h3>Обслуживание комьютеров(организация)</h3>
         <p><input type="text" name="compService" placeholder= "ООО 'Рога и копыта'"  size="50" />
         <h3>Официальный сайт и организация ответственная за наполнение</h3>
         <p><input type="url" name="site" placeholder= "https://javascript.ru/forum/jquery/"  size="50" /> &nbsp; 
         	<input type="text" placeholder="ООО 'Рога и копыта'"  name="orgSite" size="50">
    </div>
   </li>
   <li>
     <input type="radio"  name="tabs-0" id="tabs-0-1"  />
       <label for="tabs-0-1">Кабинеты &nbsp;
       	<input type="button" onclick="cloneTable('container','room')" id="create"  value="+"/>
       </label>

     <div  id="container">
     	
      <table border="1" width="150px" align="center" id="room" />
 
 <tr>
    	<td colspan="11"><input type="text" name="roomName" id="roomName" placeholder= "Название кабинета"  size="50" />
        <input type="number" name="level" id="level" placeholder= "Этаж"  size="50" /></td>
</tr>
     <tr>
     	<td colspan="12">
     	<input type="text" name="cabinFIO" id="cabinFIO" placeholder= "ФИО ответственного"  size="50" /> 
     	<input type="text" name="postFIO" id="postFIO" placeholder= "Должность"  size="25" />
     </td>
 </tr>
 <tr>
    <th width="33%" colspan="3">Двери</th>
    <th width="33%" colspan="3">Окна</th>
    <th width="33%" colspan="4">Сейф</th>
</tr>
<tr>
    <td width="11%"><input type="text"  name="doorQuan" id="doorQuan" placeholder="Количество" size="10" /></td>
    <td width="11%"><input type="text"  name="doorMat" id="doorMat" placeholder="Материал" size="10" /></td>
    <td width="11%"><input type="text"  name="Lock" id="Lock" placeholder="Замок" size="10" /></td>
    <td width="11%"><input type="text"  name="winQuan" id="winQuan" placeholder="Количество" size="10" /></td>
    <td width="11%"><input type="text"  name="winMat" id="winMat" placeholder="Материал" size="10" /></td>
    <td width="11%"><input type="text"  name="lattice" id="lattice" placeholder="Решётка" size="10" /></td>
    <td width="11%" colspan="4"><input type="text"  name="safeQuan" id="safeQuan" placeholder="Количество" size="8" /></td>
</tr>
<tr>
    <th width="25%" colspan="3">Электропитание</th>
    <th width="25%" colspan="3">Сигнализация</th>
    <th width="25%" colspan="3">Сеть</th>
    <th width="25%" colspan="3">Телефон</th>
</tr>
<tr>
    <th width="25%" colspan="3"><input type="checkbox"  name="electicity" id="electicity" /></th>
    <th width="25%" colspan="3"><input type="checkbox"  name="signalization" id="signalization" /></th>
    <th width="25%" colspan="3"><input type="checkbox"  name="net" id="net" /></th>
    <th width="25%" colspan="3"><input type="checkbox"  name="phone" id="phone" /></th>
</tr>
      </table>

    
     </div>

    </li>
    <li>
      <input type="radio" name="tabs-0" id="tabs-0-2" />
        <label for="tabs-0-2">ИСПДн 
        	<input type="button" onclick="cloneTable('container1','ispdn')" id="create1"  value="+"/>
        </label>
      <div id="container1">
        <h3>Количество ИСПДн</h3>
        <p><input type="number" min="1" name="ispdnQuan" id="ispdnQuan" size="3" />
     
        <table border="1" width="150px" align="center" id="ispdn">
    <tr>
        <td><input type="text"  name="ispdnName" id="ispdnName" placeholder="Название ИСПДн" size="30" /></td>
    </tr>
    <tr>
        <td><input type="text"  name="ispdnNumber" id="ispdnNumber" placeholder="Порядковый номер" size="30" /></td>
    </tr>
    <tr>
        <td><textarea rows="15" cols="137" name="text" id="text" placeholder="Перечень ПДн в ИСПДн(через точку с запятой)"></textarea></td>
    </tr>
    <tr>
        <td><input type="text"  name="ispdnArmQuan" id="ispdnArmQuan" placeholder="Количество АРМ" size="20"/></td>
    </tr>
    <tr>
        <td><input type="text"  name="ispdnArmNumber" id="ispdnArmNumber" placeholder="Номера АРМ" size="20" /></td>
    </tr>
    <tr>
        <td><input type="text"  name="level" id="level" placeholder="Уровень защищённости" size="20"/></td>
    </tr>
    <tr>
        <td><input type="text"  name="type" id="type" placeholder="Тип угрозы" size="20" /></td>
    </tr>
</table>
      </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-3"/>
        <label for="tabs-0-3">АРМ &nbsp;
       	<input type="button" onclick="cloneTable('container2','armTable')" id="create3"  value="+"/></label>
     <div id="container2">
       <h3>Количество АРМ(всего)</h3>
       <p><input type="number" min="1"  name="armQuantity" id="armQuantity" size="3" /></p>
       <table border="1" width="150px" align="center" id="armTable">
       	<tbody id="arm">
    <tr>
        <td><input type="text"  name="armNumber" id="armNumber" placeholder="№ АРМ" size="20"/></td>
    </tr>
    <tr>
    	<th>
    		Системное ПО &nbsp;<input type="button" id="btnAddSys" onclick='createRowSys("armTable")' value="+" />
    	</th>

    </tr>
    <tr>
        <td><input type="text"  name="sysPO" id="sysPO" placeholder="Системное ПО" size="50"/></td> 

    </tr> 
    
    <tr>
    	<th>
    		Прикладное ПО &nbsp;<input type="button" id="btnAddAppl" onclick='createRowApp("armTable")' value="+" />
    	</th>
    </tr>
    <tr>
        <td><input type="text"  name="appliedPO" id="appliedPO" placeholder="Прикладное ПО" size="50"/></td>
    </tr>
</tbody>
</table>
     </div>
     <script src="tables.js" type="text/javascript"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            for(x=0;x<this.files.length;x++){
            var fileName = e.target.files[x].name;
            $( "#toggle" ).css( 'border-color', '#e60000');
            $( "#toggle" ).css( 'border-width', '1px');
            //alert('The file "' + fileName +  '" has been selected.');
        }
        });
    });
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
