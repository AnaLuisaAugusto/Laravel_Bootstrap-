<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'       
        ])

        <script language="javascript">
            function blockletras(keypress) {

                if (keypress >= 48 && keypress <= 57) {

                    return true;

                } else {

                    return false;

                }

            }

            function blockNumbers(keypress) {

                if (keypress >=48 && keypress <= 57) {
                    return false;

                } else {
                    return true;
                }

            }
        </script>

        <style>

            body{
            background-color: whitesmoke;
            }

            .formLogin{  
            width: 400px;
            border: 5px inset transparent;
            border-image: linear-gradient(to right, rgb(135, 16, 165), #e073d2);
            border-image-slice: 1;
            padding: 25px;
            background-color: white;
            width: 35%; 
            height: 500px; 
            padding: 20px;  
            margin-bottom: 70px;
            margin-top: 10vh;
            }

            /*btn animação*/
            .fourth {
            border-color: #5e1c79;
            background-color:rgb(170, 113, 197);
            color: #fff;
            background-image: -webkit-linear-gradient(45deg, #d6abf3 50%, transparent 50%);
            background-image: linear-gradient(45deg, #ac4bec 50%, transparent 50%);
            background-position: 100%;
            background-size: 400%;
            -webkit-transition: background 300ms ease-in-out;
            transition: background 300ms ease-in-out;
            width: 140px;
            font-weight: bold;
            }

            .fourth:hover {
            background-position: 0;
            }
          
            .form-label{
    
                font-family: 'Comic Sans MS';
                text-align: left;
                position: left; 
                padding-right: 210px; 
                font-weight: bold; 
                color: rgb(84, 82, 82);
            }    

        </style>
    </head>
    <body>

          <!-- form login --->
          <center><form class="formLogin">
            <center>
                <h3 style="font-family: 'Comic Sans MS'"> 

                    <!-- ícone --->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="color: #5e1c79;">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 
                        0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                    </svg>

                    <font style="font-weight: bold"> &nbsp;Login de Acesso</font>     
                        
                </h3>

                <hr>        
                <br>  
                <br>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuário</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="txtnome" type="text" size="40" placeholder="nome do usuário" required onkeypress="return blockNumbers(window.event.keyCode)">
                    </div>
                </div>

                <br>

                <div class="mb-3">            
                    <label for="exampleInputPassword1" size="20" class="form-label">Senha</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="txtsenha" type="password" size="40" maxlength="3" placeholder="******"  required onkeypress="return blockletras(window.event.keyCode)">             
                    </div>          
                </div>

                <br>  
                <br>

                <button class="btn fourth" name="btnlogar" type="submit">Entrar</button>
            </center>
        </form>
    </body>
</html>