
jQuery(document).ready(function(){

    function sweetalert(alert) {
        swal(alert,"","error");
    }
    function validator(name,lastname,number){
        if (name === "") {
            sweetalert("Name required");
            return false;
        }
        if (lastname === "") {
            sweetalert("Last name required");
            return false;
        }
        if (number === "") {
            sweetalert("Number required");
            return false;
        }
        return true;
    }
    function updateUser(){
        jQuery('.update').click(function(e){
            e.preventDefault();
            var url = '/update/' + $(this).attr('id');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data){
                    $('#nameUpdate').val(data[0]["name"]);
                    $('#lastnameUpdate').val(data[0]["lastname"]);
                    $('#numberUpdate').val(data[1]["number"]);

                    jQuery('.updateSbm').click(function(e){
                        e.preventDefault();
                        var name = document.forms["updateForm"]["name"].value;
                        var lastname = document.forms["updateForm"]["lastname"].value;
                        var number = document.forms["updateForm"]["number"].value;

                        if (validator(name,lastname,number)) {
                            $.ajax({
                                type: 'POST',
                                url: url,
                                data: $('.ajax_update').serialize(),
                                success: function (d) {
                                    $('.show').html(d);
                                    deleteUser();
                                }
                            });
                        }
                    });
                }
            });
        });
    }
    updateUser();

    jQuery('.create').click(function(e){
        e.preventDefault();
        var name = document.forms["createForm"]["name"].value;
        var lastname = document.forms["createForm"]["lastname"].value;
        var number = document.forms["createForm"]["number"].value;

        if (validator(name,lastname,number)){
            $.ajax({
                type: 'POST',
                url: '/create',
                data: $('.ajax_create').serialize(),
                success: function(d){
                    $('.show').html(d);
                    $('form input[type="text"], form input[type="password"], form textarea').val('');
                    updateUser();
                    deleteUser();
                }
            });
        }
    });

    function deleteUser(){
        jQuery('.delete').click(function(e){
            e.preventDefault();
            var url = '/delete/' + $(this).attr('id');
            $.ajax({
                type: 'GET',
                url: url,
                success: function(d){
                    $('.show').html(d);
                    updateUser();
                    deleteUser();
                }
            });

        });
    }
    deleteUser();
});

