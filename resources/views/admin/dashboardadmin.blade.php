<!DOCTYPE html>
<head>
    <title>Dashboard | Tuman For Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href={{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('admin/assets/vendor/linearicons/style.css')}}>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href={{asset('admin/assets/css/main.css')}}>
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href={{asset('admin/assets/css/demo.css')}}>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/LOGO.png')}}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src={{asset('img/LOGO.png')}} alt="Tuman Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>Diza</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/master/logout')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{url('/master')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="elements.html" class=""><i class="lnr lnr-file-empty"></i> <span>Artikel</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->

        @section('content')
        <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Make Tuman Article</h3>
                                <div class="right">
                                    <a href="{{route('posts.add')}}" class="btn btn-primary">Add New Article</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thread>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Writer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thread>
                                    <tbody>
                                       @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->artikel_id}}</td>
                                            <td>{{$post->tittle}}</td>
                                            <td>{{$post->admin->nama}}</td>
                                            <td>
                                                <a target="_blank" href="/rpl-tuman/public/article/sulawesi/{{$post->slug}}" class="btn btn-info btn sm">View</a>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2020 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src={{asset('admin/assets/vendor/jquery/jquery.min.js')}}></script>
<script src={{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}></script>
<script src={{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}></script>
<script src={{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}></script>
<script src={{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}></script>
<script src={{asset('admin/assets/scripts/klorofil-common.js')}}></script>
</body>

</html>
