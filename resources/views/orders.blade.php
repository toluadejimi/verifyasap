@extends('layout.main')
@section('content')


    <div class="card-secton transfer-section">
        <div class="tf-container">
            <div class="tf-balance-box transfer-amount">
                <div class="d-flex justify-content-start">
                    <h2 style="color: #4079E0" class="my-2">Hi, {{Auth::user()->username}} 👋</h2>
                    <br/>

                </div>

                <div class="d-flex justify-content-start">
                    <p> Welcome to Verifyasap </p>

                </div>


                <div class="col-xl-12 col-md-12 col-sm-12 p-2">


                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table table-sm table-responsive-sm">

                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Phone</th>
                                        <th>SMS</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    @foreach ($orders as $data)

                                        <tbody>

                                        <tr>

                                            <td>
                                                {{ $data->id }}
                                            </td>
                                            <td>
                                                {{ $data->phone }}
                                            </td>
                                            <td>
                                                {{ $data->sms}}
                                            </td>

                                            <td>
                                                {{ number_format($data->cost, 2) }}
                                            </td>

                                            @if($data->status == 2)
                                                <td class="text-success">
                                                    Delivered
                                                </td>
                                            @else
                                                <td class="text-warning">
                                                    Pending
                                                </td>
                                            @endif

                                            <td>
                                                <a href="delete-order?id={{$data->id}}"
                                                   class="btn btn-sm btn-dark text-small">Delete</a>
                                            </td>

                                        </tr>


                                        </tbody>

                                    @endforeach


                                </table>


                            </div>

                            {{$orders->links()}}

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
