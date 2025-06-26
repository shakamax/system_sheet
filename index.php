
<?php
    include('sections/header.php');
?>

<body>
    <div>

      <div class="input-container">

        <div class="container">
            <h1 class="text-center">Ficha de Personagem - Cyberpunk</h1>
           <?php 
                include('sections\content\information.php')
           ?>
          <hr/>
          <!-- Atributos -->
          <!-- Atributos -->
          <!-- Atributos -->
            <?php 
                include('sections\content\attribute.php')
           ?>
          <!-- Atributos -->
          <!-- Atributos -->
          <hr/>
          <div class="row">
            <div class="row">
              <div class="col-3 sidetrack">
                <!-- Skills -->
                <!-- Skills -->
                <!-- Skills -->
                <?php 
                    include('sections\content\skills.php')
                ?>
                
                <!-- Skills -->
                <!-- Skills -->
                <!-- Skills -->
                <hr/>
                <!-- Caracteristicas -->
                <!-- Caracteristicas -->
                <!-- Caracteristicas -->
                <?php 
                    include('sections\content\characteristics.php')
                ?>
                <!-- Caracteristicas -->
                <!-- Caracteristicas -->
                <!-- Caracteristicas -->
              </div>
              <div class="col-9">
                <div class="row">
                  <div class="col-6">
                    <!-- Marito -->
                    <!-- Marito -->
                    <!-- Marito -->
                    <?php 
                        include('sections\content\merits.php')
                    ?>
                    <!-- Marito -->
                    <!-- Marito -->
                    <!-- Marito -->
                  </div>
                  <div class="col-6">
                    <?php 
                        include('sections\content\stats.php')
                    ?>
                  </div>
                  <div class="col">
                    <!-- FLAWS -->
                    <!-- FLAWS -->
                    <!-- FLAWS -->
                    <?php 
                        include('sections\content\flaws.php')
                    ?>
                    <!-- FLAWS -->
                    <!-- FLAWS -->
                    <!-- FLAWS -->
                  </div>
                </div>
                <hr/>
                <div class="row">
                    <!-- WEAPONS -->
                    <!-- WEAPONS -->
                    <!-- WEAPONS -->
                    <?php 
                        include('sections\content\weapons.php')
                    ?>
                    <!-- WEAPONS -->
                    <!-- WEAPONS -->
                    <!-- WEAPONS -->
                </div>
                <div class="row">
                    <!-- EQUIPAMENTOS -->
                    <!-- EQUIPAMENTOS -->
                    <!-- EQUIPAMENTOS -->
                    <?php 
                        include('sections\content\equipments.php')
                    ?>
                    <!-- EQUIPAMENTOS -->
                    <!-- EQUIPAMENTOS -->
                    <!-- EQUIPAMENTOS -->
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>


    <script src="resources\jquery-3.7.1.min.js" type="text/javascript"></script>


</body>

</html>