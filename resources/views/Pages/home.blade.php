@extends('Layouts.app')

@section('content')
<section class="home section" id="home">
    <div class="container">
        <div class="row">
            <div class="home-info padd-15">
                <h3 class="hello">Hello, I am <span class="name">Jubayer</span></h3>
                <h3 class="my-profession"><span class="typing">Software Engineer</span></h3>
                <p>I'm a Software Engineer who loves to take challanges</p>
                <a href="{{route('contact')}}" class="btn hire-me">Hire Me</a>
            </div>
            <div class="home-img padd-15">
                <img src="{{asset('assets/images/hero.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
