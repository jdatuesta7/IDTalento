<div class="sidebar-header">
    <div class="logo-leftbar">
        <a class="navbar-brand" href="{{ route('login.people') }}">
            <img src="/img/logoidtalento.png" alt="">
        </a>
    </div>
</div>

<ul class="list-unstyled components">
    <li>
        <a href=" {{route('dashboard')}}" class="{{ setActive('dashboard') }} d-block text-light font-weight-bold"> <i class="fas fa-border-all mr-2 fa-lg"></i> Escritorio</a>
    </li>
    <li>
        <a href="#" class="{{ setActive('notification') }} d-block  text-light font-weight-bold"> <i class="fas fa-bell mr-2 fa-lg"></i> Notificacion</a>
    </li>    
    <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-block font-weight-bold text-light"><i class="fas fa-file-alt mr-2 fa-lg"></i> Hoja de vida</a>
        <ul class="collapse {{ setShow('personal.information') }} list-unstyled" id="pageSubmenu">
            <li><a class="{{ setActive('personal.information') }} d-block  text-light font-weight-bold" href="{{ route('personal.information') }}">{{ __('Datos Personales') }} </a></li>
            <li><a class="d-block  text-light font-weight-bold" href="#">{{ __('Formacion Academica') }} </a></li>
            <li><a class="d-block  text-light font-weight-bold" href="#">{{ __('Conocimientos Informaticos') }} </a></li>
            <li><a class="d-block  text-light font-weight-bold" href="#">{{ __('Experiencia Laboral') }} </a></li>
            <li><a class="d-block  text-light font-weight-bold" href="#">{{ __('Idiomas') }} </a></li>
            <li><a class="d-block  text-light font-weight-bold" href="#">{{ __('Enlaces Adicionales') }} </a></li>
            <li><a class="d-block  text-light font-weight-bold" href="#">{{ __('Hoja de vida') }} </a></li>
        </ul>
    </li>
    <li>
        <a href="#" class=" text-light font-weight-bold"><i class="fas fa-search mr-2 fa-lg"></i>Buscar Empleo</a>
    </li>
    <li>
        <a href="#" class=" text-light font-weight-bold"><i class="fas fa-cog mr-2 fa-lg"></i>Configuracion</a>
    </li>
</ul>