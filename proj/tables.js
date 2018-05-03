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
    var n=1;
    var l=1;
    function cloneTable(container,table) {
    var strTable = table;
    var div = document.getElementById(container);
    var table = document.getElementById(table);
    var clone = table.cloneNode(true);
    clone.id ="newID";
    div.appendChild(clone);
    if(strTable == 'room'){
    var names = ["roomName","cabinFIO","post",
    			"doorQuan","doorMat","Lock",
    			"winQuan","winMat","lattice",
    			"safeQuan", "electicity", "signalization", 
    			"net", "phone"];
    for(i=0;i<names.length;i++){
    document.getElementById(names[i]).setAttribute("name",names[i]+n);
   // document.getElementById(names[i]).setAttribute("id", names[i]+n)
}
    n++;
}
else if(strTable == 'ispdn'){
	var names = ["ispdnName","ispdnNumber","text",
    			"ispdnArmQuan","ispdnArmNumber","level",
    			"type"];
    for(i=0;i<names.length;i++){
    document.getElementById(names[i]).setAttribute("name",names[i]+l);
  //  document.getElementById(names[i]).setAttribute("id", names[i]+n)
}
l++;
}
}

