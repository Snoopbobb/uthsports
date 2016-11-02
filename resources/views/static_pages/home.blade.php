@extends('layout')

    @section('content')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span class="utryout">U</span>thsports.com
                </div>

                <div>
                    <p>The <span class="utryout">U</span>ltimate site for youth sports in your area!</p>
                    <h2>COMING SOON</h2>
                </div>
            </div>
        </div>
        
        <div>
            <div id="alerts-wrapper" style="display: none;">
                <p id="alerts">We'll let know when we launch!</p>
            </div>
        </div>
        <example></example>

    @stop
