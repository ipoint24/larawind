@livewireScripts
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
<script src="{{asset('js/charts-lines.js')}}" defer></script>
<script src="{{asset('js/charts-pie.js')}}" defer></script>
<script src="{{asset('js/charts-bars.js')}}" defer></script>
<script>
    // Toastr Options
    toastr.options = {
        "positionClass": "toast-top-right",
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    $(document).ready(function () {
        // Notifications
        window.livewire.on('alert', param => {
            toastr[param['type']](param['message'], param['title']);
        });
    });
</script>
@stack('modals')
@stack('scripts')