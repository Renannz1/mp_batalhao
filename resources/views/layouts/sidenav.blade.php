<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                {{-- INICIO --}}
                <div class="sb-sidenav-menu-heading">INÍCIO</div>

                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon "><i class="fas fa-chart-line"></i></div>
                    Tela Principal
                </a>


                {{-- TABEALAS --}}
                <div class="sb-sidenav-menu-heading">TABELAS</div>

                {{-- assistidas --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAssistida" aria-expanded="false" aria-controls="collapseAssistida">
                    <div class="sb-nav-link-icon text-primary"><i class="fas fa-user-shield"></i></div>
                    Assistida
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseAssistida" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('listar-assistidas') }}">Todas Assistidas</a>
                        <a class="nav-link" href="{{ route('form-nova-assistida') }}">Cadastrar Assistida</a>
                    </nav>
                </div>

                {{-- agressores --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAgressor" aria-expanded="false" aria-controls="collapseAgressor">
                    <div class="sb-nav-link-icon text-danger"><i class="fas fa-user"></i></div>
                    Agressores
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseAgressor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('listar-agressores') }}">Todos Agressores</a>
                        <a class="nav-link" href="{{ route('form-novo-agressor') }}">Cadastrar Agressor</a>
                    </nav>
                </div>

                {{-- medidas --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMedida" aria-expanded="false" aria-controls="collapseMedida">
                    <div class="sb-nav-link-icon text-success"><i class="fas fa-shield"></i></div>
                    Medidas
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseMedida" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('listar-medidas') }}">Todas Medidas</a>
                        <a class="nav-link" href="{{ route('form-nova-medida') }}">Cadastrar Medida</a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>