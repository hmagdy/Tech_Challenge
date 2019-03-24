@extends('dashboard.layouts.master')
@section('title','Selections')
@section('right-content')
    <section  class="container col-md-12">
        <div class="row">
            <a href="/dashbord/getrss" class="btn btn-success btn-lg">Get Rss Feed</a>
        </div>
        <div class="row">
          <table class="table" dir="ltr">
                <thead>
                <tr>

                    <th scope="col" >Title</th>
                    <th scope="col" >link</th>
                    <th scope="col" >Available Date</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($listitems as $listitem)


                    <tr>

                        <td class="table-title"><h5 >{{$listitem->title}}</h5></td>
                        <td><a href="{{$listitem->link}}">{{$listitem->link}}</a></td>
                        <td>{{$listitem->pubDate}}</td>

                    </tr>
                @endforeach




                </tbody>
            </table>

</div>

    </section>
@endsection