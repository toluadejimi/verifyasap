@extends('layout.main4')
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


                <div class="card my-4">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-7">
                                <label>Balance</label>
                                <h4>{{number_format(Auth::user()->wallet, 2)}}</h4>
                            </div>

                            <div class="col-5 d-flex justify-content-end">
                                <a href="/fund-wallet" style="background: #4079E0; font-size:16px;  color: white"
                                   class="btn btn-lg w-100">Fund  Wallet</a>
                            </div>


                        </div>

                    </div>

                </div>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif


                <div class="col-xl-12 col-md-12 col-sm-12 p-5 ">

                    <p class="mb-5 text-muted d-flex justify-content-center"> Choose your preferred country and
                        service
                    </p>

                    <form action="check-av" method="POST">
                        @csrf

                        <h6 for="country" class="mb-3 mt-3 text-muted d-flex justify-content-center"> 🌍 Select
                            Country </h6>
                        <div class="search-container d-flex justify-content-center mb-3">
                            <input type="text" id="search" name="country_name"
                                   class="search-box d-flex justify-content-center"
                                   placeholder="Search country"
                                   onkeyup="filterItems()" onclick="toggleDropdown()">
                            <div id="dropdown" class="dropdown">
                                @foreach ($countries as $data)
                                    <div class="item" data-id="{{ $data->ID }}" onclick="selectCountry(this)">
                                        {{ $data->name }}
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <h6 for="service" class="mb-3 mt-3 text-muted d-flex justify-content-center"> 📞 Select
                            Service </h6>
                        <div class="search-container d-flex justify-content-center mb-3">
                            <input type="text" id="searchservice" class="search-box d-flex justify-content-center"
                                   placeholder="Search service"
                                   onkeyup="filterItemsservice()" onclick="toggleDropdownservice()">
                            <div id="dropdownservice" class="dropdown">
                                @foreach ($services as $data)
                                    <div class="item" data-id="{{ $data->ID }}" onclick="selectService(this)">
                                        {{ $data->name }}
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <input type="hidden" name="selectedID" id="selectedID">
                        <input type="hidden" name="serviceID" id="serviceID">


                        <button style="background: #4079E0; font-size:16px;  color: white" type="submit"
                                class="btn btn-primary btn-lg mt-3">Check Availability
                        </button>


                    </form>


                </div>

                @if ($product != null)
                    <div class="col-xl-12 col-md-12 col-sm-12 p-5 ">

                        <h6> 📶 Service Information</h6>
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-6">
                                        <label>Country</label>
                                        <h6>{{ $country_name }}</h6>
                                    </div>

                                    <div class="col-6">
                                        <label>Amount</label>
                                        <h6>NGN {{ number_format($price, 2) }}</h6>
                                    </div>

                                </div>


                                @if(Auth::user()->wallet < $price)
                                    <a href="fund-wallet"
                                       class="btn btn-secondary text-white btn-lg">Fund Wallet</a>
                                @else

                                    <form action="order_now" method="POST">
                                        @csrf

                                        <input type="text" name="country" hidden value="{{ $count_id }}">
                                        <input type="text" name="price" hidden value="{{ $price }}">
                                        <input type="text" name="service" hidden value="{{ $serv }}">


                                        <button style="background: #4079E0; font-size:16px; color: white" type="submit"
                                                class="btn mt-6">Buy Number
                                            Now
                                        </button>

                                    </form>

                                @endif


                            </div>


                        </div>

                    </div>
                @endif


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


                                    @foreach ($verification as $data)

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

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
