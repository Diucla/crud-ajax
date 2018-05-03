$(document).ready(function () {

    $.ajax({
        url: '_controller/ProductController.php',
        type: 'GET',
        data: {
            'accao': 1
        },
        success: function (response) {

            console.log(response);
            // $(response).each(function (index) {
            //     console.log(response);
            // });

            // response.each(function (element) {
            //     console.log(element);
            // });

        }
    });
    // save product to database
    $(document).on('click', '#submit_btn', function () {
        var description = $('#description').val();
        var price = $('#price').val();

        $.ajax({
            url: '_controller/ProductController.php',
            type: 'POST',
            data: {
                'description': description,
                'price': price
            },
            success: function (response) {

                var resultado = response['resultado'];
                console.log(resultado);

                alert("Gravado com Sucesso!");
                $('#description').val(null);
                $('#price').val(null);

                var newRow = $("<tr>");
                var cols = "";


                cols += '<td>'+resultado['id']+'</td>';
                cols += '<td>'+resultado['description']+'</td>';
                cols += '<td>'+resultado['price']+'</td>';
                newRow.append(cols);
                $("#products-table").append(newRow);

            }
        });
    });


    // delete from database
    // $(document).on('click', '.delete', function () {
    //     var id = $(this).data('id');
    //     $clicked_btn = $(this);
    //     $.ajax({
    //         url: '_server/server.php',
    //         type: 'GET',
    //         data: {
    //             'delete': 1,
    //             'id': id,
    //         },
    //         success: function (response) {
    //             // remove the deleted comment
    //             $clicked_btn.parent().remove();
    //             $('#name').val('');
    //             $('#comment').val('');
    //         }
    //     });
    // });


    var edit_id;
    var $edit_comment;
    // $(document).on('click', '.edit', function () {
    //     edit_id = $(this).data('id');
    //     $edit_comment = $(this).parent();
    //     // grab the comment to be editted
    //     var name = $(this).siblings('.display_name').text();
    //     var comment = $(this).siblings('.comment_text').text();
    //     // place comment in form
    //     $('#name').val(name);
    //     $('#comment').val(comment);
    //     $('#submit_btn').hide();
    //     $('#update_btn').show();
    // });

    // $(document).on('click', '#update_btn', function () {
    //     var id = edit_id;
    //     var name = $('#name').val();
    //     var comment = $('#comment').val();
    //     $.ajax({
    //         url: '_server/server.php',
    //         type: 'POST',
    //         data: {
    //             'update': 1,
    //             'id': id,
    //             'name': name,
    //             'comment': comment,
    //         },
    //         success: function (response) {
    //             $('#name').val('');
    //             $('#comment').val('');
    //             $('#submit_btn').show();
    //             $('#update_btn').hide();
    //             $edit_comment.replaceWith(response);
    //         }
    //     });
    // });
});