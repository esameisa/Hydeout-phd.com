@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Users
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Users</div>
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-success pull-right" style="margin-top: 5px;" ><li class="fa fa-plus"></li>Add User</a>
                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="stores-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
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
            $('#stores-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('ajax.users.index') !!}',
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
                        "orderable": true,
                    },
                    {
                        data: null,
                        "searchable": false,
                        "orderable": false,
                        render: function( data, type, row ) {
                            var actionBtn = '<div style="display: inline-flex"><a href="' + data.edit + '" class="btn blue btn-xs">Edit</a>\
                                            <form method="POST" action="' + data.delete + '">' +
                                                '<input name="_method" type="hidden" value="delete">' +
                                                '{!! Form::token() !!}' +
                                                '<input class="btn btn-danger btn-xs" type="submit" value="Delete">' +
                                            '</form><div>';
                            return  actionBtn;
                        }
                    }
                ]
            });
        });
    </script>
    
@stop