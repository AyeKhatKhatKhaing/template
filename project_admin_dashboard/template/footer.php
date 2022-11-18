<script src="<?php echo $url; ?>/template/core/assets/vendor/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="<?php echo $url; ?>/template/core/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
<script src="<?php echo $url; ?>/template/core/assets/vendor/way_point/jquery.waypoints.min.js"></script>
<script src="<?php echo $url; ?>/template/core/assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>/template/core/assets/vendor/chart_js/chart.min.js"></script>
<script src="<?php echo $url; ?>/template/core/assets/js/app.js"></script>
<script src="<?php echo $url; ?>/template/core/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/template/core/assets/vendor/bootstrap/js/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo $url; ?>/template/core/assets/js/app.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
let currentPage = location.href;
$('.menu-item-link').each(function() {
    let links = $(this).attr('href');
    if (currentPage == links) {
        $(this).addClass('active');
    }
})
</script>

</body>

</html>