@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Header -->
            <header class="ex-header pt-3 pb-3">
                <h1>{{ __('messages.online_calculators') }}</h1>
            </header> <!-- end of ex-header -->
            <!-- end of header -->

            <!-- Basic -->
            <div class="ex-basic-1 pt-3">
                <p>{!! __('messages.explore_our_extensive_collection', ['online_calculators' => '<a title="Online Calculators" href="/">Online Calculators</a>']) !!}</p>
                <h2>{{ __('messages.calculators_tools_by_topic') }}</h2>
                <p>{{ __('messages.click_on_our_thematic') }}</p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img pregnancy" href="{{ route(app()->getLocale() . '.pregnancy-calculators') }}"></a>
                                <p>{{ __('messages.pregnancy') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img finance" href="{{ route(app()->getLocale() . '.finance-calculators') }}"></a>
                                <p>{{ __('messages.finance') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img math" href="{{ route(app()->getLocale() . '.math-calculators') }}"></a>
                                <p>{{ __('messages.math') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img business" href="{{ route(app()->getLocale() . '.business-calculators') }}"></a>
                                <p>{{ __('messages.business') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img sports" href="{{ route(app()->getLocale() . '.sports-calculators') }}"></a>
                                <p>{{ __('messages.sports') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img health" href="{{ route(app()->getLocale() . '.health-calculators') }}"></a>
                                <p>{{ __('messages.health') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img entertainment" href="{{ route(app()->getLocale() . '.entertainment-calculators') }}"></a>
                                <p>{{ __('messages.leisure') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img savings" href="{{ route(app()->getLocale() . '.savings-calculators') }}"></a>
                                <p>{{ __('messages.savings') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img calendar" href="{{ route(app()->getLocale() . '.calendar-calculators') }}"></a>
                                <p>{{ __('messages.calendars') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img animals" href="{{ route(app()->getLocale() . '.animal-calculators') }}"></a>
                                <p>{{ __('messages.animals') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img converter" href="{{ route(app()->getLocale() . '.converter-calculators') }}"></a>
                                <p>{{ __('messages.converters') }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="block-calculator-img">
                                <a class="calculator-img nutrition" href="{{ route(app()->getLocale() . '.nutrition-calculators') }}"></a>
                                <p>{{ __('messages.nutrition') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end of ex-basic-1 -->
            <!-- end of basic -->

        </div>
        <div class="col-md-4">
            @include('layout.sidebar')
        </div>
    </div>
</div>
@endsection