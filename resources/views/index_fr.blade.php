@extends("layout_fr")

@section('titulo')
@endsection

@section('styles')
@endsection

@section('contenido')
    <div class="rentec-prueba-1 overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-4 float-left" id="firstSection">
                    <p id="titulo"><b>Construit par des camionneurs, pour des camionneurs</b></p>
                    <br>
                    <p id="parrafo">FactorTeck fait un effort supplémentaire pour s'assurer que notre service d'affacturage se démarque des autres. Contrairement à nos concurrents qui viennent du monde bancaire, nous étions des camionneurs, oui vous avez bien entendu, nous étions des camionneurs.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 float-right margin-formulario" id="formulario">
                    <form action="#" id="form-contacto-fr" method="post" autocomplete="off">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="names">Des noms *</label>
                                <input type="text" class="form-control" name="names" id="names"
                                    placeholder="Noms et prénoms" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="company">Nom de l'entreprise *</label>
                                <input type="text" class="form-control" name="company" id="company"
                                    placeholder="Nom légal complet" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="label" for="phone_number">Numéro de téléphone *</label>
                                <input type="tel" class="form-control" name="phone_number" id="phone_number"
                                    placeholder="(000)-000-0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="label" for="email">E-mail de l'entreprise *</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@company.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="solution_type">Type de solutions *</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="radio" name="solution_type" id="solution_type" value="1" required>
                                <label for="">Affacturage de fret</label>
                            </div>
                            <div class="col-md-8">
                                <input type="radio" name="solution_type" id="solution_type" value="2" required>
                                <label for="">Affacturage de fret + Première carte</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="referred">Parrainé</label>&nbsp;&nbsp;
                                <input type="radio" name="referred" id="referred" class="referred_1" value="1">
                                <label for="">Oui</label>&nbsp;&nbsp;
                                <input type="radio" name="referred" id="referred" class="referred_1" value="2">
                                <label for="">Non</label>
                            </div>
                        </div>
                        <div class="form-group row" id="refered">
                            <div class="col-md-12">
                                <input type="text" name="you_referred" id="you_referred" placeholder="Who did refer you?"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="company">Commentaires supplémentaires</label>
                                <textarea name="comments" id="comments" cols="50" rows="2"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="submit" value="Envoyer" class="btn btn-warning float-right">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="section2">
                    <h1 id="tituloSection">Ne laissez pas votre trésorerie vous arrêter</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h5 id="subtitle">Transformez vos factures impayées en espèces rapidement et facilement</h5>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section>
        <div class="container">
            <div class="row card-deck">
                <div class="col-md-6 card">
                    <div class="row rowCard">
                        <div class="col-md-5 imageCard">
                            <img src="{{ asset('img/importing.png') }}" alt="">
                        </div>
                        <div class="col-md-7 textCard">
                            <h5><b>Financement pour les exportateurs et les importateurs</b></h5>
                            <br>
                            <ul>
                                <li>Facture d'affacturage</li>
                                <li>Affacturage international</li>
                                <li>Financement de la chaîne d'approvisionnement</li>
                            </ul>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 card">
                    <div class="row rowCard">
                        <div class="col-md-5 imageCard">
                            <img src="{{ asset('img/owner.png') }}" alt="">
                        </div>
                        <div class="col-md-7 textCard card-text">
                            <h5><b>Financement pour les propriétaires-exploitants et la flotte</b></h5>
                            <br>
                            <p id="subtitleCard">Affacturage de fret</p>
                            <ul>
                                <li>Frais et conditions transparents</li>
                                <li>Avances de carburant</li>
                                <li>TMS</li>
                                <li>Financement express</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="benefits">
        <div class="container">
            <div class="row tituloSection3">
                <div class="col-md-12" id="section3">
                    <h1 id="tituloSection">Les avantages de l'affacturage avec FactorTeck</h1>
                </div>
            </div>
            <br>
            <div class="row subtituloSection3">
                <div class="col-md-12">
                    <h5 id="subtitle">Obtenez une avance sur vos factures impayées. Le flux de trésorerie dont vous avez besoin quand vous en avez besoin.
                    </h5>
                </div>
            </div>
            <br><br>
            <div class="card-columns">
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/calcular.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/cashflow.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Gérez votre trésorerie</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">
                            N'attendez pas d'avoir la trésorerie dont vous avez besoin pour continuer à fonctionner, transformez vos comptes clients en argent.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/negociar.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/collections.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Oubliez les collections</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">Rationalisez la collecte de votre portefeuille, en éliminant les frais d'administration et de recouvrement.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/debt_free.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/debt_free.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Sans dette</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">
                            Les fonds dont vous avez besoin sans dette.</p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer1">
        <div class="container">
            <div class="row firstFooter text-center">
                <div class="col-md-12">
                    <h2>Suivez-nous:&nbsp;&nbsp;
                    <a href="#" class=""><span class="mr-2  icon-facebook-square"></span></a>
                    <a href="#" class=""><span class="mr-2  icon-linkedin-square"></span></a>
                </h2>
                </div>
            </div>
        </div>
    </section>
@endsection
