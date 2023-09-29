  <div id="left-sidebar" class="sidebar">
      <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
      <div class="sidebar-scroll">
          <div class="user-account">
              <img src="{{ asset('dist/assets/images/user.png') }}" class="rounded-circle user-photo"
                  alt="User Profile Picture">
              <div class="dropdown">
                  <span>Welcome,</span>
                  <a href="javascript:void(0);" class="dropdown-toggle user-name"
                      data-toggle="dropdown"><strong>{{ auth()->user()->name }}</strong></a>
                  <ul class="dropdown-menu dropdown-menu-right account">
                      <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                      <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                      <li class="divider"></li>
                      <li><a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                  class="icon-power"></i>Logout</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

                      </li>
                  </ul>
              </div>
              <hr>
              <ul class="row list-unstyled">
                  <li class="col-4">
                      <small>Karyawan</small>
                      <h6>561</h6>
                  </li>
                  <li class="col-4">
                      <small>Cabang</small>
                      <h6>920</h6>
                  </li>
                  <li class="col-4">
                      <small>Sales</small>
                      <h6>$23B</h6>
                  </li>
              </ul>
          </div>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs d-flex justify-content-around">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-bell"></i></a>
              </li>
              {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i
                          class="icon-settings"></i></a></li> --}}
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-docs"></i></a>
              </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content padding-0">
              <div class="tab-pane active" id="menu">
                  <nav id="left-sidebar-nav" class="sidebar-nav">
                      <ul id="main-menu" class="metismenu li_animation_delay">
                          <li class=" {{ request()->is('admin') ? 'active' : '' }}  ">
                              <a href="{{ route('adminDashboard') }}"><i
                                      class="fa fa-dashboard"></i><span>Dashboard</span></a>
                          </li>
                          <li class=" {{ request()->is('admin/cabang*') ? 'active' : '' }}">
                              <a href="{{ route('cabang.index') }}"><i class="fa fa-bank"></i><span>Cabang</span></a>
                          </li>
                          <li
                              class="{{ request()->is('admin/admin*') ? 'active' : '' }} {{ request()->is('admin/pegawai*') ? 'active' : '' }}">
                              <a href="" class="has-arrow"><i class="fa fa-users"></i><span>Users</span></a>
                              <ul>
                                  <li class="{{ request()->is('admin/admin*') ? 'active' : '' }}"><a
                                          href="{{ route('admin.index') }}">Admin</a></li>
                                  <li class="{{ request()->is('admin/pegawai*') ? 'active' : '' }}"><a
                                          href="{{ route('pegawai.index') }}">Pegawai</a></li>
                              </ul>
                          </li>
                          <li
                              class="{{ request()->is('admin/kategori*') ? 'active' : '' }} {{ request()->is('admin/produk*') ? 'active' : '' }}  {{ request()->is('admin/bahanbaku*') ? 'active' : '' }} ">
                              <a href="" class="has-arrow"><i class="fa fa-server"></i><span>Inventory</span></a>
                              <ul>
                                  <li class="{{ request()->is('admin/kategori*') ? 'active' : '' }}"><a
                                          href="{{ route('kategori.index') }}">Kategori</a></li>
                                  <li class="{{ request()->is('admin/produk*') ? 'active' : '' }}"><a
                                          href="{{ route('produk.index') }}">Produk</a></li>
                                  <li class="{{ request()->is('admin/bahanbaku*') ? 'active' : '' }}"><a
                                          href="{{ route('bahanbaku.index') }}">Bahan Baku</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="#charts" class="has-arrow"><i
                                      class="fa fa-pencil-square-o"></i><span>Produksi</span></a>
                              <ul>
                                  <li><a href="chart-apex.html">Buat Produksi</a> </li>
                                  <li><a href="chart-c3.html">Hitung Produksi</a></li>
                                  <li><a href="chart-morris.html">Setting Produksi</a> </li>
                              </ul>
                          </li>
                          <li>
                              <a href="#Tables" class="has-arrow"><i class="fa fa-money"></i><span>Penjualan</span></a>

                          </li>
                          <li> <a href="#forms" class="has-arrow"><i
                                      class="fa  fa-shopping-cart"></i><span>Pembelian</span></a>

                          </li>

                          <li>
                              <a href="#Authentication" class="has-arrow"><i class="fa fa-truck"></i><span>Pasok
                                      Bahan</span></a>
                              <ul>
                                  <li><a href="page-login.html">Permintaan Mitra</a></li>
                                  <li><a href="page-register.html">Beli Bahan Baku</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="#Pages" class="has-arrow"><i class="fa fa-file"></i><span>Report</span></a>
                              <ul>
                                  <li><a href="page-blank.html">Report Pemasukan</a> </li>
                                  <li><a href="page-profile.html">Report Pengeluaran</a> </li>
                                  <li><a href="page-profile.html">Report Produksi</a> </li>
                                  <li><a href="page-profile.html">Report Pasok Bahan</a> </li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
              </div>
              <div class="tab-pane" id="Chat">
                  <ul class="right_chat list-unstyled li_animation_delay">
                      <li>
                          <a href="javascript:void(0);" class="media">
                              <img class="media-object" src="{{ asset('dist/assets/images/xs/avatar1.jpg') }}"
                                  alt="">
                              <div class="media-body">
                                  <span class="name d-flex justify-content-between">Chris Fox <i
                                          class="fa fa-heart-o font-12"></i></span>
                                  <span class="message">chrisfox@gmail.com</span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);" class="media">
                              <img class="media-object" src="{{ asset('dist/assets/images/xs/avatar2.jpg') }}"
                                  alt="">
                              <div class="media-body">
                                  <span class="name d-flex justify-content-between">Joge Lucky <i
                                          class="fa fa-heart-o font-12"></i></span>
                                  <span class="message">Jogelucky@gmail.com</span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);" class="media">
                              <img class="media-object" src="{{ asset('dist/assets/images/xs/avatar3.jpg') }}"
                                  alt="">
                              <div class="media-body">
                                  <span class="name d-flex justify-content-between">Isabella <i
                                          class="fa fa-heart-o font-12"></i></span>
                                  <span class="message">Isabella@gmail.com</span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);" class="media">
                              <img class="media-object" src="{{ asset('dist/assets/images/xs/avatar4.jpg') }}"
                                  alt="">
                              <div class="media-body">
                                  <span class="name d-flex justify-content-between">Folisise Chosielie <i
                                          class="fa fa-heart font-12"></i></span>
                                  <span class="message">FolisiseChosielie@gmail.com</span>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);" class="media">
                              <img class="media-object" src="{{ asset('dist/assets/images/xs/avatar5.jpg') }}"
                                  alt="">
                              <div class="media-body">
                                  <span class="name d-flex justify-content-between">Alexander <i
                                          class="fa fa-heart-o font-12"></i></span>
                                  <span class="message">Alexander@gmail.com</span>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="tab-pane" id="setting">
                  <h6>Choose Skin</h6>
                  <ul class="choose-skin list-unstyled">
                      <li data-theme="purple">
                          <div class="purple"></div>
                      </li>
                      <li data-theme="blue">
                          <div class="blue"></div>
                      </li>
                      <li data-theme="cyan" class="active">
                          <div class="cyan"></div>
                      </li>
                      <li data-theme="green">
                          <div class="green"></div>
                      </li>
                      <li data-theme="orange">
                          <div class="orange"></div>
                      </li>
                      <li data-theme="blush">
                          <div class="blush"></div>
                      </li>
                      <li data-theme="red">
                          <div class="red"></div>
                      </li>
                  </ul>

                  <ul class="list-unstyled font_setting mt-3">
                      <li>
                          <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" name="font" value="font-nunito"
                                  checked="">
                              <span class="custom-control-label">Nunito Google Font</span>
                          </label>
                      </li>
                      <li>
                          <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                              <span class="custom-control-label">Ubuntu Font</span>
                          </label>
                      </li>
                      <li>
                          <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" name="font"
                                  value="font-raleway">
                              <span class="custom-control-label">Raleway Google Font</span>
                          </label>
                      </li>
                      <li>
                          <label class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" name="font"
                                  value="font-IBMplex">
                              <span class="custom-control-label">IBM Plex Google Font</span>
                          </label>
                      </li>
                  </ul>

                  <ul class="list-unstyled mt-3">
                      <li class="d-flex align-items-center mb-2">
                          <label class="toggle-switch theme-switch">
                              <input type="checkbox">
                              <span class="toggle-switch-slider"></span>
                          </label>
                          <span class="ml-3">Enable Dark Mode!</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                          <label class="toggle-switch theme-rtl">
                              <input type="checkbox">
                              <span class="toggle-switch-slider"></span>
                          </label>
                          <span class="ml-3">Enable RTL Mode!</span>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                          <label class="toggle-switch theme-high-contrast">
                              <input type="checkbox">
                              <span class="toggle-switch-slider"></span>
                          </label>
                          <span class="ml-3">Enable High Contrast Mode!</span>
                      </li>
                  </ul>
              </div>
              <div class="tab-pane" id="question">
                  <nav id="left-sidebar-nav" class="sidebar-nav">
                      <ul id="main-menu" class="metismenu li_animation_delay">
                          <li>
                              <a href="#Pages" class="has-arrow"><i class="fa fa-file"></i><span>Report</span></a>
                              <ul>
                                  <li><a href="page-blank.html">Report Pemasukan</a> </li>
                                  <li><a href="page-profile.html">Report Pengeluaran</a> </li>
                                  <li><a href="page-profile.html">Report Produksi</a> </li>
                                  <li><a href="page-profile.html">Report Pasok Bahan</a> </li>
                                  <li><a href="page-profile.html">Report Pengiriman</a> </li>
                              </ul>
                          </li>
                      </ul>
                  </nav>

              </div>
          </div>
      </div>
  </div>
