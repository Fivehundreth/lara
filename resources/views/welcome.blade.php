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
        <div class="container" id="app">
            <div class="row header-row">
                    <ul class="nav nav-tabs" id="navtab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="nav-home" href="#home" data-toggle="tab" aria-controls="home" aria-selected="true">Home</a></li>
                        <li class="nav-item"><a class="nav-link" id="nav-create-post" data-toggle="tab" aria-controls="create-post" aria-selected="false" href="#create-post">Create post</a></li>
                    </ul>
            </div>
            <div class="tab-content" id="mainTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row posts-row">
                        <h1>Recent posts</h1>
                        <post-component
                                v-for="post in posts"
                                v-bind:key="post.id"
                                v-bind:header="post.header"
                                v-bind:body="post.body"
                        ></post-component>
                    </div>
                </div>
                <div class="tab-pane fade" id="create-post" role="tabpanel" aria-labelledby="create-post">
                    <div class="row">
                        <create-post-component></create-post-component>
                    </div>
                </div>
            </div>
        </div>
        <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    </body>
</html>
