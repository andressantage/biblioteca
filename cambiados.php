$html .="
  <div class='card border-primary mb-3 tarjetas' style='max-width: 18rem;'>
    <div class='card-header'>".$usuario['Autor']."</div>
    <div class='card-body'>
        <h5 class='card-title text-primary'>".$usuario['Titulo']."</h5>
        <pre class='mb-0'>
Disponibles: <h6 class='mb-0'>".$usuario['N_Disponible']."</h6>
N° ejemplares: ".$usuario['N_Ejemplares']."
ID del libro: ".$usuario['LibrosID']."
Clasificacion ID: ".$usuario['ClasificacionID']."
Codigo de clasificacion: ".$usuario['CodigoClasificacion']."
Biblioteca:".$usuario['BibliotecaID']."
Sala: ".$usuario['SalaID']."
        </pre>
        <button class='btn btn-primary prestamoLibro' id='".$usuario['LibrosID']."'>Prestar</button>
    </div>
  </div>