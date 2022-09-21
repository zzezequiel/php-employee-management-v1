<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
  </head>
  <body>
    <header>
        <?php include("../assets\html\header.html"); ?>
    </header>
    
        <main>
            
            <!--display employees-->

            <div class="bg-body rounded shadow-sm container-xl border-bottom mt-2 pb-2">
              <div class="row">
                <div class="col text-start"><h3>Name</h3></div>
                <div class="col text-start"><h3>Lastname</h3></div>
                <div class="col text-start"><h3>Email</h3></div>
                <div class="col text-end"><h3>Phone number</h3></div>
                <div class="col text-end me-4 btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="addEmployee">
                    <svg class="fs-1" xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </div>
              </div>
            </div>

            <div class="collapse bg-body rounded shadow-sm container-xl border-bottom mt-2 pb-2" id="collapseExample">
              <form id="newEmployee" class="row">
                    <div class="col text-start fs-5"><input type="text" name="newName"></div>
                    <div class="col text-start fs-5"><input type="text" name="newLastName"></div>
                    <div class="col text-start fs-5"><input type="text" name="newEmail"></div>
                    <div class="col text-start fs-5"><input type="text" name="newPhone"></div>
                    <button class="col fs-6 " type="submit">
                     <svg xmlns="http://www.w3.org/2000/svg" width="35" fill="currentColor" class="bi bi-plus text-end" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                    </button>
              </form>     
            </div>
            

            <div class="bg-body rounded shadow-sm container-xl" id="cont-employee">
                
            </div>

        </main>


    <script src="../assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
