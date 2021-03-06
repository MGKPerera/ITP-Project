<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- icon -->
    <link rel="icon" type="image/png" href="../../assets/images/logo-sm2.png">
    <title>Mass Line (pvt) Ltd</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../dist/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="fas fa-bars fa-lg"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.blade.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-sm.png" alt="homepage" class="light-logo" width="38px" height="38px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logo-txt.png" width="152px" height="40px" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="fas fa-bars fa-lg"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fas fa-search fa-lg"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell fa-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="far fa-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-cog m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.blade.php" aria-expanded="false"><i class="fas fa-th"></i><span class="hide-menu pl-1">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-users fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Customers</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="wholesale-customer.blade.php" class="sidebar-link"><i class="fas fa-people-carry fa-3x"></i><span class="hide-menu">Wholesale Customer</span></a></li>
                                <li class="sidebar-item"><a href="retail-customer.blade.php" class="sidebar-link"><i class="fas fa-street-view fa-3x" aria-hidden="true"></i><span class="hide-menu">Retail Customers</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="supplier.blade.php" aria-expanded="false"><i class="fas fa-truck-loading fa-lg"></i></i><span class="hide-menu">&#X00A0;Suppliers</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-th-list fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Categories</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="add-category.blade.php" class="sidebar-link"><i class="fas fa-tasks"></i><span class="hide-menu">Manage Categories </span></a></li>
                                <li class="sidebar-item"><a href="main-categories-summary.blade.php" class="sidebar-link">
                                        <i class="far fa-chart-bar"></i><span class="hide-menu">View Summary</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-exchange-alt" aria-hidden="true"></i><span class="hide-menu pl-1">Transaction</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="wholesale-transactions.blade.php" class="sidebar-link"><i class="fas fa-money-bill-alt" aria-hidden="true"></i><span class="hide-menu">Wholesale transaction </span></a></li>
                                <li class="sidebar-item"><a href="retail-transaction.blade.php" class="sidebar-link">
                                        <i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Retail transactions</span>
                                    </a></li>
                                <li class="sidebar-item"><a href="supplier-transaction.blade.php" class="sidebar-link">
                                        <i class="fas fa-credit-card"></i><span class="hide-menu">Supplier transactions</span>
                                    </a></li>
                                <li class="sidebar-item"><a href="deposited-returned-cheques.blade.php" class="sidebar-link">
                                        <i class="fas fa-undo"></i><span class="hide-menu">Manage Cheques</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="invoice.blade.php" aria-expanded="false"><i class="fas fa-newspaper"></i><span class="hide-menu">Generate Invoice</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="employee.blade.php" aria-expanded="false">
                                <i class="fa fa-address-card" aria-hidden="true"></i><span class="hide-menu pl-1">Employees</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="employee.blade.php" class="sidebar-link"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="hide-menu">Manage Employees </span></a></li>
                                <li class="sidebar-item"><a href="employee-salary.blade.php" class="sidebar-link">
                                        <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Salary Report</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="vehicle.html" aria-expanded="false">
                                <i class="fa fa-car" aria-hidden="true"></i><span class="hide-menu pl-1">Vehicle</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="vehicle-management.blade.php" class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu">Manage Vehicles</span></a></li>
                                <li class="sidebar-item"><a href="vehicle-finance.blade.php" class="sidebar-link">
                                        <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Vehicle Finance</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-secret"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.blade.php" class="sidebar-link"><i class="fas fa-sign-in-alt"></i><span class="hide-menu"> Login </span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.blade.php" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Register </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Blue Readymade Jeans</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
									<li class="breadcrumb-item"><a href="#">Readymade Main Product</a></li>
									<li class="breadcrumb-item"><a href="#">Readymade Sub Product</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card">
                    <div class="shadow-sm bg-white-rounded">
                        <ul class="float-right list-style-none">
                            <li class="dropdown">
                                <a class="pr-2" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-v p-2"></i>
                                </a>
                                <div class="dropdown-menu mr-3 shadow-sm bg-white-rounded" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item pl-2" href="#">Edit</a>
                                    <a class="dropdown-item pl-2" href="#">Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-6">
                            <img src="../../assets/images/big/img-bottom.jfif" alt="bottom1" class="img-thumbnail rounded border-0 bg-light" width="70%">
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <div class="header mb-1">
                                <h2 class="text-right display-5">Blue Readymade Jeans</h2>
                                <p class="text-right text-muted">Description Goes Here</p>
                            </div>
                            <div class="row product-description shadow-sm bg-white-rounded">
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Item Code</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>item001</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Initial Stocks</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>100</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">WholeSale Price</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>Rs 500</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Retail Price</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>Rs 1000</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Supplier Link</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark><a href="https://www.google.com" class="text-decoration-none">Alpha</a></Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Sizes Availble</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <span class="badge badge-pill badge-info">S</span>
                                    <span class="badge badge-pill badge-info">M</span>
                                    <span class="badge badge-pill badge-info">L</span>
                                    <span class="badge badge-pill badge-info">XL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 mx-5">
                        <div class="col">
                            <a class="btn btn-outline-info shadow-none font-weight-bold float-right" role="button" data-toggle="collapse" href="#collapseNewCategory" aria-expanded="false" aria-controls="collapseNewCategory">
                                <i class="fas fa-chart-bar"></i> View Report </a>
                        </div>
                        <div class="collapse" id="collapseNewCategory">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Monthly Sub Product Summary</h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody class="customtable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Item Code</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Product Main Catogory</th>
                                                    <th scope="col">Monthly Left Quantity</th>
                                                    <th scope="col">Monthly Sold Quanity</th>
                                                    <th scope="col">Monthly Sales Amount</th>
                                                    <th scope="col">Date of Last Payment</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>P001</td>
                                                <td>Blue Jacket</td>
                                                <td>Ready Made</td>
                                                <td>60</td>
                                                <td>1740</td>
                                                <td>80000</td>
                                                <td>2020/02/30</td>
                                            </tr>
                                            <tr>
                                                <td>P002</td>
                                                <td>Black Jacket</td>
                                                <td>Ready Made</td>
                                                <td>130</td>
                                                <td>1670</td>
                                                <td>74000</td>
                                                <td>2019/11/30</td>
                                            </tr>
                                            <tr>
                                                <td>P008</td>
                                                <td>Black Jeans</td>
                                                <td>Ready Made</td>
                                                <td>20</td>
                                                <td>1880</td>
                                                <td>120000</td>
                                                <td>2020/01/26</td>
                                            </tr>
                                            <tr>
                                                <td>P010</td>
                                                <td>Duck Canvas</td>
                                                <td>Fabric</td>
                                                <td>26</td>
                                                <td>1944</td>
                                                <td>240000</td>
                                                <td>2020/01/12</td>
                                            </tr>
                                            <tr>
                                                <td>P011</td>
                                                <td>Oil CLoth</td>
                                                <td>Fabric</td>
                                                <td>12</td>
                                                <td>1988</td>
                                                <td>298000</td>
                                                <td>2020/01/11</td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" class="btn btn-success">Print Report</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Mass Line (pvt) Ltd. Designed and Developed by <a href="#">####</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {

        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });
    });
    </script>
</body>

</html>
