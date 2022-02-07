<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/up.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <img src="" alt="">
                <h2>Hi Mr. Himza</h2>
                <h4>You are invited to our opening</h4>
                <h5 style="padding-left: 10px;">Opening - 20.12.22-8:30am</h5>
                <hr>
                <h5>Please Update follwing Information</h5>

                <label style="margin-left: 50px;">Participation</label><label
                    style="margin-left: 60px;">Vaccination</label><br>
                <label>You<input style="margin-left: 40px;" class="check" type="checkbox" id="participation"
                        value="Participation">
                    <input style="margin-left: 60px;" class="check" type="checkbox" id="vaccination"
                        value="vaccinationaccination"></label>
                <div class="row">
                    <div class="col-6">
                        <label>Contact Number</label><br><br>
                        <label>Email</label>
                    </div>
                    <br>
                    <div class="col-6">
                        <input style="margin-top: 20pxpx;width:150px;" type="text"><br><br>
                        <input style="margin-top: 20pxpx;width:150px;" type="text">

                    </div>
                </div>
                <hr>
                <h5>Other's Participation & Vaccination Status</h5>
                <label style="margin-left: 50px;text-align:center;">Participation</label><label
                    style="margin-left: 60px;">Vaccination</label><br>
                <label>Wife<input style="margin-left: 10px; width:110px;" type="text"><input class="check"
                        type="checkbox" id="participation" value="Participation">
                    <input style="margin-left: 60px;" class="check" type="checkbox" id="vaccination"
                        value="vaccinationaccination"></label>
                <label>Son<input style="margin-left: 15px; width:110px;" type="text"><input class="check"
                        type="checkbox" id="participation" value="Participation">
                    <input style="margin-left: 60px;" class="check" type="checkbox" id="vaccination"
                        value="vaccinationaccination"></label>

                <div class="row">
                    <div col-6>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div col-6>
                        <button type="button" class="btn btn-success">Exit</button>
                    </div>

                </div>



            </div>


            <div class="col-4">

            </div>
        </div>


    </div>
    <script>
        function validate() {
            var valid = false;
            if (document.getElementByid("participation").checked) {
                valid = true;
            } else if (document.getElementByid("vaccination").checked) {
                valid = true;
            }
        }
    </script>

</body>

</html>
