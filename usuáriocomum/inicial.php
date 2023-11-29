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

<!-- Header -->
<header style="bacground-color: #008080;" id="myHeader" >
  <div class="w3-center" >
  <h4>INÍCIO</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom" style="">COMO PODEMOS AJUDAR?</h1>
    <div class="w3-padding-32">
      <a href="/TCC/testesdb/landingpage.php"><button class="w3-btn w3-xlarge w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900; background-color:#5F9EA0;">VOLTAR À PAGINA INICIAL</button></a>
    </div>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px; background-color:#48D1CC; border: double white 5px;">
  <a href="cadastromed.php"><button style="width: 100%; background-color: transparent; border: none; cursor: pointer;">
  <h3>Marcar consulta</h3><br>
  <svg xmlns="http://www.w3.org/2000/svg" style="font-size:120px" height="1em" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M163.9 136.9c-29.4-29.8-29.4-78.2 0-108s77-29.8 106.4 0l17.7 18 17.7-18c29.4-29.8 77-29.8 106.4 0s29.4 78.2 0 108L310.5 240.1c-6.2 6.3-14.3 9.4-22.5 9.4s-16.3-3.1-22.5-9.4L163.9 136.9zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z"/></svg>
  <p>Você podera escolher:</p>
  <p>Especialidade</p>
  <p>Horário</p>
  <p>Data</p>
</button></a>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px; background-color:#48D1CC; border: double white 5px;">
  <a href="cadastroclin.php"><button style="width: 100%; background-color: transparent; border: none; cursor: pointer;">
  <h3>Verificar agenda de consultas</h3><br>
  <svg class="w3-margin-bottom w3-text-theme" style="font-size:120px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>
  <p>Verificar:</p>
  <p>Especialidade</p>
  <p>Data</p>
  <p>Médico designado</p>
  </div></a>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px; background-color:#48D1CC; border: double white 5px;">
  <a href="cadastroclin.php"><button style="width: 100%; background-color: transparent; border: none; cursor: pointer;">
  <h3>Modificar agendamento</h3><br>
  <svg class="w3-margin-bottom w3-text-theme" style="font-size:120px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"/></svg> 
  <p>Modificar:</p>
  <p>Horário</p>
  <p>Data</p>
  <p>Médico designado</p>
  </div>
</div><a>
</div>

</body>
</html>
