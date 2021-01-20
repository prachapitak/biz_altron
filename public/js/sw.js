$(document).ready(function() {
    $('.deleteForm').click(function(evt) {


        var name = $(this).data("name");
        var form = $(this).closest("form");
        evt.preventDefault();
        swal({

            title: 'Are You sure delete ' + name + ' ?',
            text: "Data cannot recovery",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then((willDelete) => {

            if (willDelete) {

                form.submit();
            }

        })

    });


});