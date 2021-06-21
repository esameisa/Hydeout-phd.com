@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Contacts
@stop

@section( 'content' )
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Contacts</div>
                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="contacts-table">
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
            $('#contacts-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('ajax.contacts.index') !!}',
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
                        'width':'60%'
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