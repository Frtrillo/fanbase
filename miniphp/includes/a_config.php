<?php

$dondeEstoy = basename($_SERVER["REQUEST_URI"]);

	switch ($dondeEstoy) {
		case "registro.php":
			$CURRENT_PAGE = "Registro"; 
			$PAGE_TITLE = "FanBase - Registro";
			break;

		case "contactar.php":
			$CURRENT_PAGE = "Contactar"; 
			$PAGE_TITLE = "FanBase - Contáctanos";
		break;

		case "recomendaciones.php":
			$CURRENT_PAGE = "Recomendaciones"; 
			$PAGE_TITLE = "FanBase - Recomendaciones";
			break;

		case "index.php":
			$CURRENT_PAGE = "Inicio"; 
			$PAGE_TITLE = "FanBase - Inicio";
			break;

		case "video.php":
			$CURRENT_PAGE = "Video"; 
			$PAGE_TITLE = "FanBase - Video";
			break;

		case "trailers.php":
			$CURRENT_PAGE = "Trailer"; 
			$PAGE_TITLE = "FanBase - Trailer";
			break;

		case "nosotros.php":
			$CURRENT_PAGE = "Nosotros"; 
			$PAGE_TITLE = "FanBase - Nosotros";
			break;

		case "juegos.php":
			$CURRENT_PAGE = "Juegos"; 
			$PAGE_TITLE = "FanBase - Juegos";
			break;
			
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
