@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>@lang('General.chat')</h1>
@stop

@section('content')

<div class="row mb-3 ">


    <div class="col-md-8 ">
        <div class="card direct-chat direct-chat-primary   ">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">@lang('General.chat_direct')</h3>

                <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-auto chat-syb2" style="display: block;">
                @if(!empty($conversations->items))
                    @foreach($conversations->items as $item)
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages h-100">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Working with AdminLTE on a great new app! Wanna join?
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    I would love to.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                        </div>
                        <!--/.direct-chat-messages-->
                    @endforeach
                @else
                    <p class="text-center">?????? ???????????? ??????????</p>
                @endif

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                    @if(!empty($conversations->items))
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Count Dracula
                                <small class="contacts-list-date float-right">2/28/2015</small>
                              </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                    @else
                        <h3 class="mb-0 text-center">
                            ???? ???????? ??????????????
                        </h3>
                    @endif
                    <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="display: block;">
                <form action="{{ route('admin.chat.store') }}" method="post">
                    @csrf
                    {{ method_field('POST') }}
                    <input type="hidden" name="participant_id" value="{{ (!empty(app('request')->input('participant_id')) ? app('request')->input('participant_id') : null) }}">
                    <input type="hidden" name="conversationId" value="{{ (!empty(app('request')->input('participant_id')) ? app('request')->input('participant_id') : null) }}">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">??????????</button>
                    </span>
                    </div>
                </form>
            </div>
            <!-- /.card-footer-->
        </div>
    </div>
    <div class=" col-md-4 ">
        <div class="overflow-auto ct-mn-lst h-100">
            <div class="chat-syb card mb-0 ">
                <div class="card-header">
                    <h5 class="mb-0 text-center">
                           <i class="fas fa-id-card-alt"></i>  @lang('General.contacts')
                    </h5>
                </div>
                <div class="card-body overflow-auto">
                    <ul class="list-unstyled p-0">
                    @foreach ($users as $user)
                    @if($user->id !== auth()->user()->id)
                        <li class="mx-2">
                            <a href="{{ url('Admin/chat?participant_id=' . $user->id) }}">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="http://lorempixel.com/index.php?generator=1&x=100&y=100&cat=people" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">{{$user->Name}}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num "> @php( print rand(5,30) )</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endif
                    @endforeach
                    </ul>
                </div>
                <div class="card-footer bg-white">
                    <div>
                        <button class="more-cht-btn"> ????????????  <i class="fas fa-plus"></i> </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@stop

