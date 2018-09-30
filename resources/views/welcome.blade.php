<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel with vue</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div id="app">
                            <post-component
                                    v-for="post in posts"
                                    v-bind:key="post.id"
                                    v-bind:header="post.header"
                                    v-bind:body="post.body"
                            ></post-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    </body>
</html>
