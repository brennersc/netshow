<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        <!-- Links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style></style>
    </head>
    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="https://netshow.me/wp-content/uploads/2019/11/logo-nsm-red-2.svg" alt="Netshow.me" id="logo" width="300" height="41">
            </a>
        </nav>
        <div class="container">
            <!-- Mensagem de Sucesso -->
            @if(session('mensagem'))
                <div id='alert' class="alert alert-success alert-dismissible fade show mt-5" role="alert"
                    style="box-shadow: 0px 0px 20px #A4A4A4;">
                    {{ session('mensagem') }} com Sucesso!!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert" style="box-shadow: 0px 0px 20px #A4A4A4;"> 
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mt-5">
                <form action="/cadastrar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" name="nome" class="form-control" id="nome" placeholder="nome" value="{{old('nome')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="nome@exemplo.com" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="telefone" name="telefone" class="form-control" id="telefone"  data-mask="(00)00000-0000" placeholder="(xx) xxxxx-xxxx"  value="{{old('telefone')}}">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" name="mensagem" id="mensagem" rows="3">{{old('mensagem')}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label for="file" class="custom-file-label">Arquivos</label>
                            <input type="file" class="custom-file-input" name="file" id="file" placeholder="" value="{{old('file')}}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>

                </form>
            </div >
        </div >
    </body>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Mascaras Campos -->
    <script src="{{ asset('js/jquery.mask.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

    </script>
    
</html>
