<div class="row">
    <div class="col-lg-4">
        <div class="card card-small mb-4 pt-0">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-4">
                        @include('shared.userAvatar', [
                            'user' => $account->user
                        ])
                    </div>
                    <div class="col-lg-8 d-flex flex-column justify-content-center">
                        <div class="mb-2">
                            <span><i class="fas fa-envelope-open"></i></span>
                            <span class="text-muted">{{ $account->user->email }}</span>
                        </div>
                        @if($account->contact_number)
                            <div>
                                <span><i class="fas fa-phone"></i></span>
                                <span class="text-muted">{{ $account->contact_number }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <a href="/accounts" class="btn btn-link p-0">
                    <h5 class="mb-0">Bank Account Detail</h5>
                </a>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6>Bank Name</h6>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-muted">{{ $account->bank_name }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h6>Account Number</h6>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-muted">{{ $account->account_number }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6>Branch</h6>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-muted">{{ $account->branch_of }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h6>IFSC Code</h6>
                            </div>
                            <div class="col-lg-8">
                                <span class="text-muted">{{ $account->ifsc_code }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>