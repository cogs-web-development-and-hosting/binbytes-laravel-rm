@extends('layouts.app', [
    'pageTitle' => auth()->user()->isMe() ? 'My Salaries' : 'Users Salaries'
])

@section('content')
    <div class="row">
        <div class="col">
            @include('shared.alert')
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h5 class="m-0">
                            @if($user->avatar)
                                <img src="{{ $user->avatar_url }}" class="avatar mb-0">
                            @endif
                            <span class="ml-2">{{ $user->name }}</span>
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Basic salary</th>
                                    <th>PF</th>
                                    <th>TDS</th>
                                    <th>Deduction</th>
                                    <th>Bonus</th>
                                    <th>Paid Amount</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($salaries as $salary)
                                <tr>
                                    <td>{{ $salary->paid_for->format('Y-m-d') }}</td>
                                    <td>{{ $salary->base_salary }}</td>
                                    <td>{{ $salary->pf }}</td>
                                    <td>{{ $salary->tds }}</td>
                                    <td>{{ $salary->penalty }}</td>
                                    <td>{{ $salary->bonus }}</td>
                                    <td>{{ $salary->paid_amount }}</td>
                                    <td>
                                        <a class="btn btn-primary mr-1" href="/payslip/{{$salary->id}}">Payslip</a>
                                        <a class="btn btn-white" href="/download/{{ $salary->id }}">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" align="center">
                                        No salary log available.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        @can('index', \App\Salary::class)
                            <a href="/salaries" class="btn btn-link pull-right">Back</a>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
