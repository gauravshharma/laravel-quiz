@extends('dashboard.dashboard') 
@section('title', 'Harry Potter Quiz') 
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/barang">Quiz</a></li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Scorecard</h6>
                        </div>

                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="text-center mx-auto my-5">
                                        <h2>Thanks for submitting!</h2>
                                        <h2>You scored: <b>{{ $score }} / 5 </b></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <h4 class="ml-4">Correct Answers: </h4>
                                <ul class="list-group">
                                    @foreach($correctAnswers as $questionId => $correctOption)
                                    <li class="list-group-item">Question {{ $questionId }}: Correct Option - {{ $correctOption }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>

        @endsection