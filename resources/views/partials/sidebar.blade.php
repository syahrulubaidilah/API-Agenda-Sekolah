<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!--<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div> /.sidebar-shortcuts -->

				<ul class="nav nav-list">
        <li class="" id="nav-dashboard">
          <a href={{route('page.dashboard')}}>
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
          </a>

          <b class="arrow"></b>
        </li>
        @if(Auth::user()->level == 1)                                        
        <li class="" id="nav-guru">
          <a href={{route('page.list-guru')}}>
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Member </span>
          </a>

          <b class="arrow"></b>
        </li>

        <li class="" id="nav-staf">
          <a href={{route('page.list-staf')}}>
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Admin </span>
          </a>

          <b class="arrow"></b>
        </li>
        @endif

        <li class="" id="nav-agenda">
          <a href={{route('page.list-activity')}}>
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Agenda </span>
          </a>

          <b class="arrow"></b>
        </li>

        <li class="" id="nav-calendar">
          <a href={{route('page.calendar')}}>
            <i class="menu-icon fa fa-calendar"></i>
            <span class="menu-text"> Kalender </span>
          </a>

          <b class="arrow"></b>
        </li>
      </ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

