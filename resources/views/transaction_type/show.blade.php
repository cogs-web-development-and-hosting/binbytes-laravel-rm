@extends('layouts.app', [
    'pageTitle' => 'User Transaction'
])

@section('content')
    @include('account._account-view', [
        'account' => $transaction->account
    ])

    <div class="row">
        <div class="col-lg-8 offset-lg-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <div class="row justify-content-betwee">
                        <h5 class="col mb-0">Transaction Detail</h5>
                        <a href="{{ url()->previous() }}" class="btn btn-link col text-right">Back</a>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h6>Sequence No</h6>
                                </div>
                                <div class="col-lg-7">
                                    <span class="text-muted">{{ $transaction->sequence_number }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h6>Date</h6>
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-muted">{{ $transaction->date }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h6>Reference</h6>
                                </div>
                                <div class="col-lg-7">
                                    <span class="text-muted">{{ $transaction->reference }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            @if($transaction->type)
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h6>Type</h6>
                                    </div>
                                    <div class="col-lg-9">
                                        <span class="text-muted">{{ $transaction->type }}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="mb-0">Credit Amount</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="mb-0">Debit Amount</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="mb-0">Closing Balance</h6>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <span class="text-success">{{ $transaction->credit_amount }}</span>
                        </div>
                        <div class="col-lg-4">
                            <span class="text-danger">{{ $transaction->debit_amount }}</span>
                        </div>
                        <div class="col-lg-4">
                            <span class="text-info">{{ $transaction->closing_balance }}</span>
                        </div>
                    </div>

                    @if($transaction->note)
                    <div class="row">
                        <div class="col-lg-2">
                            <h6>Note</h6>
                        </div>
                        <div class="col-lg-9 pl-0">
                            <span class="text-muted">{{ $transaction->note }}</span>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="ml-auto mr-3">
                            @if($transaction->invoice)
                                <a href="/transactions/download/{{ $transaction->id }}" class="btn btn-white">
                                    Invoice <i class="fas fa-download"></i>
                                </a>
                            @endif
                            <a href="/transactions" class="btn btn-link">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
