const employees = [];
const containerRows = document.getElementById("cont-employee");


    let data = fetch("../resources/employees.json")
        .then(response => {
            return response.json();
    })
        .then(jsondata => {
            for(let e = 0;e<jsondata.length;e++){
                employees.push(jsondata[e]); //fill employees array
              
                let employRow = document.createElement("div");  //create article for 10 times
                //employRow.className = "col";
                containerRows.appendChild(employRow); //add to div claas container1 
                employRow.innerHTML = `<p>${employees[e].name}</p>`;
 
                


                

         }
    });



