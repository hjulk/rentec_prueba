@extends("layout")

@section('titulo')
@endsection

@section('styles')
@endsection

@section('contenido')
    <section class="rentec-prueba-1 overlay site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 float-left" id="firstSection">
                    <p id="titulo"><b>Built By Truckers, For Truckers</b></p>
                    <br>
                    <p id="parrafo">FactorTeck takes the extra mile to ensure our factorin service stands out from the rest.
                        Unlike our competitors that come from the banking world we were truckers, yes you hear right were
                        truckers.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 float-right margin-formulario" id="formulario">
                    <form action="#" id="form-contacto" method="post" autocomplete="off">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="names">Names *</label>
                                <input type="text" class="form-control" name="names" id="names"
                                    placeholder="First & Last Names" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="company">Company Name *</label>
                                <input type="text" class="form-control" name="company" id="company"
                                    placeholder="Full Legal Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="label" for="phone_number">Phone Number *</label>
                                <input type="tel" class="form-control" name="phone_number" id="phone_number"
                                    placeholder="(000)-000-0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="label" for="email">Company Email *</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@company.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="solution_type">Solution Type *</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="radio" name="solution_type" id="solution_type" value="1" required>
                                <label for="">Freight Factoring</label>
                            </div>
                            <div class="col-md-8">
                                <input type="radio" name="solution_type" id="solution_type" value="2" required>
                                <label for="">Freight Factoring + First Card</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="referred">Referred</label>&nbsp;&nbsp;
                                <input type="radio" name="referred" id="referred" class="referred_1" value="1">
                                <label for="">Yes</label>&nbsp;&nbsp;
                                <input type="radio" name="referred" id="referred" class="referred_1" value="2">
                                <label for="">No</label>
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
                                <label class="label" for="company">Additional Comments</label>
                                <textarea name="comments" id="comments" cols="50" rows="2"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="submit" value="Submit" class="btn btn-warning float-right">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="section2">
                    <h1 id="tituloSection">Don't let your cash flow stop you</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h5 id="subtitle">Turn your oustanding invoices into cash quickly and easy</h5>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="site-section">
        <div class="container">
            <div class="row card-deck">
                <div class="col-md-6 card">
                    <div class="row rowCard">
                        <div class="col-md-5 imageCard">
                            <img src="{{ asset('img/importing.png') }}" alt="">
                        </div>
                        <div class="col-md-7 textCard">
                            <h5><b>Funding for exporters and importers</b></h5>
                            <br>
                            <ul>
                                <li>Invoice factoring</li>
                                <li>International factoring</li>
                                <li>Supply chain finance</li>
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
                            <h5><b>Funding for owner-operators and fleet</b></h5>
                            <br>
                            <p id="subtitleCard">Freight factoring</p>
                            <ul>
                                <li>Transparent fees and terms</li>
                                <li>Fuel advances</li>
                                <li>TMS</li>
                                <li>Express funding</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="benefits" class="site-section">
        <div class="container">
            <div class="row tituloSection3">
                <div class="col-md-12" id="section3">
                    <h1 id="tituloSection">The benefits of factoring with FactorTeck</h1>
                </div>
            </div>
            <br>
            <div class="row subtituloSection3">
                <div class="col-md-12">
                    <h5 id="subtitle">Get an advance on your outstanding invoices. The cash flow you need when you need it.
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
                        <h4><b>Manage your cashflow</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">Do not wait to have the cash you need to continue
                            operating, transform your accounts receivable into money.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/negociar.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/collections.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Forget collections</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">Streamline the collection of your portfolio, eliminating
                            administration and collections costs.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/debt_free.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/debt_free.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Debt free</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">The funds you need without debt.</p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer1" class="site-section">
        <div class="container">
            <div class="row firstFooter text-center">
                <div class="col-md-12">
                    <h2>Follow Us:&nbsp;&nbsp;
                    <a href="#" class=""><span class="mr-2  icon-facebook-square"></span></a>
                    <a href="#" class=""><span class="mr-2  icon-linkedin-square"></span></a>
                </h2>
                </div>
            </div>
        </div>
    </section>
@endsection
