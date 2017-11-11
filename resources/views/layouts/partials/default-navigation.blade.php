<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Prefeitura de Brumadinho</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="{{ route('get.follow-request') }}">Consultar Protocolo</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('get.register') }}">Cadastrar</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
