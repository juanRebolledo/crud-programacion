<div class="container">
  <div class="columns is-centered">
    <div class="column is-three-fifths is-offset-one-fifth">       
      <h1 class="title is-2">Ingresar al sistema</h1>
      <form name="frmdatos" action="" method="POST">  
        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <div class="columns">
              <div class="column is-three-fifths">
                <input class="input" type="text" id="name" name="name" placeholder="Nombre">
              </div>
            </div>
          </div>
        </div>
            
        <div class="field">
          <label class="label">Email</label>
          <div class="control"><div class="columns">
            <div class="column is-two-fifths">
              <input class="input" type="email" id="email" name="email" placeholder="Ingrese un correo">
            </div>
          </div>
        </div>

        <div class="control mt-3">
          <button id="enviar" name="enviar" class="button is-success">Ingresar</button>
        </div>
      </form>
    </div>
  </div>
</div>