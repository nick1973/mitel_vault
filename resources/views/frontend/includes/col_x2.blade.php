
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Order Overview.</h3>
        </div>
        <div id="results" class="panel-body bg-info">
            <div ng-app="myApp" ng-controller="myCtrl">
                    {{--<p>@{{ content.name }}</p>--}}
                    {{--<p>@{{ content.vendor_ref }}</p>--}}
                    {{--<p>@{{ content.bt_ref }}</p>--}}
                    {{--<p>@{{ content.btbuy }}</p>--}}

            <p><strong>Bundle Name:</strong> @{{ content.name }}</p>

            <p ng-show="content.analogue_lines > 0" class="ng-hide"><strong>Lines:</strong> Analogue Lines = @{{ content.analogue_lines }}</p>
            <p ng-show="content.bri_lines > 0" class="ng-hide"><strong>Lines:</strong> BRI / ISDN 2 Channels = @{{ content.bri_lines }}</p>
            <p ng-show="content.pri_lines > 0" class="ng-hide"><strong>Lines:</strong> PRI / ISDN 30 Channels = @{{ content.pri_lines }}</p>
            <p ng-show="content.sip_lines > 0" class="ng-hide"><strong>Lines:</strong> SIP Trunks = @{{ content.sip_lines }}</p>
            <p><strong>DN's:</strong> </p>
            <p><strong>Voicemail:</strong> </p>
            <p><strong>Standard User:</strong> @{{ content.standard_users }}</p>
            <p><strong>Multi User:</strong> </p>
            <p><strong>External Twinning:</strong> </p>
            <p><strong>LAN/IP Ports:</strong> @{{ content.lan_ports }}</p>
            <p><strong>Analogue Extensions:</strong> @{{ content.analogue_extensions }}</p>
            <p><strong>Description:</strong> @{{ content.product_description }}</p>

            </div>
        </div>
    </div>
