$(function () {

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });


        var table = $('#usertable').DataTable({
                scrollX: true,
                ordering: true,
                info: true,
                select: true,
                ajax: {
                        url: 'library/user_read.php',
                        dataSrc: 'user'
                },
                columns: [
                        { data: 'id', name: 'id', 'visible': false},
                        { data: 'no', name: 'no'},
                        { data: 'username', name: 'username' },
                        { data: 'fingerprintid', name: 'fingerprintid' },
                        { data: 'fullname', name: 'fullname' },
                        { data: 'identitycard', name: 'identitycard' },
                        { data: 'gender', name: 'gender' },
                        { data: 'title', name: 'title' },
                        { data: 'privilege', name: 'privilege' },
                        { data: 'status', name: 'status' },
                        { data: 'createdon', name: 'createdon' },
                        { data: 'createdby', name: 'createdby' },
                ],
                rowId: 'id',
                order: [[1, 'asc']],
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: 'New',
                        className: 'red',
                        action: function ( e, dt, node, config ) {

                                $("#ModalUserManagement").modal("show");
                                $("#usermanagementform")[0].reset();
                                $("#password").attr("readonly", false);

                        }
                    },
                    {
                        text: 'Edit',
                        className: 'orange',
                        action: function ( e, dt, node, config ) {

                            var selected_id = table.row('.selected').id();
                            if (selected_id == undefined) {
                                toastr.error('No Row Selected')
                            }
                            else {

                                $("#ModalUserManagement").modal("show");
                                $("#username").val(table.row('.selected').data().username);
                                $("#password").attr("readonly", true);
                                $("#fullname").val(table.row('.selected').data().fullname);
                                $("#identitycard").val(table.row('.selected').data().identitycard);
                                $("#gender").val(table.row('.selected').data().gender);
                                $("#title").val(table.row('.selected').data().title);
                                $("#privilege").val(table.row('.selected').data().privilege);
                                $("#status").val(table.row('.selected').data().status);

                            }

                        }
                    },
                    {
                        text: 'Delete',
                        className: 'green',
                        action: function ( e, dt, node, config ) {

                            var selected_id = table.row('.selected').id();
                            if (selected_id == undefined) {
                                toastr.error('No Row Selected')
                            }
                            else {


                            }

                        }
                    }
                ]
        });



    $('#usertable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#usertable').on('hidden.bs.modal', function (e) {
        table.rows( '.selected' ).remove().ajax.reload().columns.adjust().draw();
    });


});