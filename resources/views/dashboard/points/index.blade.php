@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Points Page
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Points Page</div>
                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="points-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Value</th>
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
            $('#points-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('ajax.points.index') !!}',
                columns: [
                    { data: 'id' },
                    { 
                        data: 'name',
                        "searchable": true,
                        "orderable": true
                    },
                    { 
                        data: 'value',
                        "searchable": true,
                        "orderable": true
                    },
                    {
                        data: null,
                        "searchable": false,
                        "orderable": false,
                        render: function( data, type, row ) {
                            var actionBtn = '<div style="display: inline-flex"><a href="' + data.edit + '" class="btn blue btn-xs">Edit</a>';
                            return  actionBtn;
                        }
                    }
                ]
            });
        });
    </script>
    
@stop
