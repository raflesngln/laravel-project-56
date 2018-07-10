@extends('layouts.home_vue')

@section('content')
	<section class="content">
            <div id="app">
                    <div class="col-sm-12">
                        <router-view name="companiesIndex"></router-view>
                        <router-view></router-view>
                    </div>
            </div>
	</section>
@endsection