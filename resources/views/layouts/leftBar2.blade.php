<div id="sidebar-container" class="bg-primary">
    <div class="logo">
        <h4 class="text-light font-weight-bold">ID Talento</h4>
    </div>
    <div class="sidebar-menu">
    
        <a href="#" class="d-block p-3 text-light font-weight-bold"> <i class="fas fa-border-all mr-2 fa-lg"></i> Escritorio</a>
        <a href="#" class="d-block p-3 text-light font-weight-bold"> <i class="fas fa-bell mr-2 fa-lg"></i> Notificacion</a>
        
        <a href="#submenu" data-toggle="collapse" class="parent-nav collapsed d-block p-3 text-light font-weight-bold"> <i class="fas fa-file-alt mr-2 fa-lg"></i> <span style="margin-right: 60px;">Hoja de vida</span> </a>
        <div id="submenu" class="collapse child-nav">
            <ul>
                <li><a class="d-block p-3 text-light" href="#">{{ __('Datos Personales') }} </a></li>
                <li><a class="d-block p-3 text-light" href="#">{{ __('Formacion Academica') }} </a></li>
                <li><a class="d-block p-3 text-light conocimientoInformatico" href="#">{{ __('Conocimientos Informaticos') }} </a></li>
            </ul>
        </div>

        <a href="#" class="d-block p-3 text-light font-weight-bold buscarEmpleo"><i class="fas fa-search mr-2 fa-lg"></i> Buscar Empleo</a>
        <a href="#" class="d-block p-3 text-light font-weight-bold"><i class="fas fa-cog mr-2 fa-lg"></i> Configuracion</a>
    </div>
</div>