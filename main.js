function BTN(){
    var input = document.getElementById("input");
    var task = input.value;

    if(task === ""){
        alert('LU BELUM NGETIK BEJIR');
        return;
    }
    
    var table = document.getElementById('table');
    var row = table.insertRow(-1);

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = task;
    cell2.innerHTML = '<button type="button" onclick="dlt(this)" >Delete</button>';

    input.value = "" ;

 }
 function dlt(btn){
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
 }