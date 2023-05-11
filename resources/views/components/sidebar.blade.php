<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                {{-- Cashier Controls --}}
                @if (Auth::user()->user_type == 0)
                @endif

                {{-- Admin Controls  --}}
                @if (Auth::user()->user_type == 1)
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                            aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('admin.user.index') }}" aria-expanded="false"><i
                                class="mdi mdi-account-plus"></i><span class="hide-menu">User
                                Management</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('admin.test.product') }}" aria-expanded="false"><i
                                class="mdi mdi-pi-box"></i><span class="hide-menu">Product Management</span></a>
                    </li>
                @endif
                {{-- Customer Controls --}}
                @if (Auth::user()->user_type == 2)
                @endif
                {{-- Chef Controls --}}
                @if (Auth::user()->user_type == 3)
                @endif

                {{-- <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms
                        </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span
                                    class="hide-menu"> Form Basic
                                </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span
                                    class="hide-menu"> Form Wizard
                                </span></a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>

</aside>
