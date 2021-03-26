
       $(function() {
        $('.date-picker').datepicker( {
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) { 
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));

                var currMonth = new Date(inst.selectedYear, inst.selectedMonth, 1);


                var mes = currMonth.getMonth() + 1;

                var anio = currMonth.getFullYear();


                if($('.date-picker').val()) {
                  $.ajax({
                    url: 'task-date.php',
                    data: {mes, anio},
                    type: 'POST',
                    success: function (response) {
                      if(!response.error) {
                        var postData= {mes, anio};
                        let tasks = JSON.parse(response);
                        let template = '';
                        const url = 'task-date.php';
                        //console.log(postData, url);
                        $.post(url, postData, (response) => {
                        //console.log(response);
                        $('#task-form-date').trigger('reset');

                        /////

                            $.ajax({
                                url: 'task-date.php',
                                type: 'GET',
                                success: function(response) {
                                  let template = '';
                                  //console.log(tasks);
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
                                            <td>${task.dia}</td>
                                            <td>${task.efectivo}</td>
                                            <td>${task.tarjeta}</td>
                                            <td>${task.fondo}</td>
                                            <td class="aBorrar">${task.diferencia}</td>
                                            <td class="aBorrar">${parseInt(task.gastos) + parseInt(task.adelantos)}</td>
                                            <td>${task.sobre}</td>
                                            <td class="aBorrar">${task.responsable}</td>
                                            <td>
                                              <button class="task-delete btn btn-danger boton-borrar">
                                               Borrar
                                              </button>
                                            </td>
                                            </tr>
                                          `
                                  });
                                  //console.log(template);
                                  $('#tasks').html(template);
                                  $('#container').html(template);
                                }
                              });


                        });
                      }
                    } 
                  })



                  $.ajax({
                    url: 'task-suma-date.php',
                    data: {mes, anio},
                    type: 'POST',
                    success: function (response) {
                      if(!response.error) {
                        var postData= {mes, anio};
                        let suma = JSON.parse(response);
                        let template = '';
                        const url = 'task-suma-date.php';
                        console.log(postData, url);
                        $.post(url, postData, (response) => {
                        console.log(response);
                        $('#task-form-date').trigger('reset');

                        /////

                                $.ajax({
                                  url: 'task-suma-date.php',
                                  type: 'GET',
                                  success: function(response) {
                                    //const suma = JSON.parse(response);
                                    let template = '';
                                    console.log(suma);
                                    suma.forEach(task => {
                                      template += `
                                              <tr>
                                              <td>SUMAS:</td>
                                              <td class="aBorrar"></td>
                                              <td>${task.venta}</td>
                                              <td></td>
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


                        });
                      }
                    } 
                  })







                 }
            }
        });
      });