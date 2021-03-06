@extends('layouts.app', [
    'subTitle' => 'Holidays',
    'pageTitle' => 'Add New Holiday'
])

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->form('POST', route('holidays.store'))->open() }}

                    @include('holiday._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection