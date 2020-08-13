<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="La plateforme de réseautage qui vous aide à atteindre tous vos objectifs professionnels">
    <meta name="keywords" content="choose, chooseme, reseautage, objectifs professionnels, reseau chooseme, chouzeme, application mobile, recrutement, emplois">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img')}}/IconeChooseMe.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('backend/')}}/dist/css/AdminLTE.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" > --}}
    <link rel="stylesheet" href="https://fonts.gstatic.com/l/font?kit=Cn-vJt-LUxZV2ICofzrQFC41xsIsa3M&skey=93c2fdf69b410576&v=v8">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

</head>
<body>

    <section class="bg-white laptop">
            <navbar class="navbar fixed-top navbar-light shadow-sm bg-white animate fadeInDown content pt-3 pb-3">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="img/ChooseMeWebLogo.png" width="auto" height="40" class="" alt="chooseme">
                    </a>
                    <a href="#inscriptionForm" class="btn btn-chooseme text-white"> Inscrivez-vous</a>
                </navbar>
        <div class="" >
            <div class="bg-top-section" style="">
                <div class="row content justify-content-between">

                    <div class="col-md-5 col-lg-5 col-xs-12" style="padding-top:8%">
                        <h1 class="mb-3 text-lg" style="font-size:50px"><strong>Voulez-vous <br> atteindre vos objectifs professionnels ?</strong></h1>
                        <p class="text-md mb-5" style="line-height: 25px">ChooseMe vous offre de vous connecter avec des personnes professionnellement pertinentes et de maximiser votre capacité à atteindre rapidement vos objectifs.</p>

                        <a href="#inscriptionForm" class="btn btn-md text-white" style="background-color:#bd081c"> Inscrivez-vous <i class="fa fa-angle-right"></i> </a>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12" align="center" style="padding-top:2.5%;">
                        <img src="img/Capture.png" alt="Chooseme" class="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="laptop">
        <div class="row bg-dark text-white justify-content-center pt-5 pb-5">
            <div class="col-md-8 col-lg-8 col-xs-12 text-center pt-2">
                <h1 style="font-size:45px"> <b> Optez pour ChooseMe. </b></h1>
                <p>Quelle que soit votre situation professionnelle, ChooseMe est conçue pour vous</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6 col-lg-6 col-xs-12 bg-white text-center left-image-bloc-md">
                <img src="img/ill/Entrepreneur2.png" class="" style="width:60%;height:110%;padding:3%" alt="chooseme">
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 right-text-bloc-md mt-5">
                <h2 class="text-left"><strong> <strong> <strong>Chef d’entreprise</strong> </strong> </strong></h2>
                <p>Elargissez votre réseau de contacts, rencontrez des partenaires potentiels, améliorez
                    la marque employeur de votre entreprise tout en ayant une meilleure visibilité sur les
                    meilleurs profils.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 left-text-bloc-md mt-5">
                <h2 class="text-left"><b> <b> <b> Professionnel en poste </b></b></b></h2>
                <p>Développez de nouvelles compétences et positionnez-vous afin d’être à l’écoute de
                    nouvelles opportunités de carrière.
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 bg-white text-center right-image-bloc-md">
                <img src="img/ill/AuBureau.png" class="" style="width:60%;height:110%;padding:3%" alt="chooseme">
            </div>
        </div>
        <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 bg-white text-center left-image-bloc-md">
                    <img src="img/ill/Freelancer.png" class="" style="width:60%;height:110%;padding:3%" alt="chooseme">
                </div>
            <div class="col-md-6 col-lg-6 col-xs-12 right-text-bloc-md mt-5">
                <h2 class="text-left"><b> <b> <b> Freelancer ou travailleur indépendant </b></b></b></h2>
                <p>Notre moteur de recherche vous permet d’être facilement retrouvé par des clients
                    potentiels. Vous avez juste à mettre en avant vos compétences et votre portfolio.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 left-text-bloc-md mt-5">
                <h2 class="text-left mt-5"><b> <b> <b> Jeune en recherche d’emploi </b></b></b></h2>
                <p>Valorisez vos compétences, augmentez votre visibilité et votre crédibilité dans le
                    monde professionnel afin d’être détecté par les entreprises en quête de votre profil.
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 bg-white text-center right-image-bloc-md">
                <img src="img/ill/RechercheDemploi2.png" class="" style="width:60%;height:110%;padding:3%" alt="chooseme">
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-6 col-lg-6 col-xs-12 bg-white text-center left-image-bloc-md">
                <img src="img/ill/EtudiantsCorrections.png" class="" style="width:60%;height:110%;padding:3%" alt="chooseme">
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 right-text-bloc-md mt-5">
                <h2 class="text-left"><b> <b> <b> Etudiant </b></b></b></h2>
                <p>Recevez des conseils de professionnels expérimentés de votre secteur afin de vous
                    orienter dans le monde professionnel. Allez au-delà des entreprises connues de tous
                    et retrouvez des entreprises de votre secteur pour des stages de qualité.
                </p>
            </div>
        </div>
    </section>


    <section class="bg-dark-chooseme laptop">
        <div class="" style="padding:5%">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <p class="text-center" >Rejoingnez les {{ $totalProspect }} professionnels sur la liste d'attente, afin de faire partir de nos premiers utilisateurs.</p><br>
                </div>
            </div>
            <div class="row justify-content-center" id="inscriptionForm">
                <div class="col-md-4">
                    <form action="{{ route('prospects.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="row justify-content-end">
                            <div class="col-md-6 col-lg-6 col-xs-12 pr-1">
                                <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                    <label for="nom" class="control-label sr-only">Votre nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control form-control-choosme" placeholder="Nom" value="{{ old('nom') }}" style="color: #202124;">
                                    {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xs-12 pl-1">
                                <div class="form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
                                    <label for="prenom" class="control-label sr-only">Votre prénom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control form-control-choosme" placeholder="Prénom" value="{{ old('prenom') }}" style="color: #202124">
                                    {!! $errors->first('prenom','<span class="help-block">:message</span>') !!}
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

    <section class="bg-dark laptop">
        <div class="content">
            <div class=""style="padding:2%">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-lg-3 col-xs-12 ">
                        <div class="flex-center text-white">
                            <div class="row">
                                <div class="col-md-6">
                                        <a class="text-left">
                                            &copy; ChooseMe
                                        </a>
                                </div>
                                <div class="col-md-6 text-right">
                                        <a class="text-right mr-1">
                                            Nous suivre
                                        </a>
                                        <a class="text-right">
                                            <i class="fa fa-facebook-f fa-lg white-text mr-2"> </i>
                                        </a>
                                        <a class="text-right">
                                            <i class="fa fa-instagram fa-lg white-text"> </i>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{-- ---------------VERSION MOBILE----------------------VERSION MOBILE-----------------------------VERSION MOBILE---------------- --}}

        <section class="bg-white smartphone">
            <navbar class="navbar fixed-top navbar-light shadow-sm bg-white animate fadeInDown content pt-3 pb-3" >
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="img/ChooseMeWebLogo.png" width="auto" height="40" class="d-inline-block" alt="chooseme">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item mt-3 active">
                                <a href="#inscriptionForm" class="btn btn-block btn-chooseme text-white pt-5"> Inscrivez-vous</a>
                            </li>
                        </ul>
                    </div>

                </navbar>
            <div class="" >
                <div class="bg-top-section" style="">
                    <div class="row content justify-content-between">

                        <div class="col-md-5 col-xl-5 col-xs-12" style="padding-top:15%">
                            <h2 class="mb-3 text-left" style="font-size:40px"><b><b>Voulez-vous <br> atteindre vos objectifs professionnels ?</b></b></h2>
                            <p class="text-md mb-4 text-left" style="font-size:15px;line-height: 25px">ChooseMe vous offre de vous connecter avec des personnes professionnellement pertinentes et de maximiser votre capacité à atteindre rapidement vos objectifs.</p>
                            <a href="#inscriptionForm" class="btn text-left btn-md text-white mb-4" style="background-color:#bd081c"> Inscrivez-vous </a>

                        </div>
                        <div class="col-md-6 col-xl-6 col-xs-12 pt-0" align="center">
                            <img src="img/Capture.png" alt="Chooseme" class="image-sm mb-4">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="smartphone">
                <div class="row bg-dark text-white justify-content-center pt-5 pb-5">
                        <div class="col-md-8 col-xs-12 text-center pt-2">
                            <h1 style="font-size:40px"> <b> Optez pour ChooseMe. </b></h1>
                            <p>Quelle que soit votre situation professionnelle, ChooseMe est conçue pour vous</p>
                        </div>
                    </div>
            <div class="row pt-5 content">
                <div class="col-md-4 col-xs-12">
                    <div class="bg-white text-center">
                        <img src="img/ill/Entrepreneur2.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                    </div>
                    <h4 class="text-left mt-4 mb-2" style="font-weight:bold"><b><b>Chef d’entreprise</b></b></h4>
                    <p class="text-justify">Elargissez votre réseau de contacts, rencontrez des partenaires potentiels, améliorez
                        la marque employeur de votre entreprise tout en ayant une meilleure visibilité sur les
                        meilleurs profils.
                    </p>
                </div>
            </div>
            <div class="row mt-4 content">
                <div class="col-md-4 col-xs-12 ">
                        <div class="bg-white text-center">
                            <img src="img/ill/AuBureau.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                        </div>
                    <h4 class="text-left mt-4 mb-2" style="font-weight:bold"><b><b>Professionnel en poste</b></b></h4>
                    <p class="text-justify">Développez de nouvelles compétences et positionnez-vous afin d’être à l’écoute de
                        nouvelles opportunités de carrière.
                    </p>
                </div>
            </div>
            <div class="row mt-4 content">
                <div class="col-md-4 col-xs-12">
                    <div class="bg-white block-image-md text-center">
                            <img src="img/ill/Freelancer.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                    </div>
                    <h4 class="text-left mt-1 mb-2" style="font-weight:bold"><b><b>Freelancer ou travailleur indépendant</b></b></h3>
                    <p class="text-justify">Notre moteur de recherche vous permet d’être facilement retrouvé par des clients
                        potentiels. Vous avez juste à mettre en avant vos compétences et votre portfolio.</p>
                </div>
            </div>
            <div class="row mt-5 content">
                <div class="col-md-4 col-xs-12">
                    <div class="bg-white text-center">
                        <img src="img/ill/RechercheDemploi2.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                    </div>
                    <h4 class="text-left mt-4 mb-2"><b><b>Jeune en recherche d’emploi</b></b></h4>
                    <p class="text-justify">Valorisez vos compétences, augmentez votre visibilité et votre crédibilité dans le
                        monde professionnel afin d’être détecté par les entreprises en quête de votre profil.
                    </p>
                </div>
            </div>
            <div class="row mt-4 content">
                <div class="col-md-4 col-xs-12 mb-3">
                    <div class="bg-white text-center">
                        <img src="img/ill/EtudiantsCorrections.png" class="" style="width:70%;height:100%;padding:3%" alt="chooseme">
                    </div>
                    <h4 class="text-left mt-4 mb-2"><b><b>Etudiant</b></b></h4>
                    <p class="text-justify">Recevez des conseils de professionnels expérimentés de votre secteur afin de vous
                        orienter dans le monde professionnel. Allez au-delà des entreprises connues de tous
                        et retrouvez des entreprises de votre secteur pour des stages de qualité.
                    </p>
                </div>
            </div>

        </section>

        <section class="bg-dark-chooseme smartphone"><br>
            <div class="" style="padding:5%">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xs-12">
                        <p class="text-center" >Rejoingnez les {{ $totalProspect }} professionnels sur la liste d'attente, afin de faire partir de nos premiers utilisateurs.</p><br>
                    </div>
                </div>
                <div class="row justify-content-center" id="inscriptionForm">
                    <div class="col-md-4">
                        <form action="{{ route('prospects.store') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="row justify-content-end">
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                    <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                        <label for="nom" class="control-label sr-only">Votre nom</label>
                                        <input type="text" name="nom" id="nom" class="form-control form-control-choosme" placeholder="Nom" value="{{ old('nom') }}" style="color: #202124;">
                                        {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                    <div class="form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
                                        <label for="prenom" class="control-label sr-only">Votre prénom</label>
                                        <input type="text" name="prenom" id="nom" class="form-control form-control-choosme" placeholder="Prénom" value="{{ old('prenom') }}" style="color: #202124">
                                        {!! $errors->first('prenom','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email" class="control-label sr-only">Votre adresse email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-choosme" placeholder="Email" value="{{ old('email') }}" style="color: #202124">
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                            </div>
                            <button type="submit" id="save" class="btn btn-block btn-md btn-chooseme text-white">Je m'inscris sur la liste d'attente</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </section>

       <section class="bg-dark smartphone">
            <div class="content">
                <div class=""style="padding:5%">
                    <div class="row text-white d-flex justify-content-between" style="display:flex">
                        <div class="col-xs-6">
                            <a class="text-white" href="{{URL('/')}}">
                                &copy; ChooseMe
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="mr-1">
                                Nous suivre
                            </a>
                            <a class="">
                                <i class="fa fa-facebook-f fa-lg white-text mr-2"> </i>
                            </a>
                            <a class="">
                                <i class="fa fa-instagram fa-lg white-text"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script>
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
