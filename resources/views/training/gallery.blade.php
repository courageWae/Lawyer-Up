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
                        <h2>Skills and Management Training</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('training.home') }}">Home</a></li>
                            <li>Gallery</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->

        <section class="section-padding projects-grid-view-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="projects-grid-view">
                            @isset($album)
                            @foreach($album as $album)
                            <div class="grid">
                                @foreach($album->photo as $photo)
                                 @if($loop->iteration)
                                 <div class="project-img">
                                    <img src="{{ asset('uploads/pictures/user/'.$photo->photo) }}" style="height:265px;width:390px;"alt>
                                 </div>
                                   @break
                                 @endif
                                @endforeach 
                                <div class="project-info">
                                    <div class="inner-info">
                                        <a href="{{ route('view.album.photos',['album_alias'=>$album->album_alias]) }}"><h3>Album : {{ $album->name }}</h3></a>
                                        <div class="tags">{{ $album->count() }} Pictures</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


@endsection