<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>fabricetenembot | Auteur</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>

    <body>

    @include('shared/.navbar')

    <!-- Page Content -->
    <div class="container mt-5">

        <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4 font-italic">Liste de Posts</h1>

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 mt-5">

            <!-- Search Widget -->
            @include('shared/post/_search')

            <!-- Categories Widget -->
           @include('shared/post/_cathegories')

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header bg-dark text-white">Derniers Posts</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    @include('shared/.footer')