<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>HTML form</title>

    <style>
        #main {

            background-color: #EFFCEF;
            height: 600px;
            width: 900px;
            margin: auto;
            border-style: solid;
            border-color: #AAD496;
            border-radius: 10px;
            margin-top: 30px;

        }

        #body {

            height: 450px;
            width: auto;
            margin: 4px;

        }

        hr {

            border-top: 2px solid #AAD496;
            margin: auto;
            width: 90%;

        }

        #footer {

            height: 122px;
            width: auto;
            margin: 4px;
            padding: 5px 50px;

        }

        button {

            background-color: #76CF76;
            height: 55px;
            width: 300px;
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            border: none;
            display: block;
            font-family: sans-serif;
            font-size: 23px;

        }

        #boxes {

            height: 420px;
            width: 410px;
            padding: 15px;

        }

        #questions {

            height: 420px;
            width: 422px;
            padding: 15px;

        }

        .x {

            float: left;

        }

        .y {

            padding: 15px;
            margin: 5px;
            height: 10px;
            width: 360px;
            border-radius: 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #AAD496;
            font-size: 16px;
            font-family: courier;

        }

        textarea {

            padding: 15px;
            margin: 5px;
            height: 150px;
            width: 360px;
            border-radius: 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #AAD496;
            font-size: 16px;
            font-family: courier;

        }

        .u {

            height: 18px;
            width: 16px;
            vertical-align: middle;

        }

        .v {

            font-family: verdana;
            font-size: 14px;
            color: #85B48B;

        }

        p {

            font-family: sans-serif;
            font-size: 17px;
            color: black;

        }
    </style>

</head>

<body>
    <form action="/submit-form" method="post">
        <div id="main">
            <div id="body">
                <div class="x" id="boxes">
                    <label for="name"></label>
                    <input class="y" type="text" name="name" id="name" placeholder="Name" required />
                    <br />
                    <label for="email"></label>
                    <input class="y" type="email" name="email" id="email" placeholder="Email" required />
                    <br />
                    <label for="phone"></label>
                    <input class="y" type="text" name="phone" id="phone" placeholder="Phone" required />
                    <br />
                    <textarea name="notes" id="notes" placeholder="Special notes, concerns, or requirements" maxlength="300" required></textarea>
                </div>
                <div class="x" id="questions">
                    <br />
                    <p><b>What is the best way to reach you?</b></p>
                    <label for="phone"></label>
                    <input class="u" type="radio" name="info" id="phone" value="Phone" required />
                    <font class="v"><b>Phone</b></font>
                    <br />
                    <label for="email"></label>
                    <input class="u" type="radio" name="info" id="email" value="Email" required />
                    <font class="v"><b>Email</b></font>
                    <p><b>Days of the week you are available for appointment:</b></p>
                    <label for="monday"></label>
                    <input class="u" type="checkbox" name="day" id="monday" value="Monday" />
                    <font class="v"><b>Monday</b></font>
                    <br /><label for="tuesday"></label>
                    <input class="u" type="checkbox" name="day" id="tuesday" value="Tuesday" />
                    <font class="v"><b>Tuesday</b></font>
                    <br /><label for="wednesday"></label>
                    <input class="u" type="checkbox" name="day" id="wednesday" value="Wednesday" />
                    <font class="v"><b>Wednesday</b></font>
                    <br /><label for="thursday"></label>
                    <input class="u" type="checkbox" name="day" id="thursday" value="Thursday" />
                    <font class="v"><b>Thursday</b></font>
                    <br /><label for="friday"></label>
                    <input class="u" type="checkbox" name="day" id="friday" value="Friday" />
                    <font class="v"><b>Friday</b></font>
                    <p><b>Best time of day for your appoinment:</b></p>
                    <label for="morning"></label>
                    <input class="u" type="checkbox" name="time" id="morning" value="Morning" />
                    <font class="v"><b>Morning</b></font>
                    <br /><label for="afternoon"></label>
                    <input class="u" type="checkbox" name="time" id="afternoon" value="Afternoon" />
                    <font class="v"><b>Afternoon</b></font>
                </div>
            </div>
            <hr />
            <div id="footer">
                <button type="submit" name="submit">
                    <font color="white">Request My Appoinment</font>
                </button>
            </div>
        </div>
    </form>
</body>

</html>