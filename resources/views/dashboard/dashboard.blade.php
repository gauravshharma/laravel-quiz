@extends('template.main')
@section('title', 'Dashboard')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                    <div class="card" style="width: 18rem;">
                        <img src="/assets/dist/img/harry-potter.jpg" class="card-img-top" alt="Harry Potter">
                        <div class="card-body">
                        <h4 class="card-title"><b>Harry Potter Quiz</b></h4>
                        <p class="card-text my-4">Hey Potterhead! How strong is your knowledge of Harry Potter?</p>
                        <a href="/quiz" class="btn btn-primary">Take the quiz now!</a>
                    </div>
                </div>
                    </div>
                    <!-- ./col -->
                    <!-- ./col -->
                    <!-- ./col -->
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

@endsection
