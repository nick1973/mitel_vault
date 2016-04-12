@extends('frontend.layouts.master')

@section('content')
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Originator / Customer Details</a></li>
                <li role="presentation" class="active"><a href="#bundle" aria-controls="bundle" role="tab" data-toggle="tab">Bundle</a></li>
            </ul>

            <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade" id="home">
                            @include('frontend.includes.customer_details')
                        </div>

                <div role="tabpanel" class="tab-pane fade in active" id="bundle" class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 15px">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#bundle-home" aria-controls="bundle-home" role="tab" data-toggle="tab">Bundle</a></li>
                        <li role="presentation"><a href="#software" aria-controls="software" role="tab" data-toggle="tab">Software</a></li>
                        <li role="presentation"><a href="#servers" aria-controls="servers" role="tab" data-toggle="tab">Server</a></li>
                        <li role="presentation"><a href="#terminals" aria-controls="terminals" role="tab" data-toggle="tab">Terminals</a></li>
                        <li role="presentation"><a href="#lan-data" aria-controls="lan-data" role="tab" data-toggle="tab">LAN & DATA</a></li>
                        <li role="presentation"><a href="#peripherals" aria-controls="peripherals" role="tab" data-toggle="tab">Peripherals</a></li>
                        <li role="presentation"><a href="#training" aria-controls="training" role="tab" data-toggle="tab">Training</a></li>
                        <li role="presentation"><a href="#remote" aria-controls="remote" role="tab" data-toggle="tab">Remote Worker</a></li>
                        <li role="presentation"><a href="#install" aria-controls="install" role="tab" data-toggle="tab">Install</a></li>
                        <li role="presentation"><a href="#support" aria-controls="support" role="tab" data-toggle="tab">Support</a></li>
                        <li role="presentation"><a href="#maint" aria-controls="maint" role="tab" data-toggle="tab">Maintenance</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="software">
                            Software
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="servers">
                            Servers
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="terminals">
                            Terminals
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="lan-data">
                            LAN & DATA
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="peripherals">
                            Peripherals
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="training">
                            Training
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="remote">
                            Remote Working
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="install">
                            Install
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="support">
                            Support
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="maint">
                            Maintenance
                        </div>
                        <div role="tabpanel" class="tab-pane fade in active" id="bundle-home">
                            @include('frontend.includes.bundle')
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop



