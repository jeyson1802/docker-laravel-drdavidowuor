@extends('layouts.app')

@section('title', 'Preguntas Frecuentes')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-classic">General Information</h3>

                    <div class="panel-group panel-classic" id="accordionA">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseOne">
                                        When does Eventech Conference 2018 will occur?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>A first-aider is someone who has undertaken training and has a qualification that HSE approves. This means that they must hold a valid certificate of competence in either. For group bookings, we highly recommend taking a look at some of Newyork aparthotels. different kinds that are out there time.</p>
                                </div>
                            </div>
                        </div><!--/ Panel 1 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseTwo">Met Gala Planner to Oversee Inauguration Events?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com matat.</p>
                                </div>
                            </div>
                        </div><!--/ Panel 2 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseThree">What languages are spoken?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div><!--/ Panel 3 end-->

                    </div><!-- Accordion end -->

                    <div class="gap-40"></div>

                    <h3 class="title-classic">Hotels &amp; Travels</h3>

                    <div class="panel-group panel-classic" id="accordionB">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseA">
                                        Mauris rhoncus pretium porttitor cras scelerisque commodo odio ?</a>
                                </h4>
                            </div>
                            <div id="collapseA" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div><!--/ Panel 1 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseB">Lutpat consequat estibulum ante ipsum primis in faucibu ? 	</a>
                                </h4>
                            </div>
                            <div id="collapseB" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com matat.</p>
                                </div>
                            </div>
                        </div><!--/ Panel 2 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseC">Donec volutpat diam nec quam sagittis uenot egestas libero ? </a>
                                </h4>
                            </div>
                            <div id="collapseC" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div><!--/ Panel 3 end-->

                    </div><!-- Accordion end -->

                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection

@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush