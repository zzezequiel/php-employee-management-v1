
fetch('../resources/employees.jason')
    .then(function (response) {
        
    return response.text()
  }).then(function (text) {
    // parse the text here how you want, for csv:
    // return text.split(',')
  })

