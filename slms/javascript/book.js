$(function () {


        $("#statusbook").select2();

	var table = $('#example2').DataTable({
        bPaginate: false,
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        scrollX: true,
        select: true,
        'ajax': {
                'url': 'objects/book.php',
                'type': "POST",
                'data': {
                        'function': 'display'
                },
                'dataSrc': 'book'
                },
                'columns': [
                        { 'data': 'id', "visible": false },
                        { 'data': 'bookname' },
                        { 'data': 'author' },
                        { 'data': 'serial' },
                        { 'data': 'published' },
                        { 'data': 'racknumber' },
                        { 'data': 'quantity' },
                        { 'data': 'quantityloan' },
                        { 'data': 'statusbook' },
                        { 'data': 'updateby' },
                        { 'data': 'lastupdate' }
                ],
                'rowId': 'id',
                dom: 'Bfrtip',
                buttons: [
                        {
                                text: 'New',
                                action: function ( e, dt, node, config ) {
                                        $("#ModalBook").modal('show');
                                        $("#BtnBook").text("Create");
                                        $("#function").val("Create");
                                }

                        },
                        {
                                text: 'Edit',
                                action: function ( e, dt, node, config ) {

                                        var selected_id = table.row('.selected').id();
                                        $("#ModalBook").modal('show');
                                        $("#BtnBook").text("Edit");
                                        $("#function").val("Edit");
                                        console.log( table.row('.selected').data().author() );

                                }

                        },
                        {
                                text: 'Delete',
                                action: function ( e, dt, node, config ) {

                                        var selected_id = table.row('.selected').id();
                                        alert (selected_id);

                                }

                        }
                ]
        });


        $("#BtnBook").on("click", function(){

                $.ajax({
                    url: "objects/book.php",
                    dataType: "text",
                    data: $("#usermanagementform").serialize(),
                    type: "POST",
                    success: function(response){

                            console.log(response);

                    }
                });

        });




});