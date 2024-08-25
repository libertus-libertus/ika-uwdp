<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; <span id="tahun"></span>
    <div class="bullet"></div> Design By IKA (Ikatan Keluarga Alumni)
  </div>
  <div class="footer-right">
    Universitas Widya Dharma Pontianak
  </div>
</footer>

<script type="text/javascript">
  function tampilkanTahun() {
    var tahunElement = document.getElementById('tahun');
    var tahunSaatIni = new Date().getFullYear();

    tahunElement.textContent = tahunSaatIni;
  }

  document.addEventListener('DOMContentLoaded', tampilkanTahun);
</script>
