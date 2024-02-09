<script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Total Votus", { role: "style" } ],

        <?php 

      $query = mq("SELECT * FROM tbl_kandidatu 
        JOIN tb_estudante ON tbl_kandidatu.emis=tb_estudante.emis
        ");

      while ($data = mfa($query)) { $dat = $data['emis']; ?>

        ["<?= $data['nrn_estudante']; ?>", <?= $count = mnr(mq("SELECT * FROM tb_votus WHERE id_kandidatu='$dat' ")); ?>, "#b87333"],

        <?php } ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Rezultadu Votus Bazeia  ba Grafiku ",
        // width: 700,
        height: 450,
        bar: {groupWidth: "60%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

</body>

</html>