<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Admin Dashboard</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{ url('admin/index') }}" aria-expanded="false">Home</a>
            </li>
            <li>
                <a href="{{ url('admin/withdrawals') }}">Pending Withdrawals</a>
            </li>
            <li>
                <a href="{{ url('admin/deposits') }}">Pending Deposits</a>
            </li>
            <li>
                <a href="{{ url('admin/rates') }}">Exchange Rates</a>
            </li>
            <li>
                <a href="{{ url('admin/transactions') }}">Transactions</a>
            </li>
            <li>
                <a href="{{ url('admin/credentials') }}">Credentials</a>
            </li>
            <li>
                <a href="{{ url('logout') }}">Logout</a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Admin Dashboard</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
