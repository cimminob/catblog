@extends('main')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <img src="/images/small-tabby-white.jpg" class="banner">
            <div><h1 class="display-5">Welcome to my Blog</h1>
                <p class="lead">Thank you for visiting, this a demo blog. It was created with Laravel, a php framework
                    and bootstrap css.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto doloremque doloribus et
                    expedita explicabo id in iusto maiores porro provident quibusdam quo rerum, saepe soluta sunt totam
                    ullam voluptate.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto doloremque doloribus et
                    expedita explicabo id in iusto maiores porro provident quibusdam quo rerum, saepe soluta sunt totam
                    ullam voluptate.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto doloremque doloribus et
                    expedita explicabo id in iusto maiores porro provident quibusdam quo rerum, saepe soluta sunt totam
                    ullam voluptate.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto doloremque doloribus et
                    expedita explicabo id in iusto maiores porro provident quibusdam quo rerum, saepe soluta sunt totam
                    ullam voluptate.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

        </div>
        {{--side bar--}}

        <div class="col-md-3 col-md-offset-1">
            <h3>Archives</h3>
            <img src="/images/yarn.jpg" style="width: 100%; margin-right: -15px;
    margin-left: -15px;">
            <div class="row">

                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. A ab aliquam dolorem eveniet fugit illum obcaecati repellendus veniam voluptas? Aperiam at, cum est
                explicabo maxime quae reiciendis repellat reprehenderit tenetur.
            </div>

        </div>
    </div>
@endsection
