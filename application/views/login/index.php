<html>
    <head>  
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/icon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"/>  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/mdbootstrap/css/mdb.min.css"/> 
    </head>
    <body class="login">
        <div class="login-bg"></div>
        <div class="login-content col-md-3">
            <div class="sign-text">
                <div style="margin-right: 5px;">
                    <img src="<?php echo base_url(); ?>assets/images/icon.png" width="30"/>
                </div>
                <div><span class="site-name d-none d-md-block text-condensed">To Do List</span></div>
            </div>
            <hr>
            <div class="user-inputs">
                <div class="form-outline in-content">
                    <input type="text" id="txtLoginUsername" class="form-control" />
                    <label class="form-label" for="txtLoginUsername">Username</label>
                </div>
                <div class="form-outline in-content">
                    <input type="password" id="txtLoginPassword" class="form-control" />
                    <label class="form-label" for="txtLoginPassword">Password</label>
                </div>
                <div class="in-login">
                    <div class="create-acc"><a data-mdb-toggle="modal" data-mdb-target="#modalRegister">Create account</a></div>
                    <div><button id="btnSignIn" type="button" class="btn btn-prim ripple-surface">Sign In</button></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create account</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close" ></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="txtFirstName" class="form-control">
                                        <label class="form-label" for="txtFirstName" style="margin-left: 0px;">*First name</label>
                                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="txtMiddleName" class="form-control">
                                        <label class="form-label" for="txtMiddleName" style="margin-left: 0px;">Middle name</label>
                                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="txtLastName" class="form-control">
                                        <label class="form-label" for="txtLastName" style="margin-left: 0px;">*Last name</label>
                                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                                </div>
                                <div class="col">
                                    <select id="ddGender" class="btn" >
                                        <option class="dropdown-item" value="" disabled selected>*Gender</option>
                                        <option class="dropdown-item" value="Male">Male</option>
                                        <option class="dropdown-item" value="Female">Female</option>
                                        <option class="dropdown-item" value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="txtUsername" class="form-control">
                                        <label class="form-label" for="txtUsername" style="margin-left: 0px;">*User name</label>
                                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="password" id="txtPassword" class="form-control">
                                        <label class="form-label" for="txtPassword" style="margin-left: 0px;">*Password</label>
                                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
                                </div>
                            </div>
                            <hr>
                            <div class="btn-control">
                                <button class="btn btn-light ripple-surface" data-mdb-dismiss="modal">Close</button>
                                <button type="button" id="btnSignUp" class="btn btn-primary ripple-surface">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </body>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/mdbootstrap/js/mdb.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/general.js"></script>
</html>