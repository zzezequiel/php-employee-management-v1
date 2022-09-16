 //import * as data from "../../resources/employees.json";
//const jsonData = new Request('../../resources/employees.json');
//console.log(jsonData["name"]);


let data = fetch("../resources/employees.json")
.then(response => {
   return response.json();
})
.then(jsondata => console.log(jsondata));



