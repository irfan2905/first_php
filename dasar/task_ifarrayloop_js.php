<html>
    <head>
        <title></title>
    </head>
    <body>
        <script>
            document.write("<h3>Variabel Warna</h3>");
            var warna = ["Merah", "Kuning", "Hijau", "Biru", "Abu-abu"];
            document.write(warna + "<hr>");
            //
            document.write("<h3>Variabel Telepon</h3>");
            var telepon = [];
            telepon["umum"] = "022";
            telepon["genggam"] = "+62";
            telepon["kantor"] = "022";
            telepon["rumah"] = "022";
            document.write(telepon["umum"] + '<br>' + telepon["genggam"] + '<br>' + telepon["kantor"] + '<br>' + telepon["rumah"] + '<br><hr>');
            //
            document.write("<h3>Variabel Motor</h3><h4>ifelse</h4>");
            var motor = ["Honda"];
            var cc = 125;
            if (motor === "Honda" && cc === 125) {
                document.write('Supra');
            } else {
                document.write('Motor lain');
            }
            document.write('<br><hr>');
            if (motor === "Honda" && cc === 150) {
                document.write('CBR');
            } else {
                document.write('Motor lain');
            }
            document.write('<br><hr>');
            if (motor === "Honda" || motor === "Suzuki") {
                document.write('Jepang');
            } else {
                document.write('Motor lain');
            }
            document.write('<br><hr>');
            if (motor === "Suzuki") {
                document.write('Smash');
            } else {
                document.write('Motor lain');
            }
            document.write('<br><hr>');
            //
            document.write("<h3>Switch Case</h3>");
            var motor1 = "Honda";
            switch (motor1) {
                case "Honda":
                    motor1 = "Supra";
                    break;
                case "Suzuki":
                    motor1 = "Smash";
                    break;
                case "Kawasaki":
                    motor1 = "Ninja";
                    break;
                case "Yamaha":
                    motor1 = "Vixion";
                    break;
                default:
                    motor1 = "Motor lain";
            }
            document.write(motor1);
            document.write('<br><hr>');
            //
            document.write("<h3>For</h3>");
            for (var i = 1; i <= 10; i++) {
                document.write(i + ". Saya belajar Javascirpt<br>");
            }
            document.write("<hr>");
            for (var i = 1; i <= 10; i++) {
                document.write("Ini hari ke- " + i + "<br>");
            }
            document.write("<hr>");
            //
            document.write("<h3>While</h3>");
            var j = 0;
            while (j <= warna.length) {
                document.write(warna[j] + "<br>");
                j++;
            }
            document.write("<hr>");
            //
            document.write("<h3>Even</h3>");
            number = [];
            for (i = 0; i <= 20; i++) {
                if (i % 2 === 0) {
                    document.write(i + "<br>");
                }
            }
            document.write("<hr>");
            //
            document.write("<h3>Odd</h3>");
            for (o = 41; o <= 100; o++) {
                if (o % 3 === 0) {
                    document.write(o + "<br>");
                }
            }
            document.write("<hr>");
            //
            document.write("<h3>fibonacci</h3>");
            var i;
            var fib = []; // Initialize array!
            document.write(0 + "<br>" + 1 + "<br>");
            fib[0] = 0;
            fib[1] = 1;
            for (i = 2; i <= 8; i++)
            {
                // Next fibonacci number = previous + one before previous
                // Translated to JavaScript:
                fib[i] = fib[i - 2] + fib[i - 1];
                document.write(fib[i] + "<br>");
            }
            document.write("<hr><br>");
            //
            document.write("<h3>Warna</h3>");
            var c = 0;
            var res;
            document.write(warna + "<br>");
            for (c; c <= warna.length; c++) {
                document.write(warna.length);
                if (warna[c] === "Merah") {
                    document.write("ini merah<br>");
                } else {
                    document.write("ini bukan merah<br>");
                }
            }

            //
            document.write("<h3>:5</h3>");
            for (o = 0; o <= 100; o++) {
                if (o % 5 === 0) {
                    document.write(o + "<br>");
                }
            }




        </script>
    </body>
</html>