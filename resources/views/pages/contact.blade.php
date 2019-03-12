@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Contact Me</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" class="form-control" id="subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" placeholder="type message here"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
            </form>
        </div>
    </div>


@endsection
