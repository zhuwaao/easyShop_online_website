<script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- End custom js for this page -->

    <script>
    function confirmDelete(event, userId) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this user?')) {
            // Assuming the deletion was successful, you can scroll back to the current position
            // using JavaScript's scrollIntoView() method
            event.target.closest('tr').scrollIntoView({
                behavior: 'auto', // or 'smooth'
                block: 'nearest'
            });
        }
    }
</script>