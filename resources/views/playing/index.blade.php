<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cloud</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon"><i class="fas fa-cloud"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Cloud</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-user"></i><span>Playings</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                    
                    </div>
                </nav>
                <div class="container-fluid">

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Playings</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Playing Info</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info" style="overflow:auto;height:80vh">
                                <table class="table my-0" id="dataTable">
                                    @if (count($categories) > 0)
                                    <thead>
                                        <tr>
                                            <th>Player</th>
                                            <th>School</th>
                                            <th>Year</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($categories as $category)
                                            <x-playing-record :category="$category"/>
                                            @endforeach
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Player</strong></td>
                                            <td><strong>School</strong></td>
                                            <td><strong>Year</strong></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                    @else
                                    <thead>
                                        <tr>
                                            <th>Empty</th>
                                        </tr>
                                    </thead>
                                    @endif
                                </table>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#new-page-modal" type="button">Add New</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card"></div>

                </div>

                <div class="modal fade" role="dialog" tabindex="-1" id="new-page-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Playing</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        
                        <form class="user" method="POST" action="/playing">
                        @csrf
                        <div class="modal-body">
                        <div class="form-group">
                        <input class="form-control form-control-user" type="text" id="playerID" aria-describedby="nameHelper" value="" placeholder="Enter player..." name="playerID">
                        </br>
                        <input class="form-control form-control-user" type="text" id="schoolID" aria-describedby="nameHelper" value="" placeholder="Enter school..." name="schoolID">
                        </br>
                        <input class="form-control form-control-user" type="number" id="yearID" aria-describedby="nameHelper" value="" placeholder="Enter year..." name="yearID">
                        </div>
                        <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Cloud 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>