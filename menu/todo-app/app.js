$(document).ready(function() {
  // Global Settings
  let edit = false;

  // Testing Jquery
  console.log('jquery is working!');
  fetchTasks();
  $('#task-result').hide();


  // Task Form
  $('#task-form').submit(e => {
    e.preventDefault();
    var paqueteDeDatos = new FormData();
    paqueteDeDatos.append('id', $('#taskId').prop('value'));
    paqueteDeDatos.append('name', $('#name').prop('value'));
    paqueteDeDatos.append('description', $('#description').prop('value'));
    paqueteDeDatos.append('price', $('#price').prop('value'));
    paqueteDeDatos.append('costo', $('#costo').prop('value'));
    paqueteDeDatos.append('imgInp', $('#imgInp')[0].files[0]);
    paqueteDeDatos.append('tipo', $('#tipo').prop('value'));
    paqueteDeDatos.append('categoria', $('#categoria').prop('value'));
    paqueteDeDatos.append('proveedor', $('#proveedor').prop('value'));
    paqueteDeDatos.append('mostrar', $('#mostrar').prop('value'));
    paqueteDeDatos.append('g', $('#g').prop('value'));
    paqueteDeDatos.append('h', $('#h').prop('value'));
    paqueteDeDatos.append('p', $('#p').prop('value'));
    paqueteDeDatos.append('cc', $('#cc').prop('value'));
    paqueteDeDatos.append('s', $('#s').prop('value'));
    paqueteDeDatos.append('l', $('#l').prop('value'));
    paqueteDeDatos.append('f', $('#f').prop('value'));
    paqueteDeDatos.append('a', $('#a').prop('value'));
    paqueteDeDatos.append('m', $('#m').prop('value'));
    paqueteDeDatos.append('gs', $('#gs').prop('value'));
    paqueteDeDatos.append('c', $('#c').prop('value'));
    paqueteDeDatos.append('d', $('#d').prop('value'));
    paqueteDeDatos.append('mo', $('#mo').prop('value'));
    paqueteDeDatos.append('al', $('#al').prop('value'));
    $('#blah').attr('src', 'preImg.png');
    var destino = "task-add.php";

    const url = edit === false ? 'task-add.php' : 'task-edit.php';
    $.ajax({
            url: url,
            type: 'POST', // Siempre que se envíen ficheros, por POST, no por GET.
            contentType: false,
            data: paqueteDeDatos, // Al atributo data se le asigna el objeto FormData.
            processData: false,
            cache: false, 
            success: function(resultado){ // En caso de que todo salga bien.
              console.log(resultado);
              $('#task-form').trigger('reset');
              fetchTasks(); 
              edit = false;
            },
            error: function (){ // Si hay algún error.
              alert("Algo ha fallado.");
            }
          });
  });



  // Fetching Tasks
  function fetchTasks() {
    $.ajax({
      url: 'tasks-list.php',
      type: 'GET',
      success: function(response) {
        const tasks = JSON.parse(response);
        let template = '';
        console.log(tasks);
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.id}">
                  <td>${task.id}</td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.nombre} 
                  </a>
                  </td>
                  <td>${task.descripcion}</td>
                  <td>${task.tipo}</td>
                  <td>${task.precio}</td>
                  <td>
                    <button class="task-delete btn btn-danger">
                     Borrar
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#tasks').html(template);
      }
    });
  }

  // TASK SEARCH
  $('#search').keyup(function() {
    if($('#search').val()) {
      let search = $('#search').val();
      $.ajax({
        url: 'task-search.php',
        data: {search},
        type: 'POST',
        success: function (response) {
          if(!response.error) {
            let tasks = JSON.parse(response);
            let template = '';
            tasks.forEach(task => {
              template += ` 
                  <tr taskId="${task.id}">
                    <td>
                      <a href="#" class="task-item">${task.nombre} </a>
                    </td>
                  </tr> 
                    ` 
            });
            $('#task-result').show();
            $('#container').html(template);
          }
        } 
      })
    }
  });

  // Get a Single Task by Id 
  $(document).on('click', '.task-item', (e) => {
    var url = '';
    const element = $(this)[0].activeElement.parentElement.parentElement;
    const id = $(element).attr('taskId');
    $.post('task-single.php', {id}, (response) => {
      const task = JSON.parse(response);
      $('#name').val(task.nombre);
      $('#description').val(task.descripcion);
      $('#tipo').val(task.tipo);
      $('#categoria').val(task.categoria);
      $('#price').val(task.precio);
      $('#costo').val(task.costo);
      $('#proveedor').val(task.proveedor);

      if (task.mostrar == 1){ $('#mostrar').prop("checked", true); $('#mostrar').prop("value", 1); } else{ $('#mostrar').prop("checked", false);  $('#mostrar').prop("value", 0); }

      if (task.g == 1){ $('#g').prop("checked", true); $('#g').prop("value", 1); } else{ $('#g').prop("checked", false);  $('#g').prop("value", 0); }

      if (task.c == 1){ $('#c').prop("checked", true); $('#c').prop("value", 1); } else{ $('#c').prop("checked", false);  $('#c').prop("value", 0); }

      if (task.h == 1){ $('#h').prop("checked", true); $('#h').prop("value", 1); } else{ $('#h').prop("checked", false);  $('#h').prop("value", 0); }

      if (task.p == 1){ $('#p').prop("checked", true); $('#p').prop("value", 1); } else{ $('#p').prop("checked", false);  $('#p').prop("value", 0); }

      if (task.cc == 1){ $('#cc').prop("checked", true); $('#cc').prop("value", 1); } else{ $('#cc').prop("checked", false);  $('#cc').prop("value", 0); }

      if (task.s == 1){ $('#s').prop("checked", true); $('#s').prop("value", 1); } else{ $('#s').prop("checked", false);  $('#s').prop("value", 0); }

      if (task.l == 1){ $('#l').prop("checked", true); $('#l').prop("value", 1); } else{ $('#l').prop("checked", false);  $('#l').prop("value", 0); }

      if (task.f == 1){ $('#f').prop("checked", true); $('#f').prop("value", 1); } else{ $('#f').prop("checked", false);  $('#f').prop("value", 0); }

      if (task.a == 1){ $('#a').prop("checked", true); $('#a').prop("value", 1); } else{ $('#a').prop("checked", false);  $('#a').prop("value", 0); }

      if (task.m == 1){ $('#m').prop("checked", true); $('#m').prop("value", 1); } else{ $('#m').prop("checked", false);  $('#m').prop("value", 0); }

      if (task.gs == 1){ $('#gs').prop("checked", true); $('#gs').prop("value", 1); } else{ $('#gs').prop("checked", false);  $('#gs').prop("value", 0); }

      if (task.d == 1){ $('#d').prop("checked", true); $('#d').prop("value", 1); } else{ $('#d').prop("checked", false);  $('#d').prop("value", 0); }

      if (task.mo == 1){ $('#mo').prop("checked", true); $('#mo').prop("value", 1); } else{ $('#mo').prop("checked", false);  $('#mo').prop("value", 0); }

      if (task.al == 1){ $('#al').prop("checked", true); $('#al').prop("value", 1); } else{ $('#al').prop("checked", false);  $('#al').prop("value", 0); }


      $('#taskId').val(task.id);
      url = "verImg.php?id="+ task.id;
      $('#blah').attr('src', url);
      edit = true;
      console.log(task);
    });
    e.preventDefault();
  });



  // Delete a Single Task
  $(document).on('click', '.task-delete', (e) => {
    if(confirm('Seguro de que quieres eliminar este item?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      $.post('task-delete.php', {id}, (response) => {
        fetchTasks();
      });
    }
  });
});
