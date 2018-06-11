	  var i = 1;
	var j = 3;
  var m = 5;
    function createRowSys(id) {
      var table = document.getElementById(id); // находим таблицу
      var row = table.insertRow(j);           //вставляем строку
      var col = document.createElement('td'); // создаём столбец
      row.appendChild(col); // вставляем столбец в строку
      col.innerHTML = "<input type=\"text\" " +"name=\"sysPO"+i+"\""+"id=\"sysPO"+i+"\"" + "placeholder=\"Системное ПО\" size=\"50\"/>"; 
      //меняем идентификаторы, чтобы избежать конфликтов
      i++;
      m++;
    }
    var k = 1;
    function createRowApp(id) {
      var table = document.getElementById(id); 
      var row = table.insertRow(m);
      var col = document.createElement('td'); 
      row.appendChild(col); 
      col.innerHTML = "<input type=\"text\" " +"name=\"appliedPO"+k+"\""+"id=\"appliedPO"+k+"\""+ "placeholder=\"Прикладное ПО\" size=\"50\"/>"; 
      k++;
      m++;
    }
    var n=1;
    var l=1;
    var b=1;
    var q=1;
    function cloneTable(container,table) {
    var strTable = table;
    var div = document.getElementById(container);
    var table = document.getElementById(table);
    var clone = table.cloneNode(true);
    clone.id ="newID";
    div.appendChild(clone);
    if(strTable == 'room'){
    var names = ["roomName1","level","cabinFIO","postFIO",
    			"doorMat","Lock",
    			"winMat","lattice",
    			"safeQuan", "electicity", "signalization", 
    			"net", "phone"];
    for(i=0;i<names.length;i++){
    document.getElementById(names[i]).setAttribute("name",names[i]+n);
}
    n++;
}
else if(strTable == 'ispdn'){
	var names = ["ispdnName","text",
    			"ispdnArmQuan","ispdnArmNumber","levelSec",
    			"type"];
    for(i=0;i<names.length;i++){
    document.getElementById(names[i]).setAttribute("name",names[i]+l);
}
l++;
}
else if(strTable=="armTable"){
  var names = ["armNumber1","sysPO1","appliedPO1",
  "sysPO2","appliedPO2",
  "sysPO3","appliedPO3","sysPO4","appliedPO4", "sysPO5","appliedPO5", "sysPO6","appliedPO6",];
  for(i=0;i<names.length;i++){
    document.getElementById(names[i]).setAttribute("name",names[i]+b);
  }
  //document.getElementById("btnAddSys").setAttribute("id","btnAddSys"+q);
  //document.getElementById("btnAddSys").setAttribute("onclick","createRowSys(\"newID\")");
  b++;
}
}



