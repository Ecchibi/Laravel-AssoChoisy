let button = document.getElementById("Buttonwola");
let table = document.getElementById("tableHide");

button.addEventListener("click", () => {
  if(getComputedStyle(table).display != "none"){
   table.style.display = "none";
   } 
else {
   table.style.display = "table";
  }
})
