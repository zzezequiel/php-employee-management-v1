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
        let id = employees[e].id;
                
        employRow.className = "d-flex justify-content-between  mt-2 pb-1";
        containerRows.appendChild(employRow); //add to div claas container1 
        employRow.innerHTML = `<div type="button" class="container row border-bottom mt-2 pb-2" id="${employees[e].id}">
                    <div class="col text-start fs-5">${employees[e].name}</div>
                    <div class="col text-start me-0 fs-5">${employees[e].lastName}</div>
                    <div class="col text-start me-5 fs-5">${employees[e].email}</div>
                    <div class="col text-start ms-5 fs-5">${employees[e].phoneNumber}</div>
                    </div>

                    <div class="col text-end  delete pt-2" id="" type="button" data-bs-toggle="modal" data-bs-target="#modal${employees[e].id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="25"  fill="text-danger" class=" bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </div>
                    <!--MODAL-->                    
                    <div class="modal fade" id="modal${employees[e].id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          
                          <div class="modal-body">
                            Do you confirm employee delete?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="deleteCall(${id})" id="delete${employees[e].id} class="btn btn-primary">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div> `;

     
        
                
        //get IDs
     
        
        //REdirect Page employee
        employeeInfo = document.getElementById(`${employees[e].id}`);  //add dinamic id to buttons//add dinamic id to buttons  `${employees[e].id}`
        let targetEmId = employeeInfo.getAttribute('id');
      

        employeeInfo.addEventListener("click", function () {
            location.href = `./library/employeeController.php?action=openEmployee&id=${targetEmId}`;
            

        })
        //DELETE
        
        
        // let launchDeleteModal = document.getElementById(`del${employees[e].id}`);
        //  let targetDelId = launchDeleteModal.getAttribute('id');
        // targetDelId = targetDelId.substring(3);
        // launchDeleteModal.addEventListener("click", function () {
        //   deleteCall(targetDelId, id);

        // })
        //no se abre el modal porque esta en la funcion, si lo saco de la funcion peta porque no encuentra el eventlisteneer
 
        function deleteCall(id) {
        
            /*
            let deleteEmployee = document.getElementById(`delete${id}`);
            deleteEmployee.addEventListener("click", function () {
                
      */
       
                console.log("target:" + id);
                fetch(`./library/employeeController.php?action=delete&id=${id}`)
                    .then(res => res.json()) ///response.text para vererrores
                    .then(data => {
                        console.log(data);
              
                        renderEmployees(data);
                    });
            
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
    })
}    
                
loadAllEmployeesJS();


