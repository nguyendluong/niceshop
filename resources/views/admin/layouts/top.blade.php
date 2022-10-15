  <nav
      class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
      <div class="navbar-wrapper">
          <div class="navbar-header">
              <ul class="nav navbar-nav flex-row">
                  <li class="nav-item mobile-menu d-md-none mr-auto"><a
                          class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                              class="feather icon-menu font-large-1"></i></a></li>
                  <li class="nav-item"><a class="navbar-brand" href="/admin"><img class="brand-logo"
                              alt="stack admin logo" src="/assets_admin/app-assets/images/logo/stack-logo.png">
                          <h2 class="brand-text">NICE</h2>
                      </a></li>
                  <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                          data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
              </ul>
          </div>
          <div class="navbar-container content">
              <div class="collapse navbar-collapse" id="navbar-mobile">
                  <ul class="nav navbar-nav mr-auto float-left">
                      <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                              href="#"><i class="feather icon-menu"></i></a></li>
                      <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                  class="ficon feather icon-maximize"></i></a></li>
                  </ul>
                  <ul class="nav navbar-nav float-right">
                      <li class="dropdown dropdown-user nav-item">
                          <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                              <div class="avatar avatar-online">
                                  <img src="/assets_admin/app-assets/images/portrait/small/avatar-s-1.png"
                                      alt="avatar"><i></i>
                              </div>
                              <span class="user-name">Admin</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                              {{-- <a class="dropdown-item" href="user-profile.html">
                                  <i class="feather icon-user"></i>
                                  Edit Profile</a>
                              <a class="dropdown-item" href="app-email.html">
                                  <i class="feather icon-mail">
                                  </i> My Inbox</a>
                              <a class="dropdown-item" href="user-cards.html">
                                  <i class="feather icon-check-square"></i> Task</a>
                              <a class="dropdown-item" href="app-chat.html">
                                  <i class="feather icon-message-square"></i> Chats</a>
                              <div class="dropdown-divider"></div> --}}
                              <form class="form-horizontal form-simple" action="{{ route('admin.logout') }}"
                                  method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-color p-0">
                                      <a class="dropdown-item">
                                          <i class="feather icon-power"></i> Logout</a>
                                  </button>
                              </form>

                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>