@extends('layouts.app')
@section('title','Notifications')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="bg-white border-radius-4 box-shadow mb-30">
                    <div class="pt-20 pl-20 pb-0">
                        <h4 class="h4">Notifications<a class="pull-right pr-10 h6" href="{{ route('notifications.markAllAsRead',auth()->user()) }}">Marquer tout comme lu</a> </h4>
                    </div>
                    <hr>
                    <div class="row no-gutters no-footer">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="chat-detail">
                                <div class="chat-box h-100">
                                    <div class="chat-desc customscroll h-100">
                                        <ul>
                                            <li class="clearfix">
                                                @if(Auth::user()->notifications->count())
                                                    @foreach (Auth::user()->notifications as $notification)
                                                        <div class="chat-body clearfix ml-3" id="notif-{{ $notification->id }}">
                                                            <p style="word-wrap: break-word"><span class="d-block text-secondary pb-1">
                                                                <b><u>{{ $notification->data['from'] }}</u> :</b>
                                                                @if($notification->type === 'App\Notifications\NotifyEvent')
                                                                    <a href="{{ url('evenement/'.$notification->data['idEvent']) }}">lien</a>
                                                                @endif
                                                            </span>{{ $notification->data['brief'] }}</p>
                                                            <div class="chat_time float-right mb-10"> {{ $notification->created_at }}</div>
                                                        </div>
                                                    @endforeach
                                                @else  <p>Aucun</p>
                                                @endif
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    @endsection
