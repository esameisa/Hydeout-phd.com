@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Stores
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Stores</div>
                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="stores-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Logo</th>
                                <th>Content</th>
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
                ajax: '{!! route('ajax.stores.index') !!}',
                columns: [
                    { data: 'id' },
                    { 
                        data: 'title',
                        "searchable": true,
                        "orderable": true
                    },
                    { 
                        data: 'logo',
                        "searchable": false,
                        "orderable": false,
                        render: function(data,type,row){
                            var img = '<img src='+data+' style="max-width: 100px;max-height: 100px;">'
                            return img;
                        }
                    },
                    { 
                        data: 'content',
                        "searchable": true,
                        "orderable": true
                    },
                    {
                        data: null,
                        "searchable": false,
                        "orderable": false,
                        render: function( data, type, row ) {
                            var editBtn = '<a href="' + data.edit + '" class="btn blue btn-sm">Edit</a>';
                            return  editBtn;
                        }
                    }
                ]
            });
        });
    </script>
    
@stop