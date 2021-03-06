@extends('layouts.admin')

@section('content')
    <h3> Cart Investasi </h3>
    <table class="table table-hover">
        <thead>
            <tr>
            <th> Nama User </th>
                <th> Nama Proyek </th>
                <th> Investasi </th>
                <th> Keuntungan </th>
                <!-- <th> </th> -->
            </tr>
        </thead>
        <tbody>
        @foreach ($result as $result)
            <tr>
            <td> {{ $result->name }}</td>
                <td> {{ $result->nama }}</td>
                <td> {{ $result->jml_investasi }} </td>
                <td> {{ $result->jml_keuntungan }} </td>
                <td> <button id="send" type="submit" class="btn btn-success"><a href="{{ route('cart.shipping', $result->investasiID)}}">Checkout</a></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
