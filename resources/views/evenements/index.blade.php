@extends('layouts.app')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <a href="{{ route('evenement.create') }}">
                                <mtext class="pull-right pt-3 fa-2x fa fa-plus"></mtext>
                            </a>
                            <h4>Evenements</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Evenements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="blog-list">
                                <ul>
                                    @foreach ($evenements as $evenement )
                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <div class="blog-img">
                                                    @if($evenement->headingImg != null)
                                                    <img src="{{ url('/storage/'.$evenement->headingImg) }}" alt="" class="bg_img">
                                                    @else <img src="{{ asset('vendors/images/event-default.jpg') }}" alt="" class="bg_img">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12">
                                                <div class="blog-caption">
                                                    <h4><a href="{{ url('/evenement/' . $evenement->idEvenement ) }}">{{ $evenement->titre }}</a></h4>
                                                    <div class="blog-by" style="word-break: break-all">
                                                        <p>{{ $evenement->resume }}</p>
                                                        <div class="pt-10">
                                                            @cannot('update', $evenement)
                                                            <a href="{{ url('/evenement/' . $evenement->idEvenement ) }}" class="btn btn-outline-primary">Détails</a>
                                                            @endcannot
                                                            @can('update', $evenement)
                                                            <div class="dropdown mt-10 justify-between">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="{{ route('evenement.show',$evenement) }}"><i class="dw dw-eye"></i> View</a>
                                                                    <a class="dropdown-item" href="{{ route('evenement.edit',$evenement) }}"><i class="dw dw-edit2"></i> Edit</a>
                                                                    <a class="dropdown-item" href="{{ route('evenement.delete',$evenement) }}"><i class="dw dw-delete-3"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="blog-pagination">
                                <div class="btn-toolbar justify-content-center mb-15">
                                    {{ $evenements->links("pagination::bootstrap-4") }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card-box mb-30">
                                <h5 class="pd-20 h5 mb-0">Les évenemenets les plus récents</h5>
                                <div class="latest-post">
                                    <ul>
                                        @foreach (\App\Models\Evenement::all()->take(6) as $evt)
                                        <li>
                                            <a href="{{ url('/evenement/'.$evt->idEvenement) }}">{{ $evt->titre }}
                                                <p class="caption" style="word-break:break-all">{{ Str::substr($evt->resume,0,50) }}... <small class="pull-right">{{ $evt->date }}</small></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div> --}}
    </div>
</div>
@endsection