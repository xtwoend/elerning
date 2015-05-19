<!-- .aside -->
        <aside class="bg-black dk aside hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                
                <div class="navbar-header aside-md bg-black">
                  <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                    <i class="icon-list"></i>
                  </a>
                  <a href="{{ url('/') }}" class="navbar-brand text-lt">
                    <i class="icon-earphones"></i>
                    <img src="/images/logo.png" alt="." class="hide">
                    <span class="hidden-nav-xs m-l-sm">Learn</span>
                  </a>
                  <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                    <i class="icon-settings"></i>
                  </a>
                  <ul class="nav navbar-nav m-n hidden-xs nav-user user hide">
                    <li class="hidden-xs">
                      <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="badge badge-sm up bg-danger count">2</span>
                      </a>
                      <section class="dropdown-menu aside-xl animated fadeInUp">
                        <section class="panel bg-white">
                          <div class="panel-heading b-light bg-light">
                            <strong>You have <span class="count">2</span> notifications</strong>
                          </div>
                          <div class="list-group list-group-alt">
                            <a href="#" class="media list-group-item">
                              <span class="pull-left thumb-sm">
                                <img src="images/a0.png" alt="..." class="img-circle">
                              </span>
                              <span class="media-body block m-b-none">
                                Use awesome animate.css<br>
                                <small class="text-muted">10 minutes ago</small>
                              </span>
                            </a>
                            <a href="#" class="media list-group-item">
                              <span class="media-body block m-b-none">
                                1.0 initial released<br>
                                <small class="text-muted">1 hour ago</small>
                              </span>
                            </a>
                          </div>
                          <div class="panel-footer text-sm">
                            <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                            <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                          </div>
                        </section>
                      </section>
                    </li>
                    @if(Auth::check())
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
                        <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                          <img src="images/a0.png" alt="...">
                        </span>
                        {{ Auth::user()->fullname }} <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu animated fadeInRight">            
                        <li>
                          <span class="arrow top"></span>
                          <a href="#">Settings</a>
                        </li>
                        <li>
                          <a href="profile.html">Profile</a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="badge bg-danger pull-right">3</span>
                            Notifications
                          </a>
                        </li>
                        <li>
                          <a href="docs.html">Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{ url('auth/logout') }}" >Logout</a>
                        </li>
                      </ul>
                    </li>
                    @endif
                  </ul>
                </div>

                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <ul class="nav bg clearfix">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      Discover
                    </li>
                    <li>
                      <a href="{{ url('/') }}">
                        <i class="fa fa-home text-success"></i>
                        <span>Home</span>
                      </a>
                    </li>
                    <li>
                      <a href="genres.html">
                        <i class="icon-music-tone-alt icon text-info"></i>
                        <span>Genres</span>
                      </a>
                    </li>
                    <li class="m-b hidden-nav-xs"></li>
                  </ul>
                  <ul class="nav" data-ride="collapse">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      Interface
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                        <i class="icon-screen-desktop icon">
                        </i>
                        <span>Layouts</span>
                      </a>
                      <ul class="nav dk text-sm">
                        <li >
                          <a href="layout-color.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Color option</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-boxed.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Boxed layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-fluid.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Fluid layout</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav text-sm">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      <span class="pull-right"><a href="#"><i class="icon-plus i-lg"></i></a></span>
                      Playlist
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-music-tone icon"></i>
                        <span>Hip-Pop</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-playlist icon text-success-lter"></i>
                        <b class="badge bg-success dker pull-right">9</b>
                        <span>Jazz</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            @if(Auth::check())
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <div class="bg hidden-xs ">
                  <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">                        
                        <img src="images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt">{{ Auth::user()->fullname }}</strong> 
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">                      
                      <li>
                        <span class="arrow bottom hidden-nav-xs"></span>
                        <a href="#">Settings</a>
                      </li>
                      <li>
                        <a href="profile.html">Profile</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a href="docs.html">Help</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="{{ url('auth/logout') }}">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>      
              </footer>
              @endif
          </section>
        </aside>
        <!-- /.aside -->