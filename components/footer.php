    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/delete.js"></script>
    <script src="assets/js/view.js"></script>
    <script src="assets/js/switcher.js"></script>

    <script>
        //Greet User
        var time = new Date().getHours();
        if (time < 4) {
            xgreeting = "You should be in bed 🙄!";
        } else if (time < 12) {
            xgreeting = "Good morning 🌤"; //wash your hands
        } else if (time < 16) {
            xgreeting = "It's lunch 🍛 time "; //what's on the menu!
        } else {
            xgreeting = "Good Evening 🌙 "; //how was your day?
        }
        document.getElementById("greet").innerHTML = xgreeting;
    </script>


    <script>
        const btn = document.querySelector(".button");

        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>

    <script>
        new DataTable('#subscription');
    </script>

    <?php
    if (isset($_SESSION['sub_error_message'])) {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['sub_error_message']; ?>",
                icon: "error",
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonText: 'Upgrade Now',
                confirmButtonColor: '#FF3366',
                timer: 6000
            }).then(function() {
                window.location = "./subscription";
            });
        </script>
    <?php
        unset($_SESSION['sub_error_message']);
    }
    ?>

    </body>

    </html>