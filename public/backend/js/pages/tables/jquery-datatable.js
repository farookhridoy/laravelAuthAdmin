$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "paging": false,
        "searching": false
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});