<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/icon_building.png') }}" type="image/x-icon" />
    <title>CondoApp</title>

</head>
<body>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6 containerImg">
                <div class="boxImg"><img class="img" src="{{ asset('img/condoApp_login.jpg') }}" alt="CondoApp"></div>                
            </div>

            <div class="col-md-6 containerLogin">

                <div class="col-md-4 card shadow">
                    <div class="card-body row">

                        <div class="col-md-12">
                            <center>
                                <img class="iconApp" src="{{ asset('img/icon_building.png') }}" alt="iconeCondoApp">
                            </center>
                        </div>

                        <div class="col-md-12">
                            <center>
                                <h3>CondoApp</h3>
                            </center>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="">E-mail</label>
                            <input id="txt-email" type="text" class="form-control" />
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <label for="">Senha</label>
                            <input id="txt-senha" type="password" class="form-control"/>
                        </div>

                        <div class="col-md-12">
                            <strong><a href="#">Esqueceu sua senha?</a></strong>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <button class="btn btn-secondary w100"
                                    onclick="autenticar().init()">Entrar</button>                            
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <button class="btn btn-secondary w100">Cadastrar</button>                            
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    
    <script src="{{ asset('js/login/login.js') }}"></script> 
    <script src="{{ asset('js/login/autenticar.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    @include('modalsucess')
</body>
</html>