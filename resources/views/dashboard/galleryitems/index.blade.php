@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Gallery Items
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Gallery items</div>
                    <a href="{{ route('galleries.items.create', $galleryId) }}" class="btn btn-sm btn-success pull-right" style="margin-top: 5px;" ><li class="fa fa-plus"></li>Add gallery item</a>

                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="gallery-items-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Thumb</th>
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
            $('#gallery-items-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('ajax.galleries.items.index', $galleryId) !!}',
                columns: [
                    { data: 'id' },
                    { 
                        data: 'type',
                        "searchable": true,
                        "orderable": true
                    },
                    { 
                        data: null,
                        "searchable": false,
                        "orderable": false,
                        "width": "20%",
                        render: function (data, type, row) {
                            return '<img src="' + data.media + '" />';
                        }
                    },
                    {
                        data: null,
                        "searchable": false,
                        "orderable": false,
                        render: function( data, type, row ) {
                            var editBtn = '<a href="' + data.edit + '" class="btn blue btn-xs">Edit</a>';
                            var deleteBtn = '';
                            if(data.delete) {
                                deleteBtn = '<form method="POST" action="' + data.delete + '">' +
                                        '<input name="_method" type="hidden" value="delete">' +
                                        '{!! Form::token() !!}' +
                                        '<input class="btn btn-danger btn-xs" type="submit" value="Delete">' +
                                        '</form>';
                            }
                            return  editBtn + deleteBtn;
                        }
                    }
                ]
            });
        });
    </script>
@stop
