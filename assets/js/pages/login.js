$(document).ready(()=>{
    var login = new Login();

    login.InitLogin();
});

function Login(){
    var _login = this;

    this.InitLogin = (() =>{
        $('#btnSignUp').off('click').on('click', function(){
            var userData = {
                FirstName: $('#txtFirstName').val(),
                MiddleName: $('#txtMiddleName').val(),
                LastName: $('#txtLastName').val(),
                Gender: $('#ddGender').val(),
                Username: $('#txtUsername').val(),
                Password: $('#txtPassword').val()
            };

            _login.Test(userData);
        });
    });

    this.Test = ((userData) =>{
        $.post('Signup', { userData: userData }, function(response){
            alert(response);
        });
    });
}