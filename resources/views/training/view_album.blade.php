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
                            <li><a href="{{ route('training.home') }}">Home</a></li>
                            <li><a href="{{ route('training.gallery') }}">Gallery</a></li>
                            <li>Pictures</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
<!-- recent-project --> 
        <section class="section-padding projects-grid-view-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="projects-grid-view">
                          @isset($album_alias)
                            @foreach($album_alias as $photo)
                            <div class="grid">
                                <div class="project-img">
                                    <img src="{{ asset('uploads/pictures/user/'.$photo->photo) }}" style="height:400px;width:500px;"alt>
                                </div>
                            </div>
                            @endforeach
                          @endisset
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end recent-project -->




@endsection