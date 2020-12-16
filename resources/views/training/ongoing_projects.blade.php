@extends('layouts.training.master')
@section('head')
   @include('layouts.training.head')
@endsection
@section('content')
<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Skills and Management Management</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>Ongoing Projects</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start blog-grid-section -->
        <section class="blog-grid-section section-padding">
            <div class="container">
                <div class="news-grids">
                     @isset($ongoing_projects)
                        @foreach($ongoing_projects as $projects)
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('uploads/pictures/user/'.$projects->photo) }}"alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>{{ $projects->date }}</li>
                                    <li><i class="fa fa-user"></i><a href="#">Administrator</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ route('training.project.completed.view',['project_alias' =>$projects->project_alias]) }}">{{ strtoUpper($projects->name) }}</a></h3>
                                <p>{!! Str::words($projects->content,10,' ...') !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                </div> <!-- end news-grids -->

                <!-- <div class="pagination-wrapper">
                    <ul class="pg-pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div> <!-- end container -->
        </section>
        <!-- end blog-grid-section     -->


@endsection