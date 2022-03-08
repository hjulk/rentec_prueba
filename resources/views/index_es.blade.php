@extends("layout_es")

@section('titulo')
@endsection

@section('styles')
@endsection

@section('contenido')
    <div class="rentec-prueba-1 overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-4 float-left" id="firstSection">
                    <p id="titulo"><b>Construido por camioneros, para camioneros</b></p>
                    <br>
                    <p id="parrafo">
                        FactorTeck hace un esfuerzo adicional para garantizar que nuestro servicio de factoring se destaque del resto. A diferencia de nuestros competidores que provienen del mundo bancario, nosotros éramos camioneros, sí, oyes bien, éramos camioneros.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 float-right margin-formulario" id="formulario">
                    <form action="#" id="form-contacto" method="post" autocomplete="off">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="names">Nombres *</label>
                                <input type="text" class="form-control" name="names" id="names"
                                    placeholder="Nombres y Apellidos" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="company">Nombre Compañia *</label>
                                <input type="text" class="form-control" name="company" id="company"
                                    placeholder="Nombre Completo Compañia" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="label" for="phone_number">Teléfono *</label>
                                <input type="tel" class="form-control" name="phone_number" id="phone_number"
                                    placeholder="(000)-000-0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="label" for="email">Email Compañia *</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@company.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="solution_type">Tipo de solución *</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="radio" name="solution_type" id="solution_type" value="1" required>
                                <label for="">Facturación de Fletes</label>
                            </div>
                            <div class="col-md-8">
                                <input type="radio" name="solution_type" id="solution_type" value="2" required>
                                <label for="">Facturación de Fletes + Primera Tarjeta</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="referred">Referencia</label>&nbsp;&nbsp;
                                <input type="radio" name="referred" id="referred" class="referred_1" value="1">
                                <label for="">Si</label>&nbsp;&nbsp;
                                <input type="radio" name="referred" id="referred" class="referred_1" value="2">
                                <label for="">No</label>
                            </div>
                        </div>
                        <div class="form-group row" id="refered">
                            <div class="col-md-12">
                                <input type="text" name="you_referred" id="you_referred" placeholder="A quién quiere referir?"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="company">Comentarios Adicionales</label>
                                <textarea name="comments" id="comments" cols="50" rows="2"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar" class="btn btn-warning float-right">
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
                    <h1 id="tituloSection">No dejes que tu flujo de caja te detenga</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h5 id="subtitle">Convierte tus facturas pendientes en efectivo de forma rápida y sencilla</h5>
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
                            <h5><b>Financiamiento para exportadores e importadores</b></h5>
                            <br>
                            <ul>
                                <li>Facturación</li>
                                <li>Facturación Internacional</li>
                                <li>Financiación a la cadena de suministro</li>
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
                            <h5><b>Financiamiento para propietarios-operadores y flota</b></h5>
                            <br>
                            <p id="subtitleCard">Facturación de fletes</p>
                            <ul>
                                <li>Tarifas y términos transparentes</li>
                                <li>Anticipos de combustible</li>
                                <li>TMS</li>
                                <li>Financiamiento exprés</li>
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
                    <h1 id="tituloSection">Los beneficios de facturar con FactorTeck</h1>
                </div>
            </div>
            <br>
            <div class="row subtituloSection3">
                <div class="col-md-12">
                    <h5 id="subtitle">Consigue un anticipo de tus facturas pendientes. El flujo de efectivo que necesita cuando lo necesita.
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
                        <h4><b>Administre su flujo de efectivo</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">No esperes a tener el efectivo que necesitas para seguir operando, transforma tus cuentas por cobrar en dinero.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/negociar.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/collections.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Olvídate de las colecciones</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">Agilice el cobro de su cartera, eliminando costos de administración y cobranza.</p>
                        <br><br>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="{{ asset('img/debt_free.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <img src="{{ asset('img/debt_free.png') }}" alt="" id="imgSection3">
                        <br><br>
                        <h4><b>Libre de deudas</b></h4>
                        <br>
                        <p id="subtitleCard" class="card-text">Los fondos que necesitas sin deudas.</p>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer1">
        <div class="container">
            <div class="row firstFooter text-center">
                <div class="col-md-12">
                    <h2>Siguenos:&nbsp;&nbsp;
                    <a href="#" class=""><span class="mr-2  icon-facebook-square"></span></a>
                    <a href="#" class=""><span class="mr-2  icon-linkedin-square"></span></a>
                </h2>
                </div>
            </div>
        </div>
    </section>
@endsection
