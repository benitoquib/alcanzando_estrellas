@extends('layouts.app2')

@section('content')  
<header id="header" class="ex-header2">
 </header>
    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                         <div class="section-title">CONTACTO</div>
                        <h2>Comuniquese con nosotros</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>4ta Calle 7-64, Zona 3 Cobán, Alta Verapaz</li>
                            <li><i class="fas fa-phone"></i><a href="tel:50277917277">+502 77917277</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:alcanzandoestrellasasaes@gmail.com">alcanzandoestrellasasaes@gmail.com</a></li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <p>Nuestra Ubicacion</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.2936515026204!2d-90.36967158514916!3d15.46862898925449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ab90b97a84c0eab!2zMTXCsDI4JzA3LjEiTiA5MMKwMjInMDIuOSJX!5e0!3m2!1ses!2sgt!4v1637775256708!5m2!1ses!2sgt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div> <!-- end of col -->
                <div class="col-lg-6">
                    @if(session('info'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('info')}}
                        </div>
                    @endif
                    <!-- Contact Form -->
                    <form method="post" data-toggle="validator" action="{{route('contactanos.store')}}">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control-input" name="cname" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control-input" name="cemail" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="cmessage" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->
                    

                </div> <!-- end of col -->
                            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

@endsection