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
                        <h2>Training and Management Skills</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('legal.home') }}">Home</a></li>
                            <li>Completed Projects</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
        <section class="blog-single section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-md-9 blog-single-content">
                        <div class="post">
                            <div class="media">
                                <img src="{{ asset('uploads/pictures/user/'.$project_alias->photo) }}" alt class="img img-responsive">
                            </div>
                            <div class="post-title-meta">
                                <h2>{{ ucwords($project_alias->name) }}</h2>
                                <ul>
                                    <li><a href="#">Administrator</a></li>
                                    <li><a href="#">21 feb, 2016</a></li>
                                </ul>
                            </div>
                            <div class="post-body">
                                {!! $project_alias->content!!}
                            </div>
                        </div> <!-- end post -->
                    </div> <!-- end blog-content -->
                    @inject('projects','App\Project')
                    <div class="blog-sidebar col col-lg-3 col-lg-offset-1 col-md-3 col-sm-5">
                        <div class="widget recent-post-widget">
                            <h3>Ongoing Projects</h3>
                            <ul>
                                @foreach($projects->where('status','ongoing')->get() as $projects)
                                <li>
                                    <div class="post-pic">
                                        <img src="{{ asset('uploads/pictures/user/'.$projects->photo) }}" alt>
                                    </div>
                                   <div class="details">
                                        <h4>{{ $projects->name }}</h4>
                                        <a href="{{ route('training.project.ongoing.view',['project_alias' =>$projects->project_alias]) }}">{!! Str::words($projects->content,5,'...') !!}</a><br>
                                        <span>{{ $projects->date->toFormattedDateString() }}</span>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>

                        <div class="widget recent-post-widget">
                            <h3>Other Completed Projects</h3>
                            <ul>
                                @foreach($projects->where('status','completed')->get() as $projects)
                                <li>
                                    <div class="post-pic">
                                        <img src="{{ asset('uploads/pictures/user/'.$projects->photo) }}" alt>
                                    </div>
                                    <div class="details">
                                        <h4>{{ $projects->name }}</h4>
                                        <a href="{{ route('training.project.completed.view',['project_alias' =>$projects->project_alias]) }}">{!! Str::words($projects->content,5,'...') !!}</a><br>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
@endsection