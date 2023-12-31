<!DOCTYPE html>

<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body style="background-color: #008B8B;">

<header style="bacground-color: #008080;" id="myHeader" >
  <div class="w3-center" >
  <h4>PLANEJAMENTO CLÍNICO</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom" style="">CONSULTAS E AGENDAMENTOS</h1>
    <div class="w3-padding-32">
      <a href="landingpage.php"><button class="w3-btn w3-xlarge w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900; background-color:#5F9EA0;">VOLTAR À PAGINA INICIAL</button></a>
    </div>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px; background-color:#48D1CC; border: double white 5px;">
  <a href="cadastromed.php"><button style="width: 100%; background-color: transparent; border: none; cursor: pointer;">
  <h3>Cadastrar médico</h3><br>
  <svg class="w3-margin-bottom w3-text-theme" style="font-size:120px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
  <p>informações necessárias:</p>
  <p>Nome</p>
  <p>Especialidade</p>
  <p>CRM</p>
</button></a>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px; background-color:#48D1CC; border: double white 5px;">
  <a href="mostramed.php"><button style="width: 100%; background-color: transparent; border: none; cursor: pointer;">
  <h3>Verificar médicos cadastrados</h3><br>
  <svg xmlns="http://www.w3.org/2000/svg" style="font-size:120px" height="1em" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M142.4 21.9c5.6 16.8-3.5 34.9-20.2 40.5L96 71.1V192c0 53 43 96 96 96s96-43 96-96V71.1l-26.1-8.7c-16.8-5.6-25.8-23.7-20.2-40.5s23.7-25.8 40.5-20.2l26.1 8.7C334.4 19.1 352 43.5 352 71.1V192c0 77.2-54.6 141.6-127.3 156.7C231 404.6 278.4 448 336 448c61.9 0 112-50.1 112-112V265.3c-28.3-12.3-48-40.5-48-73.3c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V336c0 97.2-78.8 176-176 176c-92.9 0-168.9-71.9-175.5-163.1C87.2 334.2 32 269.6 32 192V71.1c0-27.5 17.6-52 43.8-60.7l26.1-8.7c16.8-5.6 34.9 3.5 40.5 20.2zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
  <p>Verificar:</p>
  <p>Especialidade</p>
  <p>Foto</p>
  <p>Nome</p>
  </div></a>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px; background-color:#48D1CC; border: double white 5px;">
  <a href="cadastroclin.php"><button style="width: 100%; background-color: transparent; border: none; cursor: pointer;">
  <h3>Verificar consultas agendadas</h3><br>
  <svg class="w3-margin-bottom w3-text-theme" style="font-size:120px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"/></svg> 
  <p>Verificar:</p>
  <p>Horário</p>
  <p>Data</p>
  <p>Médico designado</p>
  </div>
</div><a>
</div>

</body>
</html>
