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
                        <table class="table table-striped table-hover" id="messages-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Message</th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('footerscripts')

    <script type="text/javascript">
        requirejs([
            'jquery',
            'dataTables'
        ], function ($, DataTable) {
            'use strict';
            $('#messages-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('ajax.messages.index') !!}',
                columns: [
                    { data: 'id' },
                    { 
                        data: 'name',
                        "searchable": true,
                        "orderable": true
                    },
                    { 
                        data: 'email',
                        "searchable": true,
                        "orderable": true
                    },
                    { 
                        data: 'number',
                        "searchable": true,
                        "orderable": true
                    },
                    { 
                        data: 'message',
                        "searchable": true,
                        "orderable": true,
                        render:function (data,type,row) {
                            var str = data;
                            if (data.length > 140) {
                                str = data.substring(0, 140)+'......';
                            }

                            return str;
                        }
                    },
                    {
                        data: null,
                        "searchable": false,
                        "orderable": false,
                        render: function( data, type, row ) {
                            var show = '<a class="btn blue btn-info btn-xs" href="'+data.show+'"> show </a>';
                            var deleteBtn = '<form method="POST" action="' + data.delete + '">' +
                                        '<input name="_method" type="hidden" value="delete">' +
                                        '{!! Form::token() !!}' +
                                        '<input class="btn btn-danger btn-xs" type="submit" value="Delete">' +
                                        '</form>';
                            return  show + deleteBtn;
                        }
                    }
                ]
            });
        });
    </script>
    
@stop