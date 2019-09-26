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

  .superior_nupe{
    background: #8FBC8F;
    width: 100%;
    height: 200px;
    margin-top:3.5%;
    float: left;
  }
  .img_superior_nupe{
    width: 15%;
    margin-left: 42.5%;
    height: 70%;
    float: left;

    margin-top: 1%;

  }
  .nome_nupe{
    float: left;
    margin-left: 43%;
    font-family: arial;
    font-size: 20px;
  }
  .img_usuario_discente{

  }
  
</style>
</head>
<body>


  <div class="superior_nupe">

   <img class="img_superior_nupe" src="../img/usuario_discente.png">
   <center><p class="nome_nupe">Olá administrador</p></center>
 </div>



 <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Ocorrencia')">Alunos</button>
  <button class="tablinks" onclick="openCity(event, 'Historico')">Ocorrências</button>
  <button class="tablinks" onclick="openCity(event, '##')">Exemplo</button>
  <button class="tablinks" onclick="openCity(event, '##')">Exemplo</button>
  <button class="tablinks" onclick="openCity(event, '##')">Exemplo</button>
</div>


<div id="Historico" class="tabcontent">
</div>

<div id="Ocorrencia" class="tabcontent">
</div>



<div id="Dados" class="tabcontent">



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