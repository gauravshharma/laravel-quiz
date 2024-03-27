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
                            <h6>Choose the correct answer and submit to view your score.</h6>
                        </div>

                        <form action="{{ route('quiz.submit') }}" method="post">
                            <div class="container">
                                @csrf @foreach($questions as $question)
                                <div class="row my-4">
                                    <div class="col-12">
                                        <h4>{{ $question->question_text }}</h4>
                                        <div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="answers[{{ $question->id }}]" value="A">
                                                    <label class="form-check-label" for="answers[{{ $question->id }}]">
                                                        {{ $question->option_a }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="answers[{{ $question->id }}]" value="B">
                                                    <label class="form-check-label" for="answers[{{ $question->id }}]">
                                                        {{ $question->option_b }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="exampleRadios1" value="C">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        {{ $question->option_c }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="exampleRadios1" value="D">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        {{ $question->option_d }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                        </form>
                        </div>
                        </div>
                        </div>
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection