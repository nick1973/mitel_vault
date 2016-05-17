<h3>Teleworker TBC</h3>
<button onclick="trainingPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                         aria-hidden="true"></span> Previous
</button>
<button onclick="installNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                              aria-hidden="true"></span></button>
<script>
    function trainingPrev() {
        $('.nav-tabs a[href="#training"]').tab('show');
    }

    function installNext() {
        $("#tick-remote").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#install"]').tab('show');
    }
</script>