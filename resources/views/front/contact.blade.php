@extends('front.layouts.master')

@section('content')
    <section class="main-content single-page contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="post-item">
                        <div class="post-header">
                            <h3 class="post-title">{{$contacts['title']}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-offset-0">
                                <div class="post-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="contact-box">
                                                <div class="title-box">
                                                    <div class="icon-box">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                    <div class="name-box">
                                                        <h4>{{__('Ünvan')}}</h4>
                                                    </div>
                                                </div>
                                                <div class="content-box">
                                                    <p>{{$contacts['location']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="contact-box">
                                                <div class="title-box">
                                                    <div class="icon-box">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <div class="name-box">
                                                        <h4>{{__('E-Poçt')}}</h4>
                                                    </div>
                                                </div>
                                                <div class="content-box">
                                                    <p>{{$contacts['email']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="contact-box">
                                                <div class="title-box">
                                                    <div class="icon-box">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <div class="name-box">
                                                        <h4>{{__('Telefon')}}</h4>
                                                    </div>
                                                </div>
                                                <div class="content-box">
                                                    <p>{{$contacts['phone']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                    @elseif($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>
                                                        {{$error}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="contact-form" action="{{route('contact.message')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ad Soyad" id="name" name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="E-poçt" id="email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Başlıq" id="subject" name="subject" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Mesaj" id="message" name="message" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Button Send Message -->
                                            <div class="col-sm-12">
                                                <button class="contact-btn main-btn" type="submit" name="send">Göndər</button>
                                            </div>
                                            <!-- Form Message  -->
                                            <div class="form-message text-center"><span></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
