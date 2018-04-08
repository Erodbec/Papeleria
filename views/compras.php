
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
      </div>


      <div class="container">
  <h2>Compras</h2>

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Cliente</th>
        <th>Producto más comprado</th>
        <th>Producto menos comprado</th>
        <th>Sucursal</th>
      </tr>
    </thead>
    <tbody id="myTable1">
      <tr>
        <td>Manuel Enrique Rodríguez</td>
        <td>Libreta</td>
        <td>Corrector</td>
        <td>Av. Xalapa</td>
      </tr>
      <tr>
        <td>Karely Marín Melo</td>
        <td>Carpetas</td>
        <td>Plumón</td>
        <td>Lázaro Cardenas</td>
      </tr>
    
    </tbody>
  </table>
  
</div>

<div
<button type="button" class="btn btn-primary">Insertar</button></center><br/>
</div>
<div
<button type="button" class="btn btn-danger">Cancelar</button></center><br/>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>