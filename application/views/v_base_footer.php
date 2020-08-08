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
    </script>

</body>
</html>
