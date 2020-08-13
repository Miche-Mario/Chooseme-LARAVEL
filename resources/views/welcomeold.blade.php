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
    <link rel="stylesheet" href="{{ asset('storage/css/myStyle.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" > --}}
    <link rel="stylesheet" href="https://fonts.gstatic.com/l/font?kit=Cn-vJt-LUxZV2ICofzrQFC41xsIsa3M&skey=93c2fdf69b410576&v=v8">
    <style>

.form-group.has-error label{color:#dd4b39}.form-group.has-error .form-control,.form-group.has-error .input-group-addon{border-color:#dd4b39;box-shadow:none}.form-group.has-error .help-block{color:#dd4b39}

        body {
            font-family: 'Didact Gothic', sans-serif;
            color: #484848;
        }

       /*  @font-face {
            font-family: 'Century Gothic';
            src: url('Century-Gothic_9791.ttf') format('ttf'),
                 url('Century-Gothic-Bold_9789.ttf') format('ttf');
            font-weight: normal;
            font-style: normal;
        } */

        /* @font-face {
            font-family: 'Century Gothic Regular' !important;
            font-style: normal;
            font-weight: normal;
            src: local('Century Gothic Regular'), url('GOTHIC.woff') format('woff');
        } */

        p,li {
            line-height: 32px;
            font-size:18px;
        }

        .moinp {
            line-height: normal;
        }

        .btn-chooseme {
            border-radius:25px;
            background-color:#bd081c;
            font-size:20px;
        }

        .choosemecolor{
            color:#bd081c
        }

        .image {max-width:100%; height:450px; position:relative; background-color: white;
            box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0);border: 0px solid #ddd;border-radius:10px; margin-bottom:5px
        }

        .container{
            padding-top:85px;
            padding-bottom:27px;
            background:none;
        }

        .form-control-choosme{
            border-color:#eeeeee;

        }
        .form-control:focus {
            border-color:red !important;
            box-shadow:none;
        }

        }
        ::placeholder{
            color:  #6e6e70 !important;
        }

        .img-circle{
            width:30px;
            height:30px
        }

        @media screen and (max-width: 600px) {
            .container{
                padding-top:20px;
                background:#eeeeee;
                border-radius:5px;
                margin-top:20px;

            }

            .blockstyle{
                border-radius:5px;
                margin-top:40px;
                margin-bottom:-10px;
                background:#eeeeee;
            }
            .image{
                height: auto;
                margin-bottom:25px;

            }


            p {
                line-height: 25px;
            }

            .block-text-sm {
                display:none;
            }

        }

        @media screen and (min-width: 600px) {
            .topsection {
                background-image:url(img/background_chooseme.jpeg);
                max-height:100%;
            }

            .block-text-lg{
                display:none;
            }
        }

        .container-footer{
            margin-right: 40px;
            margin-left:40px;
            padding:20px;
            margin-top:20px;
        }

    </style>
