@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('messages.calculators') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.privacy_policy') }}</li>
                </ol>
            </nav>

            <div class="article">
                <header class="entry-header">
                    <h1 class="entry-title">{{ __('messages.privacy_policy') }}</h1>
                </header>

                <div class="entry-content">
                    @include('pages/privacy/' . app()->getLocale())
                </div>
            </div>
        </div>

        <div class="col-md-4">
            @include('layout.sidebar')
        </div>
    </div>
</div>

@endsection