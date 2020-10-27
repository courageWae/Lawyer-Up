@extends('/layouts/web/master')
@section('head')
   @include('/layouts/web/head')
@endsection
@section('content')


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>DashBoard</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Dashboard</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start products-section -->
        <section class="products-section shop section-padding">
            <div class="container">
                <div class="row products-grids">
                    <!-- PACKAGE ONE -->
                    @include('user.dashBox')
                    <div class="col col-lg-8" style ="padding-left:20px;">
                      @isset($clientPackage)   
                        <table class="table table-striped table-bordered">
                           <thead>
                               <tr style="background-color:rgb(245, 197, 66);">
                                   <th colspan="4">My Packages</th>
                               </tr>
                            </thead>
                            <tbody>            
                               <tr>
                                   <th colspan="4" style="padding:15px;"><span class="label label-warning" style="padding:5px;font-size: 15px;"></span></th>
                               </tr>
                               <tr>
                                  <th>Package Name</th>
                                  <th>Category</th>
                                  <th>Price</th>
                                  <th>Status</th>
                               </tr> 
                                @foreach($clientPackage as $clientPackage)
                                  @php( $isClientPackage = App\Category::find($clientPackage->category_id))
                                <tr>
                                    <td style="padding:10px;font-size: 20px;">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                        </svg>&nbsp&nbsp&nbsp&nbsp{{ $isClientPackage->package->name }}                  
                                    </td>
                                    <td style="padding:10px;font-size: 20px;">{{ strtoupper($isClientPackage->name) }}</td>
                                    <td style="padding:10px;font-size: 20px; color:red;">{{ $isClientPackage->price }}</td>
                                    <td style="padding:10px;font-size: 20px;">{{ $clientPackage->status }}</td>
                                    <td style="padding:10px;font-size: 20px;"><a class="btn btn-primary" href = "{{ route('user.viewPackage',['category'=>$isClientPackage->id]) }}">View</a></td>
                                </tr>
                                @endforeach   
                           </tbody>
                        </table> 
                      @endisset
                      @empty($clientPackage)
                       <div class="alert alert-secondary" role="alert">
                         You Have no Active or Pending Packages
                       </div>
                      @endempty  
                    </div>
               </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->
@endsection