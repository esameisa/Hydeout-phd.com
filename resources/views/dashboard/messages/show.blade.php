@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Messages
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Message</div>
                </div>
                <div class="portlet-body">
                    <div>
                       <ul style="list-style: none;">
                           {{-- <li>{{ $message->name }}</li>
                           <li>{{ $message->email }}</li>
                           <li>{{ $message->number }}</li>
                           <li>{{ $message->message }}</li> --}}
                            <li class="mail-messages" >
                                <div class="mail-msg-header">
                                    <div class="msg-sender-recver">
                                        <strong>{{ $message->name }}</strong><br>
                                        <i>{{ $message->email }}</i>, 
                                        <i>{{ $message->number }}</i>
                                    </div>
                                </div>

                                <div class="mail-msg-container" style="">
                                    <div class="mail-msg-content">
                                        <p>{{ $message->message }}</p>
                                    </div>
                                </div>
                            </li>
                       </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('footerscripts')

    
@stop