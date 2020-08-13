<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="La plateforme de réseautage qui vous aide à atteindre tous vos objectifs professionnels">
    <meta name="keywords" content="choose, chooseme, reseautage, objectifs professionnels, reseau chooseme, chouzeme, application mobile, recrutement, emplois">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img')}}/ChooseSmall.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('backend/')}}/dist/css/AdminLTE.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" > --}}
    <link rel="stylesheet" href="https://fonts.gstatic.com/l/font?kit=Cn-vJt-LUxZV2ICofzrQFC41xsIsa3M&skey=93c2fdf69b410576&v=v8">
    {{-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet"> --}}
    <style>

        .form-group.has-error label{color:#dd4b39}.form-group.has-error .form-control,.form-group.has-error .input-group-addon{border-color:#dd4b39;box-shadow:none}.form-group.has-error .help-block{color:#dd4b39}

        body {
            font-family: 'Didact Gothic', sans-serif;
            color: black;
        }
    </style>
</head>
<body>

    <section class="bg-white">
            <navbar class="navbar fixed-top navbar-light  bg-white animate fadeInDown content pt-3 pb-3">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="img/Logo_chooseme.png" width="auto" height="40" class="d-inline-block align-top" alt="chooseme">
                    </a>
                    <a href="#inscriptionForm" class="text-dark"> Inscrivez-vous</a>

                </navbar>
        <div class="content" >
            <div class="bg-top-section" style="">
                <div class="row content justify-content-between">

                    <div class="col-md-5 col-xl-5 col-xs-12" style="padding-top:14%">
                        <h1 class="mb-3 text-lg"><strong>Voulez-vous <br> atteindre vos objectifs professionnels ?</strong></h1>
                        <p class="text-md mb-4">ChooseMe vous offre de vous connecter avec des personnes professionnellement pertinentes et de maximiser votre capacité à atteindre rapidement vos objectifs.</p>

                        <a href="#inscriptionForm" class="btn btn-md text-white" style="background-color:#bd081c"> Inscrivez-vous <i class="fa fa-angle-right"></i> </a>
                    </div>
                    <div class="col-md-6 col-xl-6 col-xs-12" align="center" style="padding-top:7%;">
                        <img src="img/Capture.png" alt="Chooseme" class="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row pt-5 content">
            <div class="col-md-4 col-xs-12">
                <div class="bg-white block-image-md text-center">
                        <img src="img/ill/Entrepreneur2.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                </div>
                <h3 class="text-left" style="font-weight:bold"><b>Vous êtes un chef d’entreprise ?</b></h3>
                <p class="text-justify">Elargissez votre réseau de contacts, rencontrez des partenaires potentiels, améliorer
                    la marque employeur de votre entreprise tout en ayant une meilleure visibilité sur les
                    meilleurs profils.
                </p>
            </div>
            <div class="col-md-4 col-xs-12">
                    <div class="bg-white block-image-md text-center">
                            <img src="img/ill/AuBureau.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                    </div>
                <h3 class="text-left" style="font-weight:bold"><b>Vous êtes un professionnel <br> en poste ?</b></h3>
                <p class="text-justify">Développer de nouvelles compétences et positionnez-vous afin d’être à l’écoute de
                    nouvelles opportunités de carrière.
                </p>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="bg-white block-image-md text-center">
                        <img src="img/ill/Freelancer.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                </div>
                <h3 class="text-left" style="font-weight:bold"><strong>Vous êtes un freelancer ou travailleur indépendant ?</strong></h3>
                <p class="text-justify">Notre moteur de recherche vous permet d’être facilement retrouvé par des clients
                    potentiels. Vous avez juste à mettre en avant votre portfolio et votre
                    professionnalisme.
                </p>
            </div>
        </div>
        <div class="row content pt-5 pb-5 justify-content-center">
            <div class="col-md-4 col-xs-12">
                <div class="bg-white block-image-md text-center">
                    <img src="img/ill/EnRechercheDemploi2.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                </div>
                <h3 class="text-left"><strong>Vous êtes un jeune en recherche d’emploi</strong></h3>
                <p class="text-justify">Valorisez vos compétences, augmentez votre visibilité et votre crédibilité dans le
                    monde professionnel afin d’être détecté par les entreprises en quête de votre profil.
                </p>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="bg-white block-image-md text-center">
                    <img src="img/ill/Etudiant2.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                </div>
                <h3 class="text-left"><strong>Vous êtes un étudiant</strong></h3>
                <p class="text-justify">Recevez des conseils de professionnels expérimentés de votre secteur afin de vous
                    orienter dans le monde professionnel. Allez au-delà des entreprises connues de tous
                    et retrouvez des entreprises de votre secteur pour des stages de qualité.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-dark-chooseme">
        <div class="" style="padding:5%">
            <p class="text-center" >Rejoins les {{ $totalProspect }} professionnels sur la liste d'attente, afin de faire partir de nos premiers utilisateurs.</p><br>
            <div class="row justify-content-center" id="inscriptionForm">
                <div class="col-md-4">
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
            </div>
        </div>
    </section>
    <section class="bg-dark">
        <div class="">
            <div class=""style="padding:2%">
                <div class="col-md-12 col-xs-12" align="center">
                    <a class="nav-link" target="_blank" href=""><img src="img/instagram-logo-gris.png" class="img-circle">
                    </a>
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
