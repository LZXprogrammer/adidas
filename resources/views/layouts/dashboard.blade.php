@extends('layouts.default')
@section('title', '后台管理系统')
@section('content')
    <div class="am-g tpl-g">

        <!-- 头部 -->
        @include('layouts.header')

        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
          @include('layouts.sidebar')
        </div>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            @yield('home')
        </div>
    </div>
    @include('layouts.footer')

@stop
