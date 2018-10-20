@extends('layouts.app')

@section('title', 'Registro Cruzada')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="sidebar sidebar-left">
                                <div class="widget contact-info">

                                    <div class="contact-info-box">
                                        <i class="fa fa-users">&nbsp;</i>
                                        <div class="contact-info-box-content">
                                            <h4>Coordinadores Nacionales</h4>
                                            <p>Ps. Cesar Pisconti - Obispo Herbert Ayer</p>
                                        </div>
                                    </div>

                                     <div class="contact-info-box">
                                        <i class="fa fa-phone">&nbsp;</i>
                                        <div class="contact-info-box-content">
                                            <h4>Teléfonos</h4>
                                            <p>941377810 / 925885957</p>
                                        </div>
                                    </div>

                                    <div class="contact-info-box">
                                        <i class="fa fa-map-marker">&nbsp;</i>
                                        <div class="contact-info-box-content">
                                            <h4>Día y Horario</h4>
                                            <p>27 y 28 de Octubre - 12:00 p.m</p>
                                            <h4>Dirección</h4>
                                            <p>Explanada 200 Millas - Ovalo Las Palomas - Frente al Parque Huascar - V.E.S - Lima - Perú</p>
                                        </div>
                                    </div>
                
                                    <div class="contact-info-box">
                                        <i class="fa fa-envelope-o">&nbsp;</i>
                                        <div class="contact-info-box-content">
                                            <h4>E-mail</h4>
                                            <p>contacto@arrepentimientoamericalatina.com</p>
                                        </div>
                                    </div>
                                    
                                </div><!-- Widget end -->
                            </div><!-- Sidebar left end -->
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h3 class="title-classic left">Registro Cruzada</h3>
                            <form id="form-registro-cruzada" class="form-horizontal" method="POST" action="/cruzada">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form" for="nombres">Nombres</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form" for="apellidos">Apellidos</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form" for="correo">Correo</label>
                                        <div class="col-xs-9">
                                            <input type="email" class="form-control" id="correo" name="correo" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form" for="celular">Celular</label>
                                        <div class="col-md-6 col-sm-6 col-xs-9">
                                            <input type="number" class="form-control" id="celular" name="celular" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form" for="facebook">Facebook</label>
                                        <div class="col-xs-9">
                                                <input type="url" class="form-control" id="facebook" name="facebook">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form">País de Origen</label>
                                        <div class="col-md-6 col-sm-6 col-xs-9">
                                            <select class="form-control" id="pais" name="pais" required>
                                                <option value="">Seleccione</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Brasil">Brasil</option>
                                                <option value="Chile">Chile</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Perú">Perú</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>                                        
                                    </div>       
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 label-form" for="iglesia">Nombre de Iglesia</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control" id="iglesia" name="iglesia">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-xs-3 label-form" for="oracion">Petición de Oración</label>
                                            <div class="col-xs-9">
                                                <textarea rows="5" class="form-control" id="oracion" name="oracion"></textarea>
                                            </div>
                                        </div>                                                         
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="si" id="noticias" name="noticias"> Recibir noticias del evento al correo enviado.
                                            </label>
                                        </div>
                                    </div>                                    
                                    <br>
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-9">
                                            <input type="submit" class="btn btn-primary" value="Registrarme">
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
            </div>
    </section>
@endsection

@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush