<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Javascript Dasar</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <style media="screen">
      body{
        border: 1px solid;
        padding: 20px;
        margin: 20px;
        font-family: 'Source Sans Pro', sans-serif;
      }
    </style>
  </head>
  <body>
    <h2><center>Belajar Javascript Dasar</center></h2>

    <script type="text/javascript">
    document.write('<h3><center>INI MENGGUNAKAN document.write</center></h3><hr>');

    //Variabel
    document.write("<h4><center>//Variabel</center></h4>");
    var kalimat = "I LOVE JAVASCRIPT"
    var satu = 1;
    var koma = 1.25;
    document.write(kalimat + '<br>');
    document.write(satu + '<br>');
    document.write(koma + '<br><hr>');

    //array
    document.write("<h4><center>//Array</center></h4>");
    var buah = ['apel', 'belimbing', 'jambu'];
    document.write(buah[0] + '<br>');
    document.write(buah[1] + '<br>');
    document.write(buah[2] + '<br>');
    document.write('Panjang Array Adalah ' + buah.length + ' Array<br>');
    document.write('Array jika diurutkan ' + buah.sort() + '<br><hr>');

    //Operasi Matematika
    document.write("<h4><center>//Operasi Matematika</center></h4>");
    var kali = 55 * 11;
    var bagi = 45 / 33;
    var tambah = 10 + 20;
    var kurang = 24 - 12;
    document.write(kali + '<br>' + bagi + '<br>' + tambah + '<br>' + kurang + '<br><hr>');

    //console log
    document.write("<h4><center>//Console.log</center></h4>");
    document.write('Klik Kanan pilih inspect elemen -> console<br><hr>');
    console.log('Kamu sedang mengakses console log pada');

    //alert
    document.write("<h4><center>//Alert</center></h4>");
    function notif(){
      alert('Hai');
    }
    document.write('<button onclick="notif()">ALERT</button><br><hr>');

    //If else
    document.write("<h4><center>//If Else</center></h4>");
    var waktu = 16;
    if(waktu >= 7 && waktu <= 10 ){
      document.write('Pagi');
    }else if(waktu > 10 && waktu <= 15){
      document.write('Siang');
    }else if(waktu > 15 && waktu <= 17){
      document.write('Sore');
    }else{
      document.write('Malam');
    }
    document.write('<br><hr>');

    //Switch Case
    document.write("<h4><center>//Switch Case</center></h4>");
    switch (new Date().getDay()) {
    case 0:
        day = "Minggu";
        break;
    case 1:
        day = "Senin";
        break;
    case 2:
        day = "Selasa";
        break;
    case 3:
        day = "Rabu";
        break;
    case 4:
        day = "Kamis";
        break;
    case 5:
        day = "Jumat";
        break;
    case 6:
        day = "Sabtu";
    }
    document.write("Sekarang hari "+ day + "<br><hr>");

    //for
    document.write("<h4><center>//For</center></h4>");
    for(var i=0; i<=10; i++){
        document.write(i + "<br>");
    }
    document.write("<hr>");

    //while
    document.write("<h4><center>//While</center></h4>");
    var j = 4;
    while(j <= 10){
      document.write(j + "<br>");
      j++;
    }
    </script>

  </body>
</html>
