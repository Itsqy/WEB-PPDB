  <!-- Sidebar -->
  <div class="sidebar sidebar-style-2" data-background-color="dark2">
      <div class="sidebar-wrapper scrollbar scrollbar-inner" data-aos="swipe-out">
          <div class="sidebar-content">

              <ul class="nav nav-primary">



                  @if (Auth::user()->role == 'Admin')
                      <li class="nav-item">
                          <a href="/dashboard" href="#base">
                              <i class="fas icon-pie-chart"></i>
                              <p>Dashboard</p>
                              {{-- <span class="caret"></span> --}}
                          </a>

                      </li>
                      <li class="nav-item">
                          <a href="{{ route('show.table') }}" href="#base">
                              <i class="fas fa-layer-group"></i>
                              <p>Index</p>
                              {{-- <span class="caret"></span> --}}
                          </a>

                      </li>
                      <li class="nav-item">
                          <a href="{{ route('guru.index') }}" href="#base">
                              <i class="fas fa-pen"></i>
                              <p>User</p>
                              {{-- <span class="caret"></span> --}}
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('absen') }}" href="#base">
                              <i class="fas fa-pen"></i>
                              <p>Absen</p>
                              {{-- <span class="caret"></span> --}}
                          </a>
                      </li>



                  @elseif(Auth::user()->role == 'Guru')

                      <li class="nav-item">
                          <a href="{{ route('show.table') }}" href="#base">
                              <i class="fas fa-layer-group"></i>
                              <p></p>
                              {{-- <span class="caret"></span> --}}
                          </a>

                      </li>

                  @else


                      <li class="nav-item">
                          <a href="/dashboard" href="#base">
                              <i class="fas icon-pie-chart"></i>
                              <p>Dashboard User</p>
                              {{-- <span class="caret"></span> --}}
                          </a>

                      </li>
                      <li class="nav-item ">
                          <a data-toggle="collapse" href="#dashboard" class="collapsed" class="collapse"
                              aria-expanded="false">
                              <i class="fas fa-book"></i>
                              <p>Daftar</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="dashboard">

                              <ul class="nav nav-collapse">
                                  <li>
                                      <a href="{{ route('daftar') }}">
                                          <span class="sub-item">Isi Form</span>
                                      </a>
                                  </li>




                                  <li>
                                      <a href="{{ route('showbeforenilai', Auth::user()->name) }}">
                                          <span class="sub-item">Detail</span>
                                      </a>
                                  </li>

                                  <li>
                                      <a href="{{ route('update', Auth::user()->name) }}">
                                          <span class="sub-item">Edit Form</span>
                                      </a>
                                  </li>


                                  {{-- <li>
                                      <a href="{{ route('editfile', Auth::user()->name) }}">
                                          <span class="sub-item">Edit Berkas</span>
                                      </a>
                                  </li> --}}
                                  <li>
                                      <a href="{{ route('show.user', Auth::user()->name) }}">
                                          <span class="sub-item">Nilai Kelulusan</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="{{ route('card', Auth::user()->name) }}">
                                          <span class="sub-item">Card</span>
                                      </a>
                                  </li>



                              </ul>



                          </div>

                      </li>
                      <li class="nav-section">
                          <span class="sidebar-mini-icon">
                              <i class="fa fa-ellipsis-h"></i>
                          </span>
                          {{-- <h4 class="text-section">Components</h4> --}}
                      </li>
                  @endif
          </div>
      </div>
  </div>

  <!-- End Sidebar -->
