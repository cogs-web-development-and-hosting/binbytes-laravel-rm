@extends('layouts.app', [
    'pageTitle' => 'Clients'
])

@section('content')
    <div class="row">
        <div class="col">
            @include('shared.alert')

            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <a href="/clients/create" class="btn btn-primary pull-right">
                        <i class="fa fa-plus mr-2"></i>
                        Add Client
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="clients-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Priority</th>
                            <th>Client</th>
                            <th>Email</th>
                            <th>Skype</th>
                            <th>Linkedin</th>
                            <th>Twitter</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#clients-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('clients.index') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'priority', name: 'priority'},
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'skype', name: 'skype' },
                    { data: 'linkedin', name: 'linkedin' },
                    { data: 'twitter', name: 'twitter' },
                    { data: 'action', name: 'action', sortable: false },
                ]
            });
        });
    </script>
@endpush