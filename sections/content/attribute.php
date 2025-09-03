<div class="row">
  <div class="col-4">
    <h2>Atributos mentais</h2>
    <div class="row">
      <div class="col">
        <label>Inteligência: </label><br/>
        <input type="number" class="chipset-input" value="1" />
      </div>
      <div class="col">
        <label>Raciocínio: </label><br/>
        <input type="number" class="chipset-input" value="1" id="attributeWits" onchange="calculateDefense()" />
      </div>
      <div class="col">
        <label>Perseverança: </label><br/>
        <input type="number" class="chipset-input" value="1" id="attributeResolve" onchange="calculateWillPower()" />
      </div>
    </div>
  </div>

  <div class="col-4">
    <h2>Atributos Físicos</h2>
    <div class="row">
      <div class="col">
        <label>Força: </label><br/>
        <input type="number" class="chipset-input" value="1" />
      </div>
      <div class="col">
        <label>Destreza: </label><br/>
        <input type="number" class="chipset-input" value="1" id="attributeDex" onchange="calculateDefense()"/>
      </div>
      <div class="col">
        <label>Vigor: </label><br/>
        <input type="number" class="chipset-input" value="1" id="attributeStamina" onchange="calculateHealth()" />
      </div>
    </div>
  </div>

  <div class="col-4">
    <h2>Atributos Sociais</h2>
    <div class="row">
      <div class="col">
        <label>Presença: </label><br/>
        <input type="number" class="chipset-input" value="1" />
      </div>
      <div class="col">
        <label>Manipulação: </label><br/>
        <input type="number" class="chipset-input" value="1" />
      </div>
      <div class="col">
        <label>Autocontrole: </label><br/>
        <input type="number" class="chipset-input" value="1" id="attributeComposure" onchange="calculateWillPower()" />
      </div>
    </div>
  </div>
</div>
