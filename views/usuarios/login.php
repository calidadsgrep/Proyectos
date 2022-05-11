<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section class="login-block">
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-6 login-sec">

              <img src="assets\dist\img\user.png" alt="" width="100px" height="auto" class="user">
               
        
                <br>
                <h2 class="text-center">Inicia sesión ahora </h2>

                <form action="?c=usuarios&a=login" method="POST" name="form-login" id="form-login">
                <div class="form-group">
                    <div class="label">Usuario</div>
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <div class="label">Password</div>
                    <input type="password" class="form-control" placeholder="Clave" name="clave" required>
                </div>

                


                <div align="center" class="form-check">
                  <button  id="login" class="btn btn-login waves-effect">Iniciar</button>
                    
                </div>
                </form>
                <div class="copy-text">Creado por Calidadsg.com-A.o.A

                    </a></div>
            </div>

            <div class="col-md-4 col-lg-4 baner-sec">
                <img src="assets\dist\img\logocalidad1.png" alt="" width="300px" height="auto" class="ml">

            </div>


        </div>
    </div>
</section>

</body>
</html>
    

<!--   </div>         
    </div>
</div>-->
<style type="text/css">
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

    .login-block {
        /* background: #DE6262; */
        /* fallback for old browsers */
        /* background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262); */
        /* Chrome 10-25, Safari 5.1-6 */
        /* background: linear-gradient(to bottom, #FFB88C, #DE6262); */
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* background: rgb(2, 0, 36);
        background: linear-gradient(0deg, rgba(2, 0, 36, 0.9640231092436975) 0%, rgba(81, 159, 199, 1) 35%, rgba(87, 122, 166, 1) 100%); */
        
        background-color: #ecf0f3;

        /* background: rgb(115,115,133);
background: linear-gradient(0deg, rgba(115,115,133,0.989233193277311) 0%, rgba(172,187,207,1) 48%); */
        
        /* background: rgb(51,48,112);
background: linear-gradient(0deg, rgba(51,48,112,0.989233193277311) 0%, rgba(87,122,166,1) 48%); */
        align-items: center;
        display: flex;
        float: left;
        width: 100vw;
        height: 100vh;
        padding: 50px 0;
    }

    .banner-sec {
        background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;
        background-size: cover;
        min-height: 500px;
        border-radius: 0 10px 10px 0;
        padding: 0;
    }

    .container {
        /* background: #548cb626; */
        border-radius: 10px;



        margin-top: 40px;
        margin-left: 10%;
        /* box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1); */
    }

    .ml {
        margin: auto;
    display: block;
    position: relative;
    margin-top: 30%;
    /* filter: drop-shadow(1px 1px 2px #fff); */
    }
    .user{
        margin: auto;
        display: flex;

    }

    /* .carousel-inner {
        border-radius: 0 10px 10px 0;
    }

    .carousel-caption {
        text-align: left;
        left: 5%;
    } */
    .baner-sec {
        /* background-color: #548cb6; */
        /* border-radius: 10px; */
        justify-content: center;
        margin-top: 5%;
       
    }
    .form-control:focus {
    border-color: beige;
    
    box-shadow: 0px 0px 1px 2px #e67817;
    }


    .login-sec {
        padding: 50px 30px;
        position: relative;
        background-color: #ecf0f3;
        border-radius: 10px;
        box-shadow: -5px -5px 10px #fff,
        5px 5px 10px #c1c1c1,
        inset 0px 0px 0px #fff,
        inset 0px 0px 0px #c1c1c1;
        /* box-shadow: -11px 15px 2px 1px rgb(0 0 0 / 10%); */
    }

    .login-sec .copy-text {
        position: absolute;
        width: 90%;
        bottom: 10px;
        font-size: 13px;
        text-align: center;
    }

    .login-sec .copy-text i {
        color: #FEB58A;
    }

    .login-sec .copy-text a {
        color: #E36262;
    }

    .login-sec h2 {
        margin-bottom: 30px;
        font-weight: 800;
        font-size: 30px;
        color: #707578;
    }

    .login-sec h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #e67817;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
        margin-left: auto;
        margin-right: auto
    }

    /* .btn-login {
        background: #1f1a17;
        color: #fff;
        font-weight: 600;
        cursor: pointer;
        border-radius: 10px;
    }
    .btn-login:hover {
        background: #c0c0c0;
        color: #000000;
        font-weight: 600;
        cursor: pointer;
    } */

    .btn-login{
        background: #e5e5e5;
        background-size: 55px;
        text-shadow: 1px 1px 1px #c0c0c0;
        color: #000000;
        border-radius: 10px;
        box-shadow: -10px -10px 15px #fff,
        10px 10px 15px #c1c1c1,
        inset 0px 0px 0px #fff,
        inset 0px 0px 0px #c1c1c1;
        cursor: pointer;
        transition: all 300ms ease;
       

    }
    .btn-login:hover{
        box-shadow: 0px 0px 0px #fff,
        0px 0px 0px #c1c1c1,
        inset -10px -10px 15px #fff,
        inset 10px 10px 15px #c1c1c1;
        color: #000;
        text-shadow: 0px 0px 0px #c0c0c0;

    }
    .banner-text {
        width: 70%;
        position: absolute;
        bottom: 40px;
        padding-left: 20px;
    }

    .banner-text h2 {
        color: #fff;
        font-weight: 600;
    }

    .banner-text h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
    }

    .banner-text p {
        color: #fff;
    }
</style>




