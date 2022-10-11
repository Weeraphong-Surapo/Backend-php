
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    
    <!-- sweet alert js & css -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



    <script src="function/jquery-3.6.1.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .xxx{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container d-flex h-100 justify-content-center align-items-center">

            <div class="xxx col-lg-5 col-md-6 ">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="data:image/jpeg;base64,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" alt="">
                                        <h1 class="h4 text-secondary mb-4">ระบบสมัครเรียน</h1>
                                    </div>
                                    <form class="user" id="formLogin" method="POST">
                                        <input type="hidden" name="action" id="action" value="login">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="อีเมลล์">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="รหัสผ่าน">
                                        </div>
                                    
                                        <input type="submit" name="login" value="เข้าสู่ระบบ" class="btn btn-primary btn-user btn-block mb-3" id="login">

                                        <a href="Register.php" class="text-decoration-none" style="font-size: 12px; margin-left: 5px">สมัครเรียน</a>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="sweet.js"></script>
    <script>
        $(function(){
            $('#formLogin').submit(function(e){
                e.preventDefault();
                let action = 'login'
                let email = $('#email').val();
                let password = $('#password').val();
                if(email != "" && password != ""){ 
                    $.ajax({
                        url:'function/action.php',
                        method:'post',
                        data:{email:email,password:password,action:action},
                        beforeSend:function(){
                            $('#login').val('login...');
                        },
                        success:function(data){
                            if(data == 'yes'){
                                Swal('success','เข้าสู่ระบบสำเร็จ','');
                            }else{
                                Swal('error','อีเมลล์หรือรหัสไม่ถูกต้อง!','');
                            }
                        }
                    });
                }else{
                    Swal('warning','ป้อนข้อมูลให้ครบถ้วน!','');
                }
            });
        });

        </script>
</body>
</html>