@extends('layouts.template_en')

@section('title', 'IT Factory | Contact')

@section('main')
    <section class="container mt-3">
        <div class="section-title">
            <h2>CONTACT</h2>
            <p>Contact us</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                {{--                @if (session()->has('success'))--}}
                {{--                    <div class="alert alert-success alert-dismissable">--}}
                {{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                {{--                            <span aria-hidden="true">×</span>--}}
                {{--                        </button>--}}
                {{--                        <p>{!! session()->get('success') !!}</p>--}}
                {{--                    </div>--}}
                {{--                @endif--}}
                @include('shared.alert')
                @if (!session()->has('success'))
                    <form action="/contact" method="post">
                        @csrf
                        {{--                    <input type="hidden" name="_token" value="cLnFgS3ecE0NMPEGYFIdpP8smScpxGn4PdQt67q7">--}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                   class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                   placeholder="Your name"
                                   required
                                   value="{{ old('name') }}">
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                   class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                   placeholder="Your email"
                                   required
                                   value="{{ old('email') }}">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="keuze">Field of study</label>
                            <select name="keuze" id="keuze" class="form-control" required>
                                <option value="Applied Computer Science" @if (old('keuze') == 'acs') selected="selected" @endif>Applied
                                    Computer Science
                                </option>
                                <option value="Dagopleiding Bachelor" @if (old('keuze') == 'db') selected="selected" @endif>Bachelor opleiding
                                </option>
                                <option value="Werken en Studeren" @if (old('keuze') == 'wesb') selected="selected" @endif>Werken en Studeren
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5"
                                      class="form-control {{ $errors->first('message') ? 'is-invalid' : '' }}"
                                      placeholder="Your message"
                                      required
                                      minlength="10">{{ old('message') }}</textarea>
                            <div class="invalid-feedback">{{ $errors->first('message') }}</div>
                        </div>
                        <button type="submit" class="btn btn-success">Send Message</button>
                    </form>
                @endif
            </div>
            <div class="col-sm-12 col-md-6 border-left">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2502.1542155201228!2d4.959210315962641!3d51.16094624379554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c14c011b4bcb87%3A0xb5b970e9f2a6ce42!2sThomas%20More%20-%20Campus%20Geel!5e0!3m2!1snl!2sbe!4v1610051334099!5m2!1snl!2sbe"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>
@endsection

<style>
    body {
        position: relative;
    }

    body::after {
        content: '';
        display: block;
        height: 50px; /* Set same as footer's height */
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
    }
</style>
