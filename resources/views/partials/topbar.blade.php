@extends('layouts.app')

@section('content')

<!-- TOP BAR -->
<div class="topbar">
    <div class="container topbar-content">

        <div class="top-left">
    <img src="{{ asset('images/call.png') }}" class="icon">
    +91 9876543210
</div>

        <div class="top-center">
            TAKE CARE OF YOUR HEALTH 25% OFF USE CODE "DOFIX03"
        </div>

       <div class="top-right">

    <!-- Language -->
    <div class="dropdown">
        <span class="dropdown-btn">English ▾</span>
        <div class="dropdown-menu">
            <div>English</div>
            <div>Spanish</div>
            <div>Russian</div>
            <div>Portuguese</div>
        </div>
    </div>

    <!-- Currency -->
    <div class="dropdown">
        <span class="dropdown-btn">USD ▾</span>
        <div class="dropdown-menu">
            <div>USD</div>
            <div>INR</div>
        </div>
    </div>

    <!-- Settings -->
    <div class="dropdown">
        <span class="dropdown-btn">Setting ▾</span>
        <div class="dropdown-menu">
            <div>Profile</div>
            <div>Logout</div>
        </div>
    </div>

</div>

    </div>
</div>

@endsection