<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
      <div>
        <p class="app-sidebar__user-name">John Doe</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Beranda</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Article</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{ route('article.create') }}"><i class="icon fa fa-circle-o"></i> Tulis Artikel</a></li>
        </ul>
      </li>


    </ul>
  </aside>
