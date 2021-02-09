     function sendRequest() {

        var theObject = new XMLHttpRequest();
        theObject.open('POST', 'listar.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
          if(theObject.readyState === 4 & theObject.status === 200) {
            document.getElementById('tasks').innerHTML = theObject.responseText;
          }
        }

        theObject.send('username=root&password=root');
      }