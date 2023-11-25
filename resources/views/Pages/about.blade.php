@extends('Layouts.app')

@section('content')
<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>I'm Jubayer <span>Software Engineer</span></h3>
                    </div>
                </div>
                <div class="row">
                        <div class="row">
                            <div class="buttons padd-15">
                                <a href="#" class="btn">Download CV</a>
                                <a href="#contact" class="btn hire-me">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="skills padd-15">
                        <div class="row">
                            <div class="skill-item padd-15">
                                <h5>JAVASCRIPT</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 86%;"></div>
                                    <div class="skill-percent">100%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>PHP</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 66%;"></div>
                                    <div class="skill-percent">100%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>HTML</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 96%;"></div>
                                    <div class="skill-percent">100%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>CSS</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 90%;"></div>
                                    <div class="skill-percent">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
