window.onload = function(){
    $('#register').click(function(){

        var valid = this.form.checkValidity();
        if(valid){

            var email = $('#email').val();
            var username = $('#username').val();
            var password = $('#password').val();

            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'registration.php',
                data: {email: email,username: username, password: password},
            sucess: function(data){
             alert("Registration was successfully completed.");
            },
            error: function(data){
                alert("Issues were encountered during the process of user creation.");
            }
            });
            alert('true');
        } else{
            alert('false');
        }


    });
}
