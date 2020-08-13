<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="La plateforme de réseautage qui vous aide à atteindre tous vos objectifs professionnels">
    <meta name="keywords" content="choose, chooseme, reseautage, objectifs professionnels, reseau chooseme, chouzeme, application mobile, recrutement, emplois">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/')}}/chooseme_icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('backend/')}}/dist/css/AdminLTE.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" > --}}
    <link rel="stylesheet" href="https://fonts.gstatic.com/l/font?kit=Cn-vJt-LUxZV2ICofzrQFC41xsIsa3M&skey=93c2fdf69b410576&v=v8">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <style>

        .form-group.has-error label{color:#dd4b39}.form-group.has-error .form-control,.form-group.has-error .input-group-addon{border-color:#dd4b39;box-shadow:none}.form-group.has-error .help-block{color:#dd4b39}

        body {
            font-family: 'Lato', sans-serif;
            color: #484848;
        }
    </style>
</head>
<body>
    <navbar class="navbar fixed-top navbar-light  bg-white animate fadeInDown content">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="img/Logo_chooseme.png" width="auto" height="40" class="d-inline-block align-top" alt="chooseme">
        </a>
    </navbar>
    <section class="bg-white">
        <div class="content" style="max-height:100%">
            <div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-6 col-xs-12" align="center"><br><br>
                        <img src="img/DesignLandingPage.png" alt="Chooseme" class="image">
                    </div>
                    <div class="col-md-5 col-xl-5 col-xs-12"><br><br><br><br><br>
                        <h1 class="mb-3 text-lg"><strong>Voulez-vous <br> atteindre vos objectifs professionnels ?</strong></h1>
                        <p class="text-md mb-4">ChooseMe vous offre de vous connecter avec des personnes professionnellement pertinentes et de maximiser votre capacité à atteindre rapidement vos objectifs.</p>
                        <div class="" id="inscriptionForm">
                            <form action="{{ route('prospects.store') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="row justify-content-end">
                                    <div class="col-md-6" style="border-spacing: 0;">
                                        <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                            <label for="nom" class="control-label sr-only">Votre nom</label>
                                            <input type="text" name="nom" id="nom" class="form-control form-control-choosme" placeholder="Nom" value="{{ old('nom') }}" style="color: #202124;">
                                            {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                            <label for="nom" class="control-label sr-only">Votre prénom</label>
                                            <input type="text" name="nom" id="nom" class="form-control form-control-choosme" placeholder="Prénom" value="{{ old('nom') }}" style="color: #202124">
                                            {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email" class="control-label sr-only">Votre adresse email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-choosme" placeholder="Email" value="{{ old('email') }}" style="color: #202124">
                                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                </div>
                                <br>
                                <button type="submit" id="save" class="btn btn-block btn-md btn-chooseme text-white">Je m'inscris sur la liste d'attente</button>
                            </form>
                        </div>
                        @if(session()->has('notification.message'))
                        <br>
                        <div class="alert alert-light" align="center" role="alert" id="alertSucces">
                            <script type='text/javascript'>

                                document.getElementById('inscriptionForm').classList.add('d-none')
                            </script>
                            <h5>{{ session()->get('notification.message') }}</h5>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="hhttps://code.jquery.com/jquery.js"></script>
    <script>
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
