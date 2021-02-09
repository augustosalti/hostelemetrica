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

      if (task.mostrar == 1){ $('#mostrar').prop("checked", true); } else{ $('#mostrar').prop("checked", false); }

      if (task.g == 1){ $('#g').prop("checked", true); } else{ $('#g').prop("checked", false); }

      if (task.c == 1){ $('#c').prop("checked", true); } else{ $('#c').prop("checked", false); }

      if (task.h == 1){ $('#h').prop("checked", true); } else{ $('#h').prop("checked", false); }

      if (task.p == 1){ $('#p').prop("checked", true); } else{ $('#p').prop("checked", false); }

      if (task.cc == 1){ $('#cc').prop("checked", true); } else{ $('#cc').prop("checked", false); }

      if (task.s == 1){ $('#s').prop("checked", true); } else{ $('#s').prop("checked", false); }

      if (task.l == 1){ $('#l').prop("checked", true); } else{ $('#l').prop("checked", false); }

      if (task.f == 1){ $('#f').prop("checked", true); } else{ $('#f').prop("checked", false); }

      if (task.a == 1){ $('#a').prop("checked", true); } else{ $('#a').prop("checked", false); }

      if (task.m == 1){ $('#m').prop("checked", true); } else{ $('#m').prop("checked", false); }

      if (task.gs == 1){ $('#gs').prop("checked", true); } else{ $('#gs').prop("checked", false); }

      if (task.d == 1){ $('#d').prop("checked", true); } else{ $('#d').prop("checked", false); }

      if (task.mo == 1){ $('#mo').prop("checked", true); } else{ $('#mo').prop("checked", false); }

      if (task.al == 1){ $('#al').prop("checked", true); } else{ $('#al').prop("checked", false); }



      $('#taskId').val(task.id);
      url = "verImg.php?id="+ task.id;
      $('#blah').attr('src', url);
      edit = true;
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
