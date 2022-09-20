const employees = [];
const containerRows = document.getElementById("cont-employee");

function loadAllEmployees(){
fetch("../src/library/employeeController.php?action=listEmployees" ,{method: "GET"}) // cambiar la url a employee controller
        .then(response => response.json())
        .then(jsondata => {
            
                
            for(let e = 0;e<jsondata.length;e++){
                employees.push(jsondata[e]); //fill employees array
              
                let employRow = document.createElement("div");  
                
                employRow.className = "d-flex justify-content-between  mt-2 pb-2";
                containerRows.appendChild(employRow); //add to div claas container1 
                employRow.innerHTML = `<div type="button" class="container row border-bottom mt-2 pb-2" id="employeeInfo">
                    <div class="col text-start fs-4">${employees[e].name}</div>
                    <div class="col text-start fs-4">${employees[e].lastName}</div>
                    <div class="col text-start fs-4">${employees[e].email}</div>
                    <div class="col text-end fs-4">${employees[e].phoneNumber}</div>
                    <div class="col text-end " id="${employees[e].id}" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25"  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </div>
                    
                </div>
                
                `;
                
                
                


                
                //Page employee
                $employeeInfo = document.getElementById('employeeInfo');

                $employeeInfo.addEventListener("click", function(){
                location.href = "http://localhost/php-employee-management-v1/src/employee.php";

                })
                
                

         }
    });

}




//add employee

let newEmployee = document.getElementById('newEmployee');

newEmployee.addEventListener("submit", function(e){
    e.preventDefault();
    let datos = new FormData(newEmployee);
    //console.log(datos);
    //console.log(datos.get('newName'))

    fetch('http://localhost/php-employee-management-v1/src/library/employeeController.php',{
    method: 'POST', //send data
    body: datos  //sendign object datos
    })
       
})

loadAllEmployees();