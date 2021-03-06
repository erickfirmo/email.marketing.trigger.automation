
<!-- Sidebar Start -->
<aside class="sidebar" data-trigger="scrollbar">

    <!-- Sidebar Navigation Start -->
    <div class="sidebar--nav">
        <ul>
            <li>
                <ul>
                    <li class="{{ classActivePath('/admin/home', 'active', 0) }}">
                        <a href="{{ route('admin.home') }}">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">Automação de Envios</a>

                <ul>
                    <li class="{{ classActivePath('/admin/instituicoes', 'open', 2) }}">
                        <a href="javascript:void(0)">
                            <i class="fas fa-university"></i>
                            <span>Instituições</span>
                        </a>

                        <ul>
                            <li class="{{ classActivePath('/admin/instituicoes', 'active', 0) }}"><a href="{{ route('admin.instituicoes.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li class="{{ classActivePath('/admin/instituicoes/create', 'active', 0) }}"><a href="{{ route('admin.instituicoes.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>

                    <li class="{{ classActivePath('/admin/listas', 'open', 2) }}">
                        <a href="javascript:void(0)">
                            <i class="fas fa-list-ul"></i>
                            <span>Listas de Contatos</span>
                        </a>

                        <ul>
                            <!--<li class="{{ classActivePath('/admin/listas', 'active', 0) }}"><a href="javascript:void(0)"><i class="fas fa-bars"></i> Todas as Listas</a></li>-->
                            <li  class="{{ classActivePath('/admin/listas/create', 'active', 0) }}"><a href="{{ route('admin.listas.create') }}"><i class="fas fa-cloud-upload-alt"></i> Importar Lista</a></li>
                        </ul>
                    </li>

                    <li class="{{ classActivePath('/admin/mensagens', 'open', 2) }}">
                        <a href="javascript:void(0)">
                            <i class="fas fa-inbox"></i>
                            <span>Mensagens</span>
                        </a>

                        <ul>
                            <li class="{{ classActivePath('/admin/mensagens', 'active', 0) }}"><a href="{{ route('admin.mensagens.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li class="{{ classActivePath('/admin/mensagens/create', 'active', 0) }}"><a href="{{ route('admin.mensagens.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>

                    <li class="{{ classActivePath('/admin/filtros', 'open', 2) }}">
                        <a href="javascript:void(0)">
                        <i class="fas fa-table"></i>
                            <span>Filtros</span>
                        </a>

                        <ul>
                            <li class="{{ classActivePath('/admin/filtros', 'open', 0) }}"><a href="{{ route('admin.filtros.index') }}"><i class="fas fa-bars"></i> Listar Todos</a></li>
                            <li class="{{ classActivePath('/admin/filtros/create', 'open', 0) }}"><a href="{{ route('admin.filtros.create') }}"><i class="fas fa-plus"></i> Criar Novo</a></li>
                        </ul>
                    </li>

                    <li class="{{ classActivePath('/admin/tipos-de-acoes', 'open', 2) }}">
                        <a href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                            <span>Tipos de Ações</span>
                        </a>

                        <ul>
                            <li class="{{ classActivePath('/admin/tipos-de-acoes', 'open', 0) }}"><a href="{{ route('admin.tipos-de-acoes.index') }}"><i class="fas fa-bars"></i> Listar Todos</a></li>
                            <li class="{{ classActivePath('/admin/tipos-de-acoes/create', 'open', 0) }}"><a href="{{ route('admin.tipos-de-acoes.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>

                    <li class="{{ classActivePath('/admin/acoes', 'open', 2) }}">
                        <a href="javascript:void(0)">
                        <i class="fas fa-paper-plane"></i>
                            <span>Ações</span>
                        </a>

                        <ul>
                            <!-- LISTAR TODAS (CORRIGIR O QUANTO ANTES) -->
                            <!-- <li class="{{ classActivePath('/admin/acoes', 'open', 0) }}"><a href="{{ route('admin.acoes.index') }}"><i class="fas fa-bars"></i> Listar Todas</a></li> -->
                            <li class="{{ classActivePath('/admin/acoes/create', 'open', 0) }}"><a href="{{ route('admin.acoes.create') }}"><i class="fas fa-plus"></i> Criar Nova</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar Navigation End -->

    <!-- Sidebar Widgets Start -->
    <!--<div class="sidebar--widgets">
        <div class="widget">
            <h3 class="h6 widget--title">Information Summary</h3>

            <div class="summary--widget">
                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                    <p class="summary--title">Daily Traffic</p>
                    <p class="summary--stats">307.512</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                    <p class="summary--title">Average Usage</p>
                    <p class="summary--stats">2,371,527</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                    <p class="summary--title">Disk Usage</p>
                    <p class="summary--stats">37.5%</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                    <p class="summary--title">CPU Usage</p>
                    <p class="summary--stats">37.05-32</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                    <p class="summary--title">Memory Usage</p>
                    <p class="summary--stats">37.05%</p>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Sidebar Widgets End -->
</aside>
<!-- Sidebar End -->
