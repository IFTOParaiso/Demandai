<section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">

        <li id="editais">
            <a href="{{route('listar-edital')}}"
            >
                <i class="fa fa-fw fa-file "></i>
                <span>Editais</span>
            </a>
        </li>
        <li id="pesquisadores">
            <a href="{{route('listar-usuario-pesquisador')}}"
            >
                <i class="fa fa-fw fa-users "></i>
                <span>Pesquisadores</span>
            </a>
        </li>
        <li id="instituicao">
            <a href="{{route('listar-instituicoes')}}"
            >
                <i class="fa fa-fw fa-university "></i>
                <span>Instituições</span>
            </a>
        </li>
        <li id="areas-pesquisa">
            <a href="{{route('areas-pesquisa')}}"
            >
                <i class="fa fa-fw fa-search "></i>
                <span>Áreas de pesquisa</span>
            </a>
        </li>


    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->