<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            * {
                font-family: sans-serif;
                margin: 0;
            }

            h1,
            h2,
            h3 {
                text-align: center;
            }

            h1 {
                background: indigo;
                color: white;
            }

            h2 {
                margin: 1rem;
            }

            p {
                margin: 1rem;
                text-align: justify;
            }

            hr {
                margin: 1rem 0;
            }

            form {
                display: flex;
                flex-direction: column;
                width: 50%;
                margin: 2rem auto;
                border: 1px solid black;
                padding: 2rem;
                border-radius: 10px;
            }

            label {
                margin-top: 0.5rem;
            }

            input[type="submit"] {
                margin-top: 1rem;
                background: green;
                padding: 0.5rem;
                border: none;
                color: white;
                border-radius: 5px;
            }

            input[type="submit"]:hover {
                cursor: pointer;
                background: darkgreen;
            }

            .hide {
                display: none;
            }

            .code {
                font-family: courier;
                background: lightgrey;

            }
        </style>
    </head>
    <body>
        <h1>Learning PHP</h1>
        <section class="hide">
            <h2>Getting User Input</h2>

            <p>This is the first useful thing I learned in <a href="https://youtu.be/OK_JCtrrv-c?t=3914" target="_blank">this PHP tutorial</a> from Free Code Camp. Behind the scenes on this form are the following two HTML attributes:</p>
            <ul>
                <li><span class="code">action="file_name.php"</span></li>
                <li><span class="code">method="get"</span></li>
            </ul>
            <p>
                Action tells the form which PHP file is going to handle the data submitted via the form. In this case it is the exact same file that the form lives in (<span class="code">site.php</span>).
            </p>
            <p>
                Method is essentially what purpose the form is serving for us. In this case it is <strong>getting</strong> the information on the form to then <span class="code">echo</span> back out onto the page for the user to see. Thus, the method is "GET".
            </p>
            <hr>
            <form action="site.php" method="get">
                <h3>Sample Contact Form</h3>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <input type="submit" value="Submit" name="submit">
            </form>

            <h4>Your name is <?php echo $_GET["name"] ?></h4>
            <h4>Your email is <?php echo $_GET["email"] ?></h4>
        </section>
        <section>
            <h2>Building a Basic Calculator</h2>
            <form action="site.php" method="get">
                <h3>Calculator</h3>
                <label for="num1">First Number</label>
                <input type="number" name="num1" id="num1">
                <label for="num2">Second Number</label>
                <input type="number" name="num2" id="num2">
                <input type="submit">
            </form>
            <h4>Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?></h4>
        </section>
        
        <script src="" async defer></script>
    </body>
</html>