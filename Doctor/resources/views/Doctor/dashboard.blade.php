@section('title','dashboard')
@extends('Doctor.Layout.Doc.Header')

@section('content')

<!-- <h1>Doctor dashboard</h1> -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Appointment</a>
    <!-- <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a> -->
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">
    <a href="#"><i class="fa fa-tasks" aria-hidden="true"></i></a>
</span>

<span class="logout"><a href="{{route('logout')}}">Logout</a></span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  <table class="table">
    <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Timing</th>
    </tr>

    @php
        $appoint = DB::table('appointment')->get();
        $i=0;
    @endphp

    @foreach ($appoint as $apt)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$apt->name}}</td>
            <td>{{$apt->email}}</td>
            <td>{{$apt->timing}}</td>
        </tr>
    @endforeach

  </table>

</div>

@endsection