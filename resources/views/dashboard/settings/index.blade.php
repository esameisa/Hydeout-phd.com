@extends( 'layouts.dashboard.app' )

@section( 'title' )
    {{ config('namespace.'.$namespace) }}
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>{{ config('namespace.'.$namespace) }}</div>
                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="stores-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>value</th>
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
                ajax: '{!! route('ajax.settings.index') !!}'+'{{ '?namespace='.$namespace }}',
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
                        "orderable": true,
                        'width':'55%',
                        render: function (data,type,row) {
                            if (row.type == 'image') {
                                console.log(row);
                                var data = '<img src="'+row.value_image+'" >'
                            }else {
                                return data;
                            }
                            return data;
                        }
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