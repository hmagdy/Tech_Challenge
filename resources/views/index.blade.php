@extends('layout.master')

@section('content')
    <div id="horizon">
        <div id="content">
            <div id="maincontainer">
                <div id="contentwrapper">
                    <div id="contentcolumn">
                        <div id="text">
                            <h1>Welcome!</h1>

                            <h4>Available Wines</h4>
                            <ul class="list" style="list-style-type: circle;">
                                @foreach ($listitems as $listitem)
                                <li><a href="/addorder/{{$listitem->title}}">{{$listitem->title}}</a></li>
                                @endforeach

                            </ul>
                            <div class="hr">
                                <hr />
                            </div>
                        </div>
                        <div id="copyright"> &copy; Copyright 2007 <a href="#">Your Sitename</a><br />
                            <a href="http://validator.w3.org/check?uri=referer">XHTML 1.0 Transitional</a> | Design by wfiedler </div>
                    </div>
                </div>
                <div id="leftcolumn">
                    <div id="navleft">
                        <ul>
                            <li><a href="#">Hyperlink</a></li>
                            <li><a href="#">Hyperlink</a></li>
                            <li><a href="#">Hyperlink</a></li>
                            <li><a href="#">Hyperlink</a></li>
                            <li><a href="#">Hyperlink</a></li>
                        </ul>
                    </div>
                    <div id="notesleft"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur massa. Nullam enim arcu, adipiscing id, porta eget, consequat ut, lacus. Aliquam nibh. Etiam tortor ligula, facilisis sed, mattis sit amet, faucibus ut, turpis. </div>
                </div>
            </div>
        </div>
    </div>
@endsection