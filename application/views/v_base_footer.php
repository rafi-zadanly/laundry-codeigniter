    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="<?= base_url(); ?>assets/js/script.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        <?php if($page_name == "dasbor"): ?>
        var monthlyOrder = document.getElementById('monthlyOrder').getContext('2d');
        var monthlyIncome = document.getElementById('monthlyIncome').getContext('2d');
        var monthlyOrderChart = new Chart(monthlyOrder, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Pesanan',
                    backgroundColor: '#457b9d',
                    borderColor: '#457b9d',
                    data: [7, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
        var monthlyIncomeChart = new Chart(monthlyIncome, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Pendapatan',
                    backgroundColor: '#457b9d',
                    borderColor: '#457b9d',
                    data: [70000, 120000, 98000, 142000, 100000, 163000, 180000]
                }]
            },

            // Configuration options go here
            options: {}
        });
        <?php endif; ?>

        <?php if($page_name[0] == "data_pelanggan"): ?>
            $('#customer-collapse').collapse('show');
        <?php endif; ?>

        <?php if($page_name[0] == "data_transaksi"): ?>
            $('#transaction-collapse').collapse('show');
        <?php endif; ?>

        <?php if (isset($form_open) && $form_open == "add_data_pengguna") : ?>
            $('#addModal').modal('show');
        <?php endif; ?>

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#menu-toggle").toggleClass('menu-active');
            $("#wrapper").toggleClass("toggled");
        });

        $(function () {
            $('.content-loader-wrapper').addClass('hide-active');
        });
        
        $('a, input[type=submit]').click(function () {
            $('.modal').modal('hide');
            $('.content-loader-wrapper').removeClass('hide-active');
        });

        $('#customer-collapse-btn').click(function () { 
            $('#customer-collapse-logo').toggleClass('collapse-active');
        });

        $('#transaction-collapse-btn').click(function () { 
            $('#transaction-collapse-logo').toggleClass('collapse-active');
        });

        $('.pw-toggle').click(function () { 
            $('.pw-toggle .fa').toggleClass('fa-eye-slash');
            $('.pw-toggle .fa').toggleClass('fa-eye');

            if ($('.pw-toggle .fa').hasClass('fa-eye-slash')) {
                $('.pw-input').attr('type', 'password');
            }else{
                $('.pw-input').attr('type', 'text');
            }
        });
    </script>

</body>
</html>
