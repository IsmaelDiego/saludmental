$(document).ready(function() {
    // Datatable combinado con botones, selección múltiple y encabezado complejo
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'print', 'pdf'],
        select: {
            style: 'multi'  // Habilita la selección múltiple
        },
        "language": {
            "paginate": {
                "previous": "<i class='mdi mdi-chevron-left'>",
                "next": "<i class='mdi mdi-chevron-right'>"
            }
        },
        "drawCallback": function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
        },
        "columnDefs": [ 
            {
                "visible": false,
                "targets": -1  // Oculta la última columna por defecto
            } 
        ]
    });

    // Coloca los botones en el contenedor especificado
    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
