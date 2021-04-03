<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @includeFirst(['teams._head', 'frameworks._head'])
</head>
<body>
<div id="app" class="container v-cloak" v-loading.fullscreen.lock="fullscreen_loading">
    <header class="row">
        @includeFirst(['teams._header', 'frameworks._header'])
    </header>
    <div id="main" class="row">
        <el-container style="min-height: 500px; border: 1px solid #eee">
            @includeFirst(['teams._aside', 'frameworks._aside'])
            <el-container>
                <el-main>
                    @yield('content')
                </el-main>
            </el-container>
        </el-container>
    </div>
    <footer class="footer row">
        @includeFirst(['teams._footer', 'frameworks._footer'])
    </footer>
</div>
@section('script')
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@show
</body>
</html>
