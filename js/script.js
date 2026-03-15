document.addEventListener("DOMContentLoaded", function(){

let form = document.getElementById("boekForm");

if(form){

form.addEventListener("submit", function(e){

let jaar = document.querySelector("input[name='jaar']").value;
let beoordeling = document.querySelector("input[name='Beoordeling']").value;

if(jaar < 1000 || jaar > 2100){
alert("Jaar moet tussen 1000 en 2100 liggen");
e.preventDefault();
}

if(beoordeling < 1 || beoordeling > 10){
alert("Beoordeling moet tussen 1 en 10 liggen");
e.preventDefault();
}

});

}

});