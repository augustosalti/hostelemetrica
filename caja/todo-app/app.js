$(document).ready(function() {


  // Global Settings
  let edit = false;

  // Testing Jquery
  console.log('jquery is working!');
  fetchTasks();
  fetchTasksSuma();
  $('#task-result').hide();


//////////////////////////////////////////


  $('#task-form').submit(e => {
    e.preventDefault();
    const postData = {
      id: $('#id').val(),
      fecha: $('#fecha').val(),
      turno: $('#turno').val(),
      responsable: $('#responsable').val(),
      efectivo: $('#efectivo').val(),
      tarjeta: $('#tarjeta').val(),
      gastos: $('#gastos').val(),
      adelantos: $('#adelantos').val(),
      fondo: $('#fondo').val(),
      venta: $('#venta').val(),
      dia: $('#dia').val(),
      diferencia: $('#diferencia').val(),
      fondoadejar: $('#fondoadejar').val(),
      sobre: $('#sobre').val(),
      observaciones: $('#observaciones').val(),
      //id: $('#taskId').val()
    };
    const url = 'task-edit.php';
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#task-form').trigger('reset');
      fetchTasks();
      fetchTasksSuma();
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
                  <td>
                  <a href="#" class="task-item">
                    ${task.fecha} 
                  </a>
                  </td> 
                  <td class="aBorrar">${task.turno}</td>
                  <td>${task.venta}</td>

                  <td>${task.efectivo}</td>
                  <td>${task.tarjeta}</td>
                  <td>${task.fondo}</td>
                  <td class="aBorrar">${task.diferencia}</td>
                  <td class="aBorrar">${parseInt(task.gastos) + parseInt(task.adelantos)}</td>
                  <td>${task.sobre}</td>
                  <td class="aBorrar">${task.responsable}</td>
                  <td id="botonBorrar">
                    <button class="task-delete btn btn-danger boton-borrar">
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

  // FETCH TASKT POR DATE

  function fetchTasksDate() {
    $.ajax({
      url: 'tasks-date.php',
      type: 'GET',
      success: function(response) {
        const tasks = JSON.parse(response);
        let template = '';
        console.log(tasks);
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.id}">
                  <td>
                  <a href="#" class="task-item">
                    ${task.fecha} 
                  </a>
                  </td> 
                  <td class="aBorrar">${task.turno}</td>
                  <td>${task.venta}</td>

                  <td>${task.efectivo}</td>
                  <td>${task.tarjeta}</td>
                  <td>${task.fondo}</td>
                  <td class="aBorrar">${task.diferencia}</td>
                  <td class="aBorrar">${parseInt(task.gastos) + parseInt(task.adelantos)}</td>
                  <td>${task.sobre}</td>
                  <td class="aBorrar">${task.responsable}</td>
                  <td>
                    <button id="botonBorrar" class="task-delete btn btn-danger boton-borrar">
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


   // GENERA SUMA TASK
  function fetchTasksSuma() {
    $.ajax({
      url: 'task-suma.php',
      type: 'GET',
      success: function(response) {
        const suma = JSON.parse(response);
        let template = '';
        console.log(suma);
        suma.forEach(task => {


          template += `
                  <tr>
                  <td>SUMAS:</td>
                  <td class="aBorrar"></td>
                  <td>${task.venta}</td>
                  <td>${task.efectivo}</td>
                  <td>${task.tarjeta}</td>
                  <td>${task.fondo}</td>
                  <td class="aBorrar">${task.diferencia}</td>
                  <td class="aBorrar">${parseInt(task.gastos) + parseInt(task.adelantos)}</td>
                  <td>${task.sobre}</td>
                  </tr>
                `
        });
        $('#sumas').html(template);
      }
    });
  }

  // Get a Single Task by Id 
  $(document).on('click', '.task-item', (e) => {
    const element = $(this)[0].activeElement.parentElement.parentElement;
    const id = $(element).attr('taskId');
    $.post('task-single.php', {id}, (response) => {
      const task = JSON.parse(response);
      $('#id').val(task.id);
      $('#turno').val(task.turno);
      $('#responsable').val(task.responsable);
      $('#efectivo').val(task.efectivo);
      $('#tarjeta').val(task.tarjeta);
      $('#gastos').val(task.gastos);
      $('#adelantos').val(task.adelantos);
      $('#fondo').val(task.fondo);
      $('#venta').val(task.venta);
      $('#dia').val(task.dia);
      $('#diferencia').val(task.diferencia);
      $('#fondoadejar').val(task.fondoadejar);
      $('#sobre').val(task.sobre);
      $('#observaciones').val(task.observaciones);
      
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
