<!doctype html>
<html lang="ru">
<head>
<title>Редактирование БД</title>
<style>
.button8 {
  display: inline-block;
  color: black;
  font-weight: 700;
  text-decoration: none;
  user-select: none;
  padding: .5em 2em;
  outline: none;
  border: 1px solid;
  border-radius: 1px;
  transition: 0.2s;
} 
.button8:hover { background: rgba(255,255,255,.2); }
.button8:active { background: white; }

.new-select-style-wpandyou  {
    border-radius: 0;
    background: transparent;
    height: 34px;
    padding: 5px;
    border: 1px solid;
    font-size: 14px;
    line-height: 1;
    -webkit-appearance: none;
    width: 172px;
   }


</style>
</head>
<body>



</body>
<body>
	<table>
<form action="InsertDB.php" method="post">
	<td>Выберите таблицу :</td>
	<td><select name="sel" class="new-select-style-wpandyou">
        <option value="bank">Банк</option>
        <option value="driver">Водители</option>
        <option value="city">Города</option>
        <option value="shipper">Грузоотправитель</option>
        <option value="Consignee">Грузополучатель</option>
        <option value="units">Единицы измерения</option>
        <option value="ordered">Заказано</option>
        <option value="order">Заказы</option>
        <option value="organization">Организации</option>
        <option value="products">Продукты</option>
        <option value="accounts">Счета</option>
        <option value="transport">Транспорт</option>





    </td>
    <tr>
        <td>Столбец 1:</td>
        <td><input type="text" name="Col0"></td>
    </tr>
    <tr>
        <td>Столбец 2:</td>
        <td><input type="text" name="Col1" > </td>
    </tr>
    <tr>
       <td>Столбец 3:</td>
        <td><input type="text" name="Col2"></td>
    </tr>
    <tr>
       <td>Столбец 4:</td>
        <td><input type="text" name="Col3"></td>
    </tr>
    <tr>
       <td>Столбец 5:</td>
        <td><input type="text" name="Col4"></td>
    </tr>
    <tr>
       <td>Столбец 6:</td>
        <td><input type="text" name="Col5"></td>
    </tr>
    <tr>
       <td>Столбец 7:</td>
        <td><input type="text" name="Col6"></td>
    </tr>
    <tr>
       <td>Столбец 8:</td>
        <td><input type="text" name="Col7"></td>
    </tr>
    <tr>
       <td>Столбец 9:</td>
        <td><input type="text" name="Col8"></td>
    </tr>
    <tr>
       <td>Столбец 10:</td>
        <td><input type="text" name="Col9"></td>
    </tr>
    <tr>
        <td colspan="10"><input type="submit" class="button8" value="Добавить"></td>
    </tr>
</form>
</table>
</body>