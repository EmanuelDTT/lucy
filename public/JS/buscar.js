$(document).ready(function () {
    $('#formu').DataTable({
        "ajax": "<?php echo base_url('http://localhost/Lucy/public/buscar'); ?>",
        "order": [],

    });
});
