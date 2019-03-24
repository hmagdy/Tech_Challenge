@extends('dashboard.layouts.master')
@section('title','dashboard')
@section('right-content')

    <section  class="container col-md-12">

        <div class="row">
            <table class="table" dir="ltr">
                <thead>
                <tr>
                    <th scope="col" >Title</th>
                    <th scope="col" >Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="table-title"><h5 >{{$order->item_title}}</h5></td>
                        <td>{{$order->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </section>
@endsection