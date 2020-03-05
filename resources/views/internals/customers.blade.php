@extends('layout')

@section('content')
    <h1>Customers</h1>

        <form action="">
            <div class="input-group">
                <input type="text">
            </div>

            <button type="submit">Add Customer</button>
        </form>


    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection

