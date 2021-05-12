$(document).ready(()=>{
    var login = new Login();

    login.InitLogin();
});

function Login(){
    var _login = this;

    this.InitLogin = (() =>{
        $('#btnSignUp').off('click').on('click', function(){
            var userData = {
                firstname: $('#txtFirstName').val(),
                lastname: $('#txtLastName').val(),
                gender: $('#ddGender').val(),
                username: $('#txtUsername').val(),
                password: $('#txtPassword').val(),
                role_id: 1,
                is_active: 1
            };

            if(!IsObjectHasNull(userData)){
                userData.middlename = $('#txtMiddleName').val();

                _login.SignUp(userData);
            }
            else{
                alert('Please fill all the required fields.');
            }
        });

        $('#btnSignIn').off('click').on('click', function(){
            var userCreds = {
                username: $('#txtLoginUsername').val(),
                password: $('#txtLoginPassword').val()
            }

            if(!IsObjectHasNull(userCreds)){
                _login.SignIn(userCreds);
            }
            else{
                alert('Please fill all the required fields.');
            }
        });
    });

    this.SignUp = ((userData) =>{
        $.post('Signup', { userData: userData }, function(response){
            var responseObj = JSON.parse(response);

            _login.ClearFields(1);

            if(responseObj.Status === 1){
                $('#modalRegister').modal('hide');
                Notify(responseObj.Message, 'success');
            }
            else{
                Notify(responseObj.Message, 'warning');
            }
        });
    });

    this.SignIn = ((userCreds) =>{
        $.post('Signin', { userCreds: userCreds }, function(response){
            console.log(response);
            // var responseObj = JSON.parse(response);

            // if(responseObj.Status === 1){
            //     _login.ClearFields();
            //     Notify(responseObj.Message, 'success');
            // }
            // else{
            //     Notify(responseObj.Message, 'warning');
            // }
        });
    });

    this.ClearFields = ((ind) =>{
        if(ind){
            $('#txtFirstName').val('');
            $('#txtMiddleName').val('');
            $('#txtLastName').val('');
            $('#ddGender').val('');
            $('#txtUsername').val('');
            $('#txtPassword').val('');
        }
        else{
            $('#txtLoginUsername').val('');
            $('#txtLoginPassword').val('');
        }
    });
}