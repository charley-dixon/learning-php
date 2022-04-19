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

            section {
                margin: 0 auto 3rem;
                padding: 1rem 0;
                border: 1px solid black;
                background: lightyellow;
                max-width: 500px;
            }

            h1,
            h2,
            h3 {
                text-align: center;
            }

            h1 {
                background: indigo;
                color: white;
                padding: 1rem 0;
            }

            h2 {
                margin: 1rem;
            }

            p {
                margin: 1rem;
                text-align: justify;
            }

            li {
                line-height: 1.35rem;
            }

            hr {
                margin: 1rem 0;
            }

            form {
                display: flex;
                flex-direction: column;
                width: 50%;
                margin: 2rem auto 1rem;
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
                padding: 0.2rem 0.3rem;
            }

            .caption {
                font-style: italic;
                font-size: 0.7rem;
            }

            .text-center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Learning PHP</h1>
        <section>
            <p>The following sections are lessons that I have learned from the <a href="https://youtu.be/OK_JCtrrv-c?t=3914" target="_blank">PHP Programming Language Tutorial</a> by FreeCodeCamp.</p>
        </section>
        <section class="hide">
            <h2>Getting User Input</h2>

            <p>Behind the scenes on this form are the following two HTML attributes:</p>
            <ul>
                <li><span class="code">action="file_name.php"</span></li>
                <li><span class="code">method="get"</span></li>
            </ul>
            <p>
                Action tells the form which PHP file is going to handle the data submitted via the form. In the case of this particular php file it is the exact same as the name of the file (<span class="code">site.php</span>).
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

            <h4 class="text-center">Your name is <?php echo $_GET["name"] ?></h4>
            <h4 class="text-center">Your email is <?php echo $_GET["email"] ?></h4>
        </section>
        <section class="hide">
            <h2>Building a Basic Calculator</h2>
            <form action="site.php" method="get">
                <h3>Calculator</h3>
                <label for="num1">First Number</label>
                <input type="number" name="num1" id="num1">
                <label for="num2">Second Number</label>
                <input type="number" name="num2" id="num2">
                <input type="submit">
            </form>
            <p class="text-center caption">Refer to <span class="code">site.php</span> for underlying code on this form.</p>
            <h4 class="text-center">Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?></h4>
        </section>
        <section class="hide">
            <h2>Building a Mad Lib</h2>
            <form action="site.php" method="get">
                <h3>Fill in the following:</h3>
                <label for="color">Color</label>
                <input type="text" name="color" id="color">
                <label for="noun">Plural Noun</label>
                <input type="text" name="noun" id="noun">
                <label for="celebrity">Celebrity</label>
                <input type="text" name="celebrity" id="celebrity">
                <input type="submit" value="Submit">
            </form>
            <p class="text-center caption">Refer to <span class="code">site.php</span> for underlying code on this form.</p>
            <h3>Output:</h3>
            <div class="text-center">
                <?php
                    $color = $_GET["color"];
                    $noun = $_GET["noun"];
                    $celebrity = $_GET["celebrity"];

                    echo "Roses are $color <br>";
                    echo "$noun are blue <br>";
                    echo "I love $celebrity <br>";
                ?>
            </div>
        </section>
        <section class="hide">
            <h2>Arrays</h2>
            <ul>
                <li>
                    An array is a variable that can store multiple pieces of data (called "elements").
                </li>
                <li>
                    Can store different types of data together (ints, floats, strings, etc.)
                </li>
                <li>
                    Arrays can be modified in-place with indexing. For example, if we had an array we could change the first element like so: <span class="code">$array[0] = new_data</span>
                </li>
                <li>
                    We can add new elements to an array by assigning them directly to an unused index (i.e. <span class="code">$array[100] = new_element</span>).
                </li>
                    <ul>
                        <li>
                            Note that if you have an array with 5 elements, and you assign a new element to index 10 (or any index that would be more than one element away from the last element), every index in between the new element and last element (of the existing array) will be a blank value.
                        </li>
                    </ul>
                <li>
                    A better way to add new elements is to use the <a class="code" href="https://www.php.net/manual/en/function.count.php" target="_blank">count</a> of the existing array like so: <span class="code">$array[count($array)] = next_element</span>
                </li>
                    <ul>
                        <li>
                            Since PHP is zero-based index (like most programming languages), the length of the array would serve as the index of the <em>next</em> element in the array itself
                        </li>
                    </ul>
            </ul>
            <br>
            <h3>Sample Code</h3>
            <p class="code">   
                    $friends = array("Kevin", "Karen", "Oscar", "Jim"); <br>
                    // Add a new element to the array <br>
                    $friends[count($friends)] = "Charley"; <br>
            </p>


            <?php
            // Adding a new element to an array like so:
                $friends = array("Kevin", "Karen", "Oscar", "Jim");
                $friends[count($friends)] = "Charley";
            ?>


        </section>
        <section class="hide">
            <h2>Using Checkboxes</h2>
            <ul>
                <li>
                    Whenever we are collecting data from multiple checkboxes, we want to include square brackets in the name attribute of our input (<span class="code">i.e. input name="fruits[]"</span>)
                </li>
                    <ul>
                        <li>
                            However, in our PHP code we do not include the square brackets (i.e. <span class="code">$fruits = $_POST["fruits"];</span>)
                        </li>
                    </ul>
                <li>
                    An array allows us to collect the data from multiple checkboxes from one submission
                </li>
            </ul>
            <form action="site.php" method="post">
                <h3>Fruits</h3>
                <label>Apples <input type="checkbox" name="fruits[]" value="apples"></label>
                <label>Oranges <input type="checkbox" name="fruits[]" value="oranges"></label>
                <label>Pears <input type="checkbox" name="fruits[]" value="pears"></label>
                <input type="submit" value="Submit">
            </form>
            <p class="text-center caption">Refer to <span class="code">site.php</span> for underlying code on this form.</p>

            <h4 class="text-center">Response</h4>
            <p class="text-center">
                <?php
                    $fruits = $_POST["fruits"];
                    echo ucwords($fruits[0]);
                ?>
            </p>
        </section>
        <section class="hide">
            <h2>Associative Arrays</h2>
            <ul>
                <li>
                    Key-Value Pairs (like dictionaries in python)
                </li>
                <li>
                    Syntax:<span class="code">$variable_name = array("key1"=>"value1", "key2"=>"value2", etc.)</span>
                </li>
            </ul>

            <form action="site.php" method="post">
                <h3>Student Name Input</h3>
                <p class="text-center">Enter Jim, Pam, or Oscar.</p>
                <input type="text" name="student">
                <input type="submit" value="Submit">
            </form>
            <p class="text-center caption">Refer to <span class="code">site.php</span> for underlying code on this form.</p>

            <h4 class="text-center">
                Code Output
           </h4>
           <p class="text-center">
               <?php
                    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
                    echo $grades[$_POST["student"]];
                ?>
           </p>

        </section>
        <section class="hide">
            <h2>Functions</h2>
            <ul>
                <li>
                    Syntax: <span class="code">function func_name($params) { <em>code</em> }</span>
                </li>
            </ul>
            <br>
            <h4 class="text-center">Code Output:</h4>
            <p class="text-center">
                <?php
                    function sayHi($name) {
                        echo "Hello $name";
                    }

                    sayHi("Charley");
                ?>
            </p>
            
            <form action="site.php" method="post">
                <h3>Cube a Number</h3>
                <label for="number">Enter Number:</label>
                <input type="number" name="number">
                <p>Answer:
                    <?php
                        function cube($num) {
                            return $num * $num * $num;
                        }
                        echo cube($_POST["number"]);
                    ?>
                </p>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section> 
            <h2>If Statements</h2>
        </section>
        <!-- <script src="" async defer></script> -->
    </body>
</html>