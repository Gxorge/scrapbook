<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scrapbook</title>
        @vite(['resources/scss/gweb.scss'])
        @vite(['resources/scss/form.scss'])
    </head>
    <body class="gweb-site">
        <main class="gweb-container">
            @include("hero", ['title' => 'Login', 'subtitle' => 'Please login to access your account'])
            <section class="content gweb-text-layout">
                <h1>Please log in with the form below.</h1>
                <br>
                <form class="form" id="login-form" action="/auth/login" method="post">
                    @csrf
                    <label class="form-label" for="username">Username</label><br>
                    <input class="form-regular form-noselect" type="text" id="username" name="username" value="{{old('username')}}" />
                    @error('username')<br><span class="form-inline-error">{{ $message }}</span><br>@enderror

                    <br><br>
                    <label class="form-label" for="password">Password</label><br>
                    <input class="form-regular form-noselect" type="password" id="password" name="password" value="{{old('password')}}" />
                    @error('password')<br><span class="form-inline-error">{{ $message }}</span><br>@enderror

                    <br><br>
                    @error('login')<span class="form-inline-error-button">{{ $message }}</span><br>@enderror
                    <button class="form-submit">Login</button>
                    <br><br>
                </form>
            </section>
        </main>
        @include('footer')
    </body>
</html>
