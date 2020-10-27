<!-- All JavaScript files
    ================================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="../assets/js/jquery-plugin-collection.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.js"></script>

    <!-- Custom script for this template -->
    <script src="../assets/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Approve Appointment !',
        text: 'Do you want to approve this appointment! ?',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>