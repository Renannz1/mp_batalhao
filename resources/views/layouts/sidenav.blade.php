<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                {{-- título módulo CORE --}}
                <div class="sb-sidenav-menu-heading">Core</div>

                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>


                {{-- título módulo INTERFACE --}}
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="    sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Cadastrar
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                {{-- ..cadastrar --}}
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- links cadastrar --}}
                        <a class="nav-link" href="layout-static.html">Assistida</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Agressor</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Medida</a>
                    </nav>
                </div>

                {{-- .pages --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                        {{-- ..page.assistida --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAssistida" aria-expanded="false" aria-controls="pagesCollapseAssistida">
                            Assistida
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAssistida" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                {{-- links crud assistida --}}
                                <a class="nav-link" href="{{ route ('listar-assistidas') }}">Assistidas Cadastradas</a>
                                <a class="nav-link" href="{{ route ('form-nova-assistida') }}">Cadastrar nova Assistida</a>
                            </nav>
                        </div>

                        {{-- ..page.Agressor --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAgressor" aria-expanded="false" aria-controls="pagesCollapseAgressor">
                            Agressor
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAgressor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                {{-- links crud Agressor --}}
                                <a class="nav-link" href="{{ route ('listar-agressores') }}">Agressores Cadastrados</a>
                                <a class="nav-link" href="{{ route ('form-novo-agressor') }}">Cadastrar novo Agressor</a>
                            </nav>
                        </div>

                        {{-- ..pages.agressor --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseMedida" aria-expanded="false" aria-controls="pagesCollapseMedida">
                            Medida
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseMedida" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route ('listar-medidas') }}">Medidas Cadastrados</a>
                                <a class="nav-link" href="{{ route ('form-nova-medida') }}">Cadastrar nova Medida</a>
                            </nav>
                        </div>
                    </nav>
                </div>

                {{-- título módulo ADDONS --}}
                {{-- <div class="sb-sidenav-menu-heading">Addons</div>

                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> --}}

            </div>
        </div>

        {{-- footer slide nav --}}
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
        {{-- end footer slide nav --}}
    </nav>
</div>