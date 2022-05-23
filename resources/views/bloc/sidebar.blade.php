<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Tableau du board</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Projets</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Liste des projets</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Ajouter un projet</a></li>
            
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Tâche</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Liste des Tâche</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Ajouter Tâche</a></li>
          </ul>     
        </div>

      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Collaborateurs</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Liste des Collaborateurs</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Ajouter Collaborateur</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Réunions</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Liste des Réunions</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Ajouter Réunion</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>