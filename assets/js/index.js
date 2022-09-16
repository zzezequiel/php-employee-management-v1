
const employees = [];

let i=0;


    let data = fetch("../resources/employees.json")
        .then(response => {
            return response.json();
    })
        .then(jsondata => {
            for(let e = 0;e<jsondata.length;e++){
                employees.push(jsondata[e]);
              
                
                console.log(employees[e].name);
                


                

         }
    });



