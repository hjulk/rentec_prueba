@extends("layout")

@section('titulo')
@endsection

@section('styles')
@endsection

@section('contenido')
    <div class="rentec-prueba-1 overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-5 float-left" id="firstSection">
                    <p id="titulo"><b>Built By Truckers, For Truckers</b></p>
                    <br>
                    <p id="parrafo">FactorTeck takes the extra mile to ensure our factorin service stands out from the rest.
                        Unlike our competitors that come from the banking world we were truckers, yes you hear right were
                        truckers.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 float-right margin-formulario" id="formulario">
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
                                <input type="text" name="you_referred" id="you_referred" placeholder="Who did refer you?" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="label" for="company">Additional Comments</label>
                                <textarea name="comments" id="comments" cols="50" rows="2" class="form-control"></textarea>
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
    </div>
    <section>
        <div class="container"></div>
    </section>
@endsection
