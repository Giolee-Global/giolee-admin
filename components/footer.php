    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/delete.js"></script>
    <script src="assets/js/view.js"></script>
    <script src="assets/js/switcher.js"></script>

    <script>
        const btn = document.querySelector(".button");

        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>

    <script>
        $('.btn').on('click', function() {
                var $this = $(this);
            $this.button('loading');
                setTimeout(function() {
                $this.button('reset');
            }, 8000);
        });
    </script>

    <script>
        new DataTable('#admins');
        new DataTable('#support');
    </script>

    <?php
    if (isset($_SESSION['success_message'])) {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['success_message']; ?>",
                icon: "success",
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: 'Close Now',
                cancelButtonColor: '#FF3366',
                timer: 4000
            });
        </script>
    <?php
        unset($_SESSION['success_message']);
    }
    ?>

    <?php
    if (isset($_SESSION['error_message'])) {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['error_message']; ?>",
                icon: "error",
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: 'Close Now',
                cancelButtonColor: '#FF3366',
                timer: 4000
            });
        </script>
    <?php
        unset($_SESSION['error_message']);
    }
    ?>

    <!-- <script>
        Swal.fire({
            text: "<?php echo $_SESSION['error_message']; ?>",
            icon: "error",
            showCancelButton: false,
            showConfirmButton: true,
            confirmButtonText: 'Upgrade Now',
            confirmButtonColor: '#FF3366',
            timer: 6000
        }).then(function() {
            window.location = "./subscription";
        });
    </script> -->

</body>

</html>