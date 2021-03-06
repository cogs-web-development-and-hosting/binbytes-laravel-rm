@extends('layouts.app', [
    'subTitle' => $user->isMe() ? '' : 'Users',
    'pageTitle' => $user->isMe() ? 'My Profile' : 'Update User'
])

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->modelForm($user, 'PUT', route('users.update', $user))
                         ->acceptsFiles()
                         ->open() }}

                    {{ html()->hidden('id', $user->id) }}

                    @include('user._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/tag.js') }}"></script>
@endpush