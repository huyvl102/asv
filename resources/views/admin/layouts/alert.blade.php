<script type="text/javascript">
    @if (Session::has('message'))
    swal("Success!", "{{ Session::get('message') }}", "success");
    @endif
    @if (Session::has('error'))
    swal("Error!", "{{ Session::get('error') }}", "error");
    @endif
    @if (Session::has('warning'))
    swal("Warning!", "{{ Session::get('warning') }}", "warning");
    @endif
    @if (Session::has('info'))
    swal("Info!", "{{ Session::get('info') }}", "info");
    @endif
</script>
