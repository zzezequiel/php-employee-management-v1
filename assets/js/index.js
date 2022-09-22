const employees = [];
console.log("hola");
const containerRows = document.getElementById("cont-employee");
const dashboard = document.getElementById("dash");
const emplo = document.getElementById("emplo");

function loadAllEmployeesJS() {    
    //indicate where the user is 
    dashboard.style.color = "blue";
    emplo.style.color = "black";
    
    fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })  //it's not necessary to specify GET method as it is default
        .then(response => response.json())
        .then(jsondata => {
            console.log(jsondata);
            renderEmployees(jsondata);
    })
}
            
function renderEmployees(employees) {
    console.log("render");
    
    while (containerRows.firstChild) {
        containerRows.removeChild(containerRows.firstChild);
    }
  
    for (let e = 0; e < employees.length; e++) {
        let employRow = document.createElement("div");
                
        employRow.className = "d-flex justify-content-between  mt-2 pb-1";
        containerRows.appendChild(employRow); //add to div claas container1 
        employRow.innerHTML = `<div type="button" class="container row border-bottom mt-2 pb-2" id="${employees[e].id}">
                    <div class="col text-start fs-4">${employees[e].name}</div>
                    <div class="col text-start me-0 fs-4">${employees[e].lastName}</div>
                    <div class="col text-start me-5 fs-4">${employees[e].email}</div>
                    <div class="col text-start ms-5 fs-4">${employees[e].phoneNumber}</div>
                    </div>

                    <div class="col text-end delete pt-2" id="delete${employees[e].id}" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </div>
                `;
                
        //get IDs
         let id = employees[e].id;
        
        //REdirect Page employee
        employeeInfo = document.getElementById(`${employees[e].id}`);  //add dinamic id to buttons//add dinamic id to buttons  `${employees[e].id}`
        let targetEmId = employeeInfo.getAttribute('id');
      

        employeeInfo.addEventListener("click", function () {
            location.href = `./library/employeeController.php?action=openEmployee&id=${targetEmId}`;
            

        })
        //DELETE
        let deleteEmployee = document.getElementById(`delete${id}`);
        let targetDelId = deleteEmployee.getAttribute('id');
        targetDelId = targetDelId.substring(6);
        
      
        deleteEmployee.addEventListener("click", function () {
            deleteCall(targetDelId);
    })
        function deleteCall(targetDelId) {
            console.log("target:"+targetDelId);
            fetch(`./library/employeeController.php?action=delete&id=${targetDelId}`)
            .then(res => res.json()) ///response.text para vererrores
            .then(data => {
              console.log(data);
              
                renderEmployees(data);
            });                  
        }
    }                     
}
    
//add employee
let newEmployee = document.getElementById('newEmployee');
newEmployee.addEventListener("submit", function (e) {
    e.preventDefault();
    let datos = new FormData(newEmployee);
    
    fetch('http://localhost/php-employee-management-v1/src/library/employeeController.php?action=deleteEmployees', {
        method: 'POST', //send data
        body: datos  //sendign object datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data);
          //  loadAllEmployees();
            renderEmployees(data);
        });   
} )    
                
loadAllEmployeesJS();

