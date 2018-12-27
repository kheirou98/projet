	 
	  var modal = document.getElementById('myModal');
	  var span = document.getElementsByClassName("close")[0];
	  var bouton=document.getElementById("ajout_formation");

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
bouton.onclick=function(){
modal.style.display = "block";
}
document.getElementsByClassName("close")[0].onclick=function(){
    modal.style.display = "none";
}
document.getElementById("ok").onclick=function(){
	var nom = document.getElementById('nom_formation').value;
	var volH = parseInt(document.getElementById('volume_horaire').value);
	var prixH = parseInt(document.getElementById('prixHc').value);
	var taxe = parseInt(document.getElementById('Taxe').value);
	var result = prixH + (prixH*taxe/100);
    var tr = document.createElement('tr');
    document.getElementById('tableau').appendChild(tr);    
    var td = document.createElement('td');
    tr.appendChild(td);
    var tdText = document.createTextNode(nom.toString());
    td.appendChild(tdText);
	td.className="entete2";
	var td = document.createElement('td');
    tr.appendChild(td);
	var tdText_1 = document.createTextNode(volH.toString());
    td.appendChild(tdText_1);
	td.className="td";
	var td = document.createElement('td');
    tr.appendChild(td);
	var tdText_2 = document.createTextNode(prixH.toString());
    td.appendChild(tdText_2);
	td.className="td";
	var td = document.createElement('td');
    tr.appendChild(td);
	var tdText_3 = document.createTextNode(taxe.toString());
    td.appendChild(tdText_3);
	td.className="td";
	var td = document.createElement('td');
    tr.appendChild(td);
	td.className="td";
	var tdText_4 = document.createTextNode(result.toString());
    td.appendChild(tdText_4);
	td.className="td";
}
	  var table = document.getElementsByClassName('tableau');
      var node = table[0].children[1].children;
 for (var i = 0; i < node.length ; i++) {
        node[i].children[4].innerHTML = parseInt(node[i].children[2].innerText) + parseInt(node[i].children[2].innerText)*parseInt(node[i].children[3].innerText)/100 ;
}