
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
  <!-- <link rel="stylesheet" href="styles/materialize.css"> -->
  <link rel="stylesheet" href="styles/Fa Fa.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="styles/facebook.css" />

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script type="text/javascript"> var submitted=false </script>


  <title>Registracija</title>
</head>

<div class="registracija">

    <h1 >Užsirašyti susitikimui </h1>

    <form id="gform" method="POST" action="https://script.google.com/macros/s/AKfycbyzIeqHB6FTUXMhAJN72-3FuZgoOndtKOsoq2Dchc8KKLEXnb8u/exec" onsubmit="submitted=true;alert('Ačiu.&nbsp;Jūsų žinutė išsiųsta.&nbsp;Su Jumis bus susisiekta.')" target="hidden_iframe">

        <input id="vardas" class="form-control" name="vardas" type="text" placeholder="Jūsų vardas" required="" />
        <input id="telefonas" class="form-control" name="telefonas" type="number" placeholder="Telefono numeris" required="" />
        <input id="email" class="form-control" name="email" type="email" value="" placeholder="Elektroninis paštas" />
        <input id="registracijos data" class="form-control" name="registracijos data" type="datetime" style="float: active" placeholder="Pageidaujama vizito data ir laikas" />

        <br />
        <textarea id="message" name="message" class="textarea_control" style="height:150px" required="" placeholder="Jūsų žinutė"></textarea> <br />
        <p class="juodapnum2">Užsirašydamas, sutinku Jums patikėti savo asmeninius duomenis

        </p>
        <p class="juodapnum2" style="font-size: 16px;">Jūsų pateiktus duomenis naudosiu tik susisiekimo tikslais</p><br />
        <input id="Patiki duomenis" type="checkbox" name="Susisiekimo tikslais sutinku jums patikėti asmeninius duomenis" value="Sutinku" required="">
        <p class="juodapnum2" style="font-size: 18px;">Sutinku, kad su manimi būtų susisiekta mano pateiktais duomenimis</p>

        <input id="sendButton" class="form-control" type="submit" value="Užsirašyti"></input>
    </form>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.close(); }">

    </iframe>


</div>



