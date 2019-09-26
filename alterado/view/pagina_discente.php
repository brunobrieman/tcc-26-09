<?php
include '../cabecalho.php';
?>

<style>
  body {font-family: Arial;}

  /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    margin-top: 5%;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;

    border-top: none;
  }

  .superior_discente{

    background: #8FBC8F;
    width: 100%;
    height: 200px;
    margin-top:3.5%;
    float: left;
  }
  .img_superior_discente{
    width: 15%;
    margin-left: 42.5%;
    height: 70%;
    float: left;

    margin-top: 1%;

  }
  .nome_aluno{
    float: left;
    margin-left: 45%;
    font-family: arial;
    font-size: 20px;
  }
  .img_usuario_discente{

  }
  /* Historico */
  .historico{
    width: 90%;
    height: 300px;
    margin-left: 5%;
    margin-top: 5%;


    float: left;
  }
  .titu_historico{
    font-family: Avantgarde;
    margin-top: 1%;
    
  }
  .demo {
    border:1px solid #C0C0C0;
    border-collapse:collapse;
    padding:5px;
    width: 100%;
  }
  .demo th {
    border:1px solid #C0C0C0;
    padding:5px;
    background:#F0F0F0;
  }
  .demo td {
    border:1px solid #C0C0C0;
    padding:5px;
  }

  .Ocorrencia_discente{
    width: 70%;
    margin-left: 15%;
    margin-top: 3%;
    margin-bottom: 5%;
  }

  .dados_discente{
    width: 70%;
    margin-left: 15%;
    margin-top: 3%;
    margin-bottom: 5%;
  }
</style>
</head>
<body>


  <div class="superior_discente">

   <img class="img_superior_discente" src="../img/usuario_discente.png">
   <center><p class="nome_aluno">Nome Do Aluno</p></center>
 </div>



<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Ocorrencia')">Ocorrência</button>
  <button class="tablinks" onclick="openCity(event, 'Historico')">Histórico</button>
  <button class="tablinks" onclick="openCity(event, 'Dados')">Dados Institucionais</button>
</div>


<div id="Historico" class="tabcontent">
  <center><h3 class="titu_historico">Histórico (entradas e saídas da institução)</h3></center>

  <div class="historico">

    <table class="demo">

      <thead>
        <tr>
          <th>Codigo</th>
          <th>Data Ocorrência</th>
          <th>Tipo Ocorrêcia </th>
          <th>Motivo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>

  </div>
</div>

  <div id="Ocorrencia" class="tabcontent">
<div class="Ocorrencia_discente">
  <form>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Entrada tardia</option>
      <option>Saida da intituição</option>
      <option>exemplo</option>
      <option>exemplo</option>
      
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Motivo:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

<button type="button" class="btn btn-light">Enviar</button>

  </div>

</div>


    <div id="Dados" class="tabcontent">
     
      <div class="dados_discente">
        <center><p class="dados_institucionais">Dados Institucionais:</p> </center>
        <p class="dados_insti_subtitulo">Matricula:</p> 
        <p class="dados_insti_subtitulo">Turma:</p> 
        <p class="dados_insti_subtitulo">Curso:</p> 
        <p class="dados_insti_subtitulo">Email:</p> 
      </div>

     </div>
   
 </div>

      <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
      </script>

    </body>
    </html> 