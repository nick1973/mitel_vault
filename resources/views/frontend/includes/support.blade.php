<h3>Support: BT Proactive Monitoring Service TBC</h3>
<button onclick="teleworkerPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                           aria-hidden="true"></span> Previous
</button>
<button onclick="maintNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                            aria-hidden="true"></span></button>
<script>
    function teleworkerPrev() {
        $('.nav-tabs a[href="#remote"]').tab('show');
    }

    function maintNext() {
        $("#tick-support").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#maint"]').tab('show');
    }
</script>