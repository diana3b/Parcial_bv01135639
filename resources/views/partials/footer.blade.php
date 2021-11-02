<footer class="bg-dark">
    <div class="footer-content py-3">
        <p class="text-center m-0 text-light">Desarrollador/a Diana Carolina Barillas</p>
        <p class="text-center m-0 text-light">
            @php
                date_default_timezone_set('America/El_Salvador');
				$fecha_creacion = "2021";
				$fecha = date("Y");
				if ($fecha_creacion == $fecha) {
					echo "&copy; " . $fecha . " ";
				} else {
					echo "&copy; " . $fecha_creacion . " - " . $fecha . " ";
				}
            @endphp
        </p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>