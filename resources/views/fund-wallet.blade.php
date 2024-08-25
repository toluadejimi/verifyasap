@extends('layout.main')
@section('content')

    <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12 p-1">
            <div class="card-secton transfer-section">
                <div class="tf-container">
                    <div class="tf-balance-box transfer-amount">

                        <div class="card my-4">

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-7">
                                        <label>Balance</label>
                                        <h4>{{number_format(Auth::user()->wallet, 2)}}</h4>
                                    </div>

                                    <div class="col-5 d-flex justify-content-end">
                                        <a href="/fund-wallet"
                                           style="background: #4079E0; font-size:16px;  color: white"
                                           class="btn btn-lg w-100">Fund Wallet</a>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-md-12 col-sm-12 p-5">

            <div class="row">


                <form action="fund-now" method="post">
                    @csrf

                    <div class="col-12 my-2 d-flex justify-content-center">
                        <h6 class="">Select Payment Mode</h6>
                    </div>

                    <div class="col-12  d-flex justify-content-center mb-5">
                        <select type="text" class="form-control2" name="type" required>
                            <option value="1">Instant</option>
{{--                            <option value="2">Manual</option>--}}
                        </select>
                    </div>

                    <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                        <h6 class="">Enter Amount</h6>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <input type="number" class="form-control w-100" required name="amount">
                    </div>


                    <button type="submit"
                       style="background: #4079E0; font-size:16px;  color: white"
                       class="btn btn-lg w-100 my-5">Pay Now</button>


                </form>
            </div>
        </div>


                        <div class="col-xl-12 col-md-12 col-sm-12 p-2">


                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table table-sm table-responsive-sm">

                                    <thead>
                                    <tr>
                                        <th>Transaction ID #</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>


                                    @foreach ($transaction as $data)

                                        <tbody>

                                        <tr>

                                            <td>
                                                {{ $data->ref_id }}
                                            </td>

                                            @if($data->type == 2)
                                    <td>
                                        <span style="border-radius: 10px; font-size: 10px" class="btn btn-success">Credit</span>
                                    </td>
                                @else
                                    <td>
                                        <span style="border-radius: 10px; font-size: 10px" class="btn btn-warning">Debit</span>
                                    </td>
                                @endif



                                            <td>
                                                {{ number_format($data->amount, 2) }}
                                            </td>



                                            @if($data->status == 2)
                                    <td>
                                        <span style="border-radius: 10px; font-size: 10px" class="btn btn-success">Completed</span>
                                    </td>
                                @elseif($data->status == 1)
                                    <td>
                                        <span style="border-radius: 10px; font-size: 10px" class="btn btn-warning">Pending</span>
                                    </td>
                                @else
                                                 <td>
                                        <span style="border-radius: 10px; font-size: 10px" class="btn btn-danger">Cancled</span>
                                    </td>

                                                @endif



                                            <td>
                                                {{$data->created_at}}

                                            </td>

                                        </tr>


                                        </tbody>

                                    @endforeach


                                </table>


                            </div>

                        </div>
                    </div>

                </div>



    </div>





    {{--    <div id="myDiv3" class="container mx-auto px-5 md:px-100">--}}
    {{--        <div class="space-y-6">--}}
    {{--            <h1 class="text-2xl font-bold text-primary">List of Transactions</h1>--}}
    {{--            <div class="border-b border-dashed border-primary w-24"></div>--}}
    {{--            <div class="bg-gray-400 text-white shadow rounded-lg overflow-hidden">--}}
    {{--                <div class="border-b py-4 px-5 grid grid-cols-3 md:grid-cols-4">--}}

    {{--                    @foreach($transaction as $data)--}}
    {{--
    {{--                        <div>--}}
    {{--
    {{--                        @if ($data->status == 2)--}}

    {{--                            <div>--}}
    {{--                                <label class="text-xs font-medium text-gray-100 mb-2">Status</label>--}}
    {{--                                <div>--}}
    {{--                                    <span class="text-xs font-bold bg-green-300 text-gray-800 rounded px-2 py-1">Completed</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                        @elseif($data->status == 1)--}}

    {{--                            <div>--}}
    {{--                                <label class="text-xs font-medium text-gray-100 mb-2">Status</label>--}}
    {{--                                <div>--}}
    {{--                                    <a href="resolve-page?trx_ref={{$data->ref_id}}"--}}
    {{--                                       class="text-xs font-bold bg-orange-300 text-gray-800 rounded px-2 py-1">Resolve</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                        @elseif($data->status == 3)--}}

    {{--                            <div>--}}
    {{--                                <label class="text-xs font-medium text-gray-100 mb-2">Status</label>--}}
    {{--                                <div>--}}
    {{--                                    <span class="text-xs font-bold bg-danger-300 text-gray-800 rounded px-2 py-1">Declined</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                        @endif--}}

    {{--                </div>--}}
    {{--                <div class="border-b py-4 px-5 grid grid-cols-3 md:grid-cols-4">--}}
    {{--                    <div class="hidden md:block">--}}

    {{--                    </div>--}}
    {{--                    <div>--}}

    {{--                    </div>--}}
    {{--                    <div>--}}

    {{--                    </div>--}}
    {{--                    <div>--}}

    {{--                    </div>--}}

    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}

@endsection






