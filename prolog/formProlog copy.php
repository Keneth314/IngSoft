<?php

class formProlog
{

  public function formPrologShow()
  {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prolog</title>
      <!-- font awesome cdn link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- custom css file link -->
      <link rel="stylesheet" href="../assets/css/styles.css">
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>

      <style>
        h4 {
          font-size: 17px;
        }

        input[type=checkbox] {
          font-size: 17px;
        }

        input[type=submit] {
          font-size: 16px;
        }
      </style>

      <!-- header section starts -->
      <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar2">
          <a href="#s-primario">Sintomas Primario</a>
          <a href="#s-secundario">Sintomas Secundarios</a>
          <a href="#antedecentes">Antecedentes</a>
        </nav>
      </header>
      <!-- header section ends -->

      <!-- barra progreso section starts -->
      <div class="progress-bar-container">
        <div id="progress-bar"></div>
      </div>
      <!-- barra progreso section ends -->


      <form action="./getDatos.php" method="POST">

        <!-- Section SINTOMAS PRIMARIOS -->
        <section class="s-primario" id="s-primario">
          <div class="content">
            <h1 class="heading"><strong><span>SINTOMAS</span> PRIMARIOS</h1><br></strong>
            <h2><strong>Marque los siguientes sintomas que presente:</strong></h2>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s1" name="s1" value="true">
              <label class="form-check-label" for="s1">
                <h4>Dolor pélvico</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s2" name="s2" value="true">
              <label class="form-check-label" for="s2">
                <h4>Descarga vaginal acuosa</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s3" name="s3" value="true">
              <label class="form-check-label" for="s3">
                <h4>Sangrado o dolor después de la relación sexual frecuente</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s4" name="s4" value="true">
              <label class="form-check-label" for="s4">
                <h4>Hemorragia post coito más de 10 días</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s5" name="s5" value="true">
              <label class="form-check-label" for="s5">
                <h4>Hinchazón en ganglios inguinales por más de una semana</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s6" name="s6" value="true">
              <label class="form-check-label" for="s6">
                <h4>Sangrado después de una ducha vaginal</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s7" name="s7" value="true">
              <label class="form-check-label" for="s7">
                <h4>Sangrado vaginal después del examen pélvico</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s8" name="s8" value="true">
              <label class="form-check-label" for="s8">
                <h4>Sangrado vaginal más de 2 semanas</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s9" name="s9" value="true">
              <label class="form-check-label" for="s9">
                <h4>Secreción inusual (anormal) más de 1 mes</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s10" name="s10" value="true">
              <label class="form-check-label" for="s10">
                <h4>Fuga o filtración de orina o heces por la vagina</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s11" name="s11" value="true">
              <label class="form-check-label" for="s11">
                <h4>Sangrado profuso después de la menopausia</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s12" name="s12" value="true">
              <label class="form-check-label" for="s12">
                <h4>Periodo menstrual mas seguido y de mayor duracion</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s13" name="s13" value="true">
              <label class="form-check-label" for="s13">
                <h4>Secreción vaginal continua (pálida, acuosa, rosada, marrón o sanguinolenta)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s14" name="s14" value="true">
              <label class="form-check-label" for="s14">
                <h4>Sangrado vaginal con olor fétido</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s15" name="s15" value="true">
              <label class="form-check-label" for="15">
                <h4>Periodos menstruales de duración a 1 semana</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s16" name="s16" value="true">
              <label class="form-check-label" for="s16">
                <h4>Dolor en las piernas más de un mes</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s17" name="s17" value="true">
              <label class="form-check-label" for="s17">
                <h4>Inflamación en una sola pierna mayor a 10 días</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s18" name="s18" value="true">
              <label class="form-check-label" for="s18">
                <h4>Sangrado vaginal anormal (períodos mayor a 12 y 20 días)</h4>
              </label>
            </div>

            <!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" id="s19" name="s19" value="true">
      <label class="form-check-label" for="s19">
        <h4>NO VA</h4>
      </label>
    </div> -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s20" name="s20" value="true">
              <label class="form-check-label" for="s20">
                <h4>Leucorrea (flujo blanquecino y viscoso con mal olor)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s21" name="s21" value="true">
              <label class="form-check-label" for="s21">
                <h4>Metrorragias (hemorragias uterinas profusas)</h4>
              </label>
            </div>



          </div>
        </section>

        <!-- Section SINTOMAS SECUNDARIOS -->
        <section class="s-secundario" id="s-secundario">
          <div class="content">
            <h1 class="heading"><strong><span>SINTOMAS</span> SECUNDARIOS</h1><br></strong>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s22" name="s22" value="true">
              <label class="form-check-label" for="s22">
                <h4>Pérdida de peso</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s23" name="s23" value="true">
              <label class="form-check-label" for="s23">
                <h4>Pérdida de apetito mayor a un mes</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s24" name="s24" value="true">
              <label class="form-check-label" for="s24">
                <h4>Fatiga aguda</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s25" name="s25" value="true">
              <label class="form-check-label" for="s25">
                <h4>Fatiga crónica</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s26" name="s26" value="true">
              <label class="form-check-label" for="s26">
                <h4>Dolor de espalda</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s27" name="s27" value="true">
              <label class="form-check-label" for="s27">
                <h4>Dolor de abdomen</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s28" name="s28" value="true">
              <label class="form-check-label" for="s28">
                <h4>Dolor de piernas</h4>
              </label>
            </div>
            <!-- <div class="form-check">
    <input class="form-check-input" type="checkbox" id="s29" name="s29" value="true">
    <label class="form-check-label" for="s29">
      <h4>No considerar Fiebre menor a 20 grados ILOGICO</h4>
    </label>
    </div> -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s30" name="s30" value="true">
              <label class="form-check-label" for="s30">
                <h4>Fiebre alta mayor a 35 ºC</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s31" name="s31" value="true">
              <label class="form-check-label" for="s31">
                <h4>Frecuencia y urgencia de orinar normal (menor/igual 200 ml)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s32" name="s32" value="true">
              <label class="form-check-label" for="s32">
                <h4>Frecuencia y urgencia de orinar anormal (mayor/igual 350 ml)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s33" name="s33" value="true">
              <label class="form-check-label" for="s33">
                <h4>Deshidratación</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s34" name="s34" value="true">
              <label class="form-check-label" for="s34">
                <h4>Boca muy seca</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s35" name="s35" value="true">
              <label class="form-check-label" for="35">
                <h4>Hormigueo o adormecimiento en las manos o los pies</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s36" name="s36" value="true">
              <label class="form-check-label" for="s36">
                <h4>Estreñimiento</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s37" name="s37" value="true">
              <label class="form-check-label" for="s37">
                <h4>Cambios en la menstruación normal (menor/igual 2 veces al mes) </h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s38" name="s38" value="true">
              <label class="form-check-label" for="s38">
                <h4>Cambios en la menstruación anormal (mayor/igual 3 veces al mes)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s39" name="s39" value="true">
              <label class="form-check-label" for="s39">
                <h4>Sudores fríos</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s40" name="s40" value="true">
              <label class="form-check-label" for="s40">
                <h4>Falta de ganas de hacer las cosas</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s41" name="s41" value="true">
              <label class="form-check-label" for="s41">
                <h4>Anemia severa (8.0-9.4 gramos por decilitro)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s42" name="s42" value="true">
              <label class="form-check-label" for="s42">
                <h4>Anemia alta (menor/igual a 6.5 gramos por decilitro)</h4>
              </label>
            </div>
            <!-- <div class="form-check">
    <input class="form-check-input" type="checkbox" id="s43" name="s43" value="true">
    <label class="form-check-label" for="s43">
      <h4>NO CONSIDERAR Periodos menstruales más abundantes y mayor a 7 días</h4>
    </label>
  </div> -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s44" name="s44" value="true">
              <label class="form-check-label" for="s44">
                <h4>Ojos hundidos y secos</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s45" name="s45" value="true">
              <label class="form-check-label" for="s45">
                <h4>Hipertensión (presión sanguínea alta)</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s46" name="s46" value="true">
              <label class="form-check-label" for="s46">
                <h4>Esfuerzo al defecar</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="s47" name="s47" value="true">
              <label class="form-check-label" for="s47">
                <h4>Anemia ferropénica</h4>
              </label>
            </div>

          </div>
        </section>

        <!-- Section ANTECEDENTES -->
        <section class="antedecentes" id="antedecentes">
          <div class="content">
            <h1 class="heading"><strong><span>ANTECEDENTES</span></h1><br></strong>
            <h2><strong>¿En su Antecedente personal?</strong></h2>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="s48" name="s48" value="true">
              <label class="form-check-label" for="s48">
                <h4>Herpes</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="s49" name="s49" value="true">
              <label class="form-check-label" for="s49">
                <h4>Tabaquismo</h4>
              </label>
            </div><br>
            <h2><strong>¿En su Historial Familiar algún familiar tuvo o tiene Cáncer Vaginal?</strong></h2>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="s50" name="s50" value="true">
              <label class="form-check-label" for="s50">
                <h4>Abuela</h4>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="51" name="51" value="true">
              <label class="form-check-label" for="51">
                <h4>Madre</h4>
              </label>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s52" name="s52" value="true">
            <label class="form-check-label" for="s52">
              <h4>Hermana</h4>
            </label>
          </div>
          </div>
          <br>
          <br>
          <!-- <div class="d-grid gap-3 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-secondary" href="index.html">Regresar</button>
    <button type="button" class="btn btn-outline-secondary" href="#">Enviar</button><br>
  </div> -->

          <h2><strong>¿En lo que respecta a antecedentes gineco-obtétricos?</strong></h2>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s53" name="s53" value="true">
            <label class="form-check-label" for="s53">
              <h4>Deficiencia del sistema inmunológico</h4>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s54" name="s54" value="true">
            <label class="form-check-label" for="s54">
              <h4>Uso de Píldoras Anticoceptivas mayor a 5 años</h4>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s55" name="s55" value="true">
            <label class="form-check-label" for="s55">
              <h4>Múltiples Compañeros Sexuales</h4>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s56" name="s56" value="true">
            <label class="form-check-label" for="s56">
              <h4>Edad temprana en la primera relación sexual</h4>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s57" name="s57" value="true">
            <label class="form-check-label" for="s57">
              <h4>Haber padecido enfermedades venéras</h4>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s58" name="s58" value="true">
            <label class="form-check-label" for="s58">
              <h4>Multiparidad o primoparición de los 30 años</h4>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="s59" name="s59" value="true">
            <label class="form-check-label" for="s59">
              <h4>Elevado número de hijos</h4>
            </label>
          </div>
          <input type="submit" class="btn btn-primary" name="btnAnalizar" value="Analizar">
        </section>



      </form>



      <script src="../assets/js/progress.js"></script>
    </body>

    </html>





<?php

  }
}
?>