<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/otp.css') }}">
</head>

<body>
    <div class="container">
        <h1>RSVP</h1>
        <h3>Confirm Your Participation</h3>
        <div class="userInput">
            <input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')">
            <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
            <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">
            <input type="text" id="fourth" maxlength="1">
        </div>
        <button>Login</button>
    </div>
    <script>
        function clickEvent(first, last) {
            if (first.value.length) {
                document.getElementById(last).focus();
            }
        }
    </script>
</body>

</html>