</head>
<body onscroll="hidIntroBlockPc()">
    <section class="box-shadow bg-light animate fadeInDown h-100 topsection">
        <navbar class="navbar fixed-top navbar-light  bg-white shadow-sm animate fadeInDown">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="img/Logo_chooseme.png" width="auto" height="40" class="d-inline-block align-top" alt="chooseme">
            </a>
        </navbar>
        <div class="container" style="max-height:100%">
            <div class="d-block bg-white blockstyle" style="padding-top:10px; ">
                <div class="row justify-content-center" style="padding:10px">{{-- background-image:url(img/img1.jpg); background-size: cover; --}}
                    <div class="col-md-6 col-xs-12" style="padding-top:10px" align="center">
                        <img src="img/capture_chooseme.png" alt="Chooseme" class="image">{{-- width:350px; height:350px --}}
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h1 class="mb-3 text-lg"><strong>ChooseMe</strong></h1>
                        <p class="text-md mb-4 moinp">La plateforme de réseautage qui accélère votre réussite professionnelle.</p>
                        <div class="" id="inscriptionForm">
                            <p class="text-md mb-4 moinp">Rejoins les {{ $totalProspect }} professionnels sur la liste d'attente, afin de faire partir de nos premiers utilisateurs.</p>
                            <form action="{{ route('prospects.store') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                    <label for="nom" class="control-label sr-only">Votre nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control form-control-choosme" placeholder="Prénom & Nom" value="{{ old('nom') }}" style="color: #202124">
                                    {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email" class="control-label sr-only">Votre adresse email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-choosme" placeholder="Email" value="{{ old('email') }}" style="color: #202124">
                                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                </div>
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
                            <br>
                            <div class="block-text-sm" id="introBlockPc">
                                    <h3 class="mb-3 text-lg"><strong>Pourquoi ChooseMe ?</strong></h3>
                                    <p class="text-justify moinp">Dans le monde professionnel, le réseautage constitue un élément stratégique
                                        qui vous permet de réussir et ...
                                        <a href="#bolck_desktop" class="choosemecolor" onclick="hidIntroBlockPc()" title="Clickez ou scroller pour lire la suite"> Lire la suite ...</a>
                                    </p>
                            </div>

                            {{-- Uniquement pour les petits portable --}}

                            <div class="block-text-lg">
                                    <br>
                                <h3 class="mb-3 text-lg"><strong>Pourquoi ChooseMe ?</strong></h2>
                                <p class="text-justify">
                                    Dans le monde professionnel, le réseautage constitue un élément stratégique
                                    qui vous permet de réussir et d’atteindre vos objectifs. Aujourd’hui le succès
                                    d’un individu n’est plus dans son titre mais bien dans ses compétences, ses
                                    résultats tangibles et <b>son réseau</b>. Il a été prouvé que, quelle que soit la
                                    personne que nous voulons rencontrer nous sommes en moyenne à 4
                                    connexions de lui.
                                </p>
                                <p class="text-justify">
                                    ChooseMe se veut être un accélérateur et un facilitateur de cette mise en
                                    contact. Ainsi,
                                    <div>
                                        <ul>
                                            <li>Vous gagnez du temps ;</li>
                                            <li>Vous gagnez en visibilité et en crédibilité dans le monde professionnel ;</li>
                                            <li>Vous augmentez vos compétences individuelles ;</li>
                                            <li>Vous atteignez tous vos objectifs professionnels ;</li>
                                            <li>Vous gagnez en coût, en rapidité, en qualité, en confidentialité lorsque vous recherchez un talent. </li>
                                        </ul>
                                    </div>
                                </p>
                                <br>
                                <h3 class="mb-3 text-lg"><strong>Qu’est-ce que le réseautage ?</strong></h3>
                                <p class="text-justify">Le réseautage est le fait de se constituer un réseau de relations et
                                    de savoir en tirer parti, notamment dans un but professionnel.
                                </p>
                                <br>
                                <h3 class="mb-3 text-lg"><strong>ChooseMe s’adresse à qui ?</strong></h3>
                                <p class="text-justify">Entrepreneurs et Entreprises, Professionnels en poste et Freelancers, Etudiants et Talents en recherche d'emploi.
                                </p>
                                <br>
                                <h3 class="mb-3 text-lg"><strong>Comment ça fonctionne ?</strong></h3>
                                <br>
                                <h4 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle-o fa-lg choosemecolor"> </i><strong> Créez un compte</strong></h4>
                                <p class="text-justify">ChooseMe permet à un professionnel quelconque de valoriser ses atouts et
                                    d’indiquer qu’il existe professionnellement à travers la création d’un profil qui
                                    met principalement en exergue : son autobiographie, ses compétences
                                    (savoir-être, savoir-faire et langues), son parcours universitaire, ses expériences,
                                    son portfolio (s’il en dispose).
                                </p>
                                <br>
                                <h4 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Créez une page entreprise</strong></h4>
                                <p class="text-justify">Vous disposez d’une entreprise ? ChooseMe offre à toute entreprise de se
                                    rendre visible auprès d’autres professionnels et entreprises en créant une page
                                    entreprise qui met en exergue : ses domaines d’expertise, sa marque
                                    employeur, ses métiers, des avis de clients, son portfolio éventuellement. Ces
                                    informations peuvent également aider les étudiants à s’orienter.
                                </p>
                                <br>
                                <h4 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Partagez vos savoirs</strong></h4>
                                <p class="text-justify">Vous avez accès à un éditeur intégré avec le minimum requis pour une mise
                                    en forme de texte. Cet éditeur vous permet de partager des articles, des
                                    publications selon votre expertise, vos centres d’intérêts. Les membres de votre
                                    réseau peuvent ainsi ajouter à leurs savoirs grâce à vous.
                                </p>
                                <br>
                                <h4 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Utilisez le moteur de recherche intelligent</strong></h4>
                                <p class="text-justify">Le moteur de recherche de ChooseMe apporte plus rapidement des résultats
                                    précis qu'une recherche réelle au sein d'un réseau traditionnel. Il vous permet
                                    de retrouver un professionnel précis en fonction de son nom, son secteur, sa
                                    profession, l’entreprise dans laquelle il travaille ou l’université où il étudie ; ou
                                    de repérer une entreprise précise en fonction de son nom, de son secteur
                                    d’activité ou d’un professionnel qui y travaille. Vous pouvez également
                                    rechercher des articles ou des publications.
                                </p>
                                <br>
                                <h4 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Echangez instantanément avec vos contacts</strong></h4>
                                <p class="text-justify">Notre messagerie instantanée vous permet d’avoir un dialogue interactif et
                                    direct entre professionnels ou entre recruteurs et talents. Vous pouvez
                                    échanger des messages textuels, des fichiers images ou des articles et
                                    publications de votre réseau.
                                </p>
                                <br>
                                <h4 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Sentez-vous bien et réussissez</strong></h4>
                                <p class="text-justify">Nous sommes des créateurs axés sur l’ergonomie et l’expérience de l’utilisateur, ce qui signifie qu’au-delà de rechercher à résoudre un problème
                                    nous accordons de l’importance à sa personne et ses sentiments. Et en créant une plateforme de réseautage sans juste
                                    nous concentrer sur les fonctionnalités, l’utilité et le bon fonctionnement, nous pouvons mieux vous
                                    servir et vous aider à réussir professionnellement.
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block-text-sm" id="bolck_desktop">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <h2 class="mb-3 text-lg"><strong>Pourquoi ChooseMe ?</strong></h2>
                            <p class="text-justify">
                                Dans le monde professionnel, le réseautage constitue un élément stratégique
                                qui vous permet de réussir et d’atteindre vos objectifs. Aujourd’hui le succès
                                d’un individu n’est plus dans son titre mais bien dans ses compétences, ses
                                résultats tangibles et <b>son réseau</b>. Il a été prouvé que, quelle que soit la
                                personne que nous voulons rencontrer nous sommes en moyenne à 4
                                connexions de lui.
                            </p>
                            <p class="text-justify">
                                ChooseMe se veut être un accélérateur et un facilitateur de cette mise en
                                contact. Ainsi,
                                <div>
                                    <ul>
                                        <li>Vous gagnez du temps ;</li>
                                        <li>Vous gagnez en visibilité et en crédibilité dans le monde professionnel ;</li>
                                        <li>Vous augmentez vos compétences individuelles ;</li>
                                        <li>Vous atteignez tous vos objectifs professionnels ;</li>
                                        <li>Vous gagnez en coût, en rapidité, en qualité, en confidentialité lorsque vous recherchez un talent. </li>
                                    </ul>
                                </div>
                            </p>
                </div>
                <div class="col-md-6">
                        <h2 class="mb-3 text-lg"><strong>Qu’est-ce que le réseautage ?</strong></h2>
                        <p class="text-justify">Le réseautage est le fait de se constituer un réseau de relations et
                            de savoir en tirer parti, notamment dans un but professionnel.
                        </p>
                        <br>
                        <h2 class="mb-3 text-lg"><strong>ChooseMe s’adresse à qui ?</strong></h2>
                        <p class="text-justify">Entrepreneurs, Professionnels en poste,
                            d’emploi, Etudiants et Entreprises.
                            Freelancers, Talents en recherche.
                        </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                        <br>
                        <h2 class="mb-3 text-lg"><strong>Comment ça fonctionne ?</strong></h2>
                        <br>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                            <h3 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle-o fa-lg choosemecolor"> </i><strong> Créez un compte</strong></h3>
                            <p class="text-justify">ChooseMe permet à un professionnel quelconque de valoriser ses atouts et
                                d’indiquer qu’il existe professionnellement à travers la création d’un profil qui
                                met principalement en exergue : son autobiographie, ses compétences
                                (savoir-être, savoir-faire et langues), son parcours universitaire, ses expériences,
                                son portfolio (s’il en dispose).
                            </p>
                            <br>
                    </div>
                    <div class="col-md-4">
                            <h3 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Créez une page entreprise</strong></h3>
                            <p class="text-justify">Vous disposez d’une entreprise ? ChooseMe offre à toute entreprise de se
                                rendre visible auprès d’autres professionnels et entreprises en créant une page
                                entreprise qui met en exergue : ses domaines d’expertise, sa marque
                                employeur, ses métiers, des avis de clients, son portfolio éventuellement. Ces
                                informations peuvent également aider les étudiants à s’orienter.
                            </p>
                            <br>
                    </div>
                    <div class="col-md-4">
                            <h3 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Partagez vos savoirs</strong></h3>
                            <p class="text-justify">Vous avez accès à un éditeur intégré avec le minimum requis pour une mise
                                en forme de texte. Cet éditeur vous permet de partager des articles, des
                                publications selon votre expertise, vos centres d’intérêts. Les membres de votre
                                réseau peuvent ainsi ajouter à leurs savoirs grâce à vous.
                            </p>
                            <br>
                    </div>
                    <div class="col-md-4">
                            <h3 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Utilisez le moteur de recherche intelligent</strong></h3>
                            <p class="text-justify">Le moteur de recherche de ChooseMe apporte plus rapidement des résultats
                                précis qu'une recherche réelle au sein d'un réseau traditionnel. Il vous permet
                                de retrouver un professionnel précis en fonction de son nom, son secteur, sa
                                profession, l’entreprise dans laquelle il travaille ou l’université où il étudie ; ou
                                de repérer une entreprise précise en fonction de son nom, de son secteur
                                d’activité ou d’un professionnel qui y travaille. Vous pouvez également
                                rechercher des articles ou des publications.
                            </p>
                            <br>
                    </div>
                    <div class="col-md-4">
                            <h3 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Echangez instantanément avec vos contacts</strong></h3>
                                <p class="text-justify">Notre messagerie instantanée vous permet d’avoir un dialogue interactif et
                                    direct entre professionnels ou entre recruteurs et talents. Vous pouvez
                                    échanger des messages textuels, des fichiers images ou des articles et
                                    publications de votre réseau.
                                </p>
                                <br>
                    </div>
                    <div class="col-md-4">
                            <h3 class="mb-3 text-lg">&nbsp;&nbsp;&nbsp;<i class="fa fa-lg fa-check-circle-o choosemecolor"> </i><strong> Sentez-vous bien et réussissez</strong></h3>
                                <p class="text-justify">Nous sommes des créateurs axés sur l’ergonomie et l’expérience de l’utilisateur, ce qui signifie qu’au-delà de rechercher à résoudre un problème
                                    nous accordons de l’importance à sa personne et ses sentiments. Et en créant une plateforme de réseautage sans juste
                                    nous concentrer sur les fonctionnalités, l’utilité et le bon fonctionnement, nous pouvons mieux vous
                                    servir et vous aider à réussir professionnellement.
                                </p>
                            <br>
                    </div>
                </div>
        </div>
    </section>
    <section class="bg-white">

        <div class="container-footer" id="phone">
                <div class="row">
                    <div class="col-md-12 col-xs-12" align="center">
                        <h4>&copy; ChooseMe</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12" align="center">
                        <a class="nav-link" target="_blank" href=""><img src="img/instagram-logo-gris.png" class="img-circle">
                        </a>
                    </div>
                </div>
        </div>

    </section>

    <script src="hhttps://code.jquery.com/jquery.js"></script>
    <script>

        {{--  function init(){
            let query = window.matchMedia("(max-width: 600px)")
            if (query.matches){
                document.getElementById('pc').classList.remove('d-none')
                document.getElementById('phone').classList.add('d-none')
            } else {
                document.getElementById('pc').classList.add('d-none')
                document.getElementById('phone').classList.remove('d-none')
            }
        }  --}}

        function hidIntroBlockPc(){
            let query = window.matchMedia("(min-width: 600px)")
            if (query.matches){
                document.getElementById('introBlockPc').classList.add('d-none')
            }
        }

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
