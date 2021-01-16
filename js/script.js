
 function validateForms(form){
        $(form).validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                  required: "",
                  email: " "
                }
            }
        });
    }

    validateForms('#subscribe-form');

    $('form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mailer/smart.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            $('#subscribe').fadeOut();

            $('form').trigger('reset');
        });
        return false;
    });



