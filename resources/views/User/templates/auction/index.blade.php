@extends('User.layouts.index')

@section('content')

@include('User.partials.header.cartnavbar')

@include('User.partials.header.heronav')

<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side w-100">
                <div class="section-header">
                    <h2 class="title">Bonjour</h2>
                    <p>Remplir tous les information necessaire svp</p>
                </div>


                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="text" required value="{{ old('email') }}" name="email" id="login-email"
                                placeholder="Email Address">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" required id="login-pass" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">Enregistrer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


@endsection
