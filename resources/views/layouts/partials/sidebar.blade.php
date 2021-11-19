<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">

                    @auth
                    <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">{{Auth::user()->name}}</span>
                    </a>
                    @else
                    <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                        <span class="hide-menu"> Tidak Ada Nama</span>
                        </a>
                        @endauth
                    </li>

                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="user"
                                aria-expanded="false">
                                <span class="hide-menu">Data User</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="apembeli"
                                aria-expanded="false">

                                <span class="hide-menu">Data Pembeli</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="atiket"
                                aria-expanded="false">

                                <span class="hide-menu">Data Tiket</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="abooking"
                                aria-expanded="false">

                                <span class="hide-menu">Data Booking</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="atransaksi"
                                aria-expanded="false">
                                <span class="hide-menu">Data Transaksi</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
