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
        <?php include "header.html" ?>
        <section>
            <p>
                The following sections are lessons that I have learned from the <a href="https://youtu.be/OK_JCtrrv-c?t=3914" target="_blank">PHP Programming Language Tutorial</a> by FreeCodeCamp. This information may seemingly start "in the middle" of where you would typically start learning PHP, but this is a personal resource and I was already familiar with many of the programming topics discussed in the video.
            </p>
        </section>
        <section >
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

        <section >
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
            <h4 class="text-center">
                Answer:
                <?php echo $_GET["num1"] + $_GET["num2"] ?>
            </h4>
        </section>

        <section>
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
            <div class="text-center code">
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

        <section>
            <h2>Arrays</h2>
            <ul>
                <li>
                    An array is a variable that can store multiple pieces of data (called "elements").
                </li>
                <li>
                    Arrays can store different types of data together (ints, floats, strings, etc.)
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
                    A better way to add new elements is to use the <a class="code" href="https://www.php.net/manual/en/function.count.php" target="_blank">count</a> of the existing array like so:<br>
                    <span class="code">
                        $array[count($array)] = next_element
                    </span>
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

        <section>
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
                    An array allows us to collect the data from multiple checkboxes on one submission
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

        <section>
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
                Student Grade:
           </h4>
           <p class="text-center code">
               <?php
                    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
                    echo $grades[$_POST["student"]];
                ?>
           </p>

        </section>

        <section>
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
            <ul>
                <li>
                    Syntax:<br>
                    <span class="code">if( condition ){<br>run_code<br>} elseif {<br>run_code<br>} else {<br>run_code<br>}</span>
                </li>
                <li>
                    AND operator = <span class="code">&&</span>
                </li>
                <li>
                    OR operator = <span class="code">||</span>
                </li>
            </ul>
            <br>
            <?php
                $isMale = true;

                if ($isMale) {
                    // echo "You are male";
                }
            ?>
        </section>
        <section>
            <h2>Building a Better Calculator</h2>
            <p>This calculator uses an if statement to check on the inputted math operation (+, -, *, or /) for the user and them performs the operation on the two numbers.</p>
            <form action="site.php" method="post">
                <label for="num1">First Number</label>
                <input type="number" name="num1" step="0.001">
                <label for="operation">Operation</label>
                <input type="text" name="operation">
                <label for="num2">Second Number</label>
                <input type="number" name="num2" step="0.001">
                <input type="submit" value="Submit">
                <hr>
                <h4 class="text-center">Answer</h4>
                <p class="text-center">
                    <?php
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        $operation = $_POST["operation"];

                        if ($operation == "+") {
                            echo $num1 + $num2;
                        } elseif ($operation == "-") {
                            echo $num1 - $num2;
                        } elseif ($operation == "*") {
                            echo $num1 * $num2;
                        } elseif ($operation == "/") {
                            echo $num1 / $num2;
                        } else {
                            echo "Please enter a valid operation";
                        }
                    ?>
                </p>
            </form>
            <p class="text-center caption">Refer to <span class="code">site.php</span> for underlying code on this form.</p>
        </section>
        <section>
            <h2>Switch Statements</h2>
            <p>
                A switch statment is very similar to an if/else statement, in fact you can use them interchangeably. A switch statement is most useful when you have one value that you want to compare a bunch of others, and then handle each "case" separately. So for the better calculator that we built above, it would actually make a lot more sense to use a switch statment since we are only taking the "operation" value and comparing it to four separate cases (addition +, subtraction -, multiplication *, and division /)
            </p>
            <ul>
                <li>
                    Switch statements are made up of <span class="code">case</span>'s
                </li>
                <li>
                    Syntax: <br>
                    <span class="code">
                        switch(value_to_check) { <br>
                            case case_1: <br>
                            ____run_code; // if case matches value <br>
                            case case_2: <br>
                            ____run_code; <br>
                            case case_3: <br>
                            ____run_code; <br>
                            default: <br>
                            ____run_code; <br>
                        }
                    </span>
                </li>
                <li>
                    The <span class="code">default</span> case is the "catch-all" similar to the <span class="code">else</span> statment in an if/else conditional.
                </li>
            </ul>
            <form action="site.php" method="post">
                <h3>Enter Grade</h3>
                <label for="grade">Grade</label>
                <input type="text" name="grade">
                <input type="submit" value="Submit">
                <hr>
                <h4 class="text-center">Code Output</h4>
                <p class="text-center">
                    <?php
                        $grade = $_POST["grade"];
                        switch($grade) {
                            case "A":
                                echo "You did amazing!";
                                break;
                            case "B":
                                echo "You did pretty good.";
                                break;
                            case "C":
                                echo "There's definitely room for improvement.";
                                break;
                            case "D":
                                echo "That's pretty bad.";
                                break;
                            case "F":
                                echo "You fail.";
                                break;
                            default:
                                echo "Invalid grade entered.";
                                break;
                        }
                    ?>
                </p>
            </form>
            <p class="text-center caption">Refer to <span class="code">site.php</span> for underlying code on this form.</p>
        </section>
        <section>
            <h2>While & Do-While Loops</h2>
            <p>
                The code inside <span class="code">site.php</span> is running a loop that counts to five here. Syntax is exactly what you would expect it to be.
            </p>
            <p class="text-center">
                <?php
                    $index = 1;
                    while($index <= 5) {
                        echo "$index <br>";
                        $index++;
                    }
                ?>
            </p>
            <h3>Do-While</h3>
            <p>A do-while loop is the exact same thing as a while loop, except the order is reversed. A d/w loop executes the code body FIRST and then checks the condition. A while loop is simply the opposite.</p>
            <p class="code">
                do {<br>
                ____run_code; <br>
                } while (condition);
            </p>
        </section>
        <section>
            <h2>For Loops</h2>
            <p>See <span class="code">site.php</span> for syntax.</p>
            <p class="text-center">
                <?php
                    for($i = 1 ; $i <= 5 ; $i++) {
                        echo "$i <br>";
                    }
                ?>
            </p>
            <h3>Looping through an array</h3>
            <p class="text-center">
                <?php
                    $luckyNumbers = array(5, 8, 10, 24, 42);
                    for($i = 0 ; $i < count($luckyNumbers) ; $i++) {
                        echo "$luckyNumbers[$i] <br>";
                    }
                ?>
            </p>
        </section>
        <section>
            <h2>⭐️ Including HTML ⭐️</h2>
            <p class="caption text-center">⭐️ - This is a particularly important topic for WP Theme Development</p>
            <p>
                The <span class="code">include</span> statement in PHP allows us to include another file in our program. This is where the power of templates comes into play in Wordpress. We can create one (1) file named 'header.php' that contains the header & navigation for our website and then simply <span class="code">include</span> it in other PHP files that contain the code for things like pages and posts in Wordpress.
            </p>
            <p>
                <strong>Syntax:</strong>
                <span class="code">
                    &lt;?php include "header.html" ?&gt;
                </span>
                <br>
                <br>
                Note that it does not have to be an HTML file, you could <span class="code">include</span> a PHP file as well. This code will be rendered wherever it is located in the order of the PHP file, so in this case I have placed that code directly under the <span class="code">&lt;body&gt;</span> tag.
            </p>
            <h3>Code Practice</h3>
            <p>
                You can start to see how compatible a progamming language like PHP can be in conjunction with a CMS like Wordpress. As a developer we can build files that use variables related to Wordpress-specific operations (i.e. $site_title, $author, $post_title, etc.), which can then be modified by a less-technical user using the the GUI admin panel to change these variables. That's what creating a dynamic template is all about - using variables.
            </p>
            <div style="
                margin: 1rem;
                padding: 1rem;
                background: black;
                color: white;
            ">
                <?php
                    $title = "Learn PHP for Wordpress";
                    $author = "Charley Dixon";
                    $wordCount = 400;
                    include "include-practice.php";
                ?>
            </div>
            <p class="caption text-center">
                Included from <span class="code">include-practice.php</span>
            </p>
            <p>
                The other really powerful thing with <span class="code">include</span> is that we can use it to import functions, variables, tools, etc. In Wordpress theme development, I believe this relates directly to the <span class="code">functions.php</span> file.
            </p>
        </section>
        <section>
            <h2>Classes & Objects</h2>
            <p>
                We cannot represent everything in the real world with the default four data type in PHP (str, int, float, bool) so think of classes as "custom data types". They allow us to build a representation of an object by combining other data types (which includes other classes). An object is simply an instance of a class. So think of a class as a blueprint and an object is a house built with those plans.
            </p>
            <p class="text-center"><strong>Class : Object :: Blueprint : House</strong></p>
            <p>
                <strong>Syntax:</strong><br>
                <span class="code">
                    class Book {<br>
                        var $title;<br>
                        var $author;<br>
                        var $pages;<br>
                    }<br>
                    <br>
                    $book1 = new Book;<br>
                    $book1->title = "Harry Potter";<br>
                    $book1->author = "JK Rowling";<br>
                    $book1->pages = 400;<br>
                    <br>
                    echo $book1->author;<br>
                </span><br>
                It is conventional to use an uppercase letter for class names. You can assign a value to each property of an object by using the hyphen-greaterThan syntax, which is similar to using dot notation in other languages.
            </p>
        </section>
        <section>
            <h2>Constructors</h2>
            <p>
                A constructor is a function that is called any time we created an object. It resides in the class blueprint for that object.
            </p>
            <p>
                The purpose of a constructor function is to build an object efficiently. It allows us to create a new instance of a class AND assign values to every property of that class in one line of code. In the "Classes & Objects" section above we had to write extra lines of code to assign the $title, $author, and $pages; with a constructor function we can do it in one line of code like so:<br>
                <span class="code">
                    $book1 = new Book("Harry Potter", "JK Rowling", 400);
                </span>
            </p>
            <p>
                <strong>Syntax:</strong><br>
                <span class="code">
                    function __construct($title, $author, $pages) {<br>
                        $this->title = $title<br>
                        $this->author = $author<br>
                        $this->pages = $pages<br>
                    }<br>
                </span>
            </p>
            <p>
                It <strong>must</strong> have the double underscore and construct syntax or it won't work. <span class="code">this</span> is a keyword that refers to <em>current</em> object being created by the constructor function.
            </p>
        </section>
        <section>
            <h2>Object Functions</h2>
            <p>
                As the title suggests, an object function is a function that is defined within a class that can be used by the objects of that class.
            </p>
            <h3>Practice</h3>
            <p>
                We're going to write a function that can check to tell us whether or not the student has made the honor roll. This function will essentially be able to check the GPA of the object it belongs to, compare that to a standard for making the honor roll, and then return a boolean value.<br>
                <br>
                Here's our setup:
            </p>
            <p class="code" style="text-align: left;">
                &lt;?php<br>
                class Student {<br>
                &emsp;var $name;<br>
                &emsp;var $major;<br>
                &emsp;var $gpa;<br>
                <br>
                &emsp;function __construct($name, $major, $gpa) {<br>
                &emsp;&emsp;$this->name = $name;<br>
                &emsp;&emsp;$this->major = $major;<br>
                &emsp;&emsp;$this->gpa = $gpa;<br>
                &emsp;}<br>
                }<br>
                <br>
                $student1 = new Student("Jim", "Business", 2.8);<br>
                $student2 = new Student("Pam", "Art", 3.6);<br>
                ?&gt;<br>
            </p>
            <p>
                Now we're going to add in the object function <em>below</em> the constructor function. Here's what that would look like:
            </p>
            <p class="code">
                function hasHonors() {<br>
                &emsp;if ($this->gpa >= 3.5) {<br>
                &emsp;&emsp;return "true";<br>
                &emsp;} else {<br>
                &emsp;&emsp;return "false";<br>
                &emsp;}<br>
                }<br>
            </p>
            <p class="caption">
                In our return values above, we include quotations so that the value will actually print to the HTML page. However, in a live programming situation we would not include the quotations as we would likely want to return a boolean value instead of a string.
            </p>
            <p>
                And then we can call it like so:
            </p>
            <p class="code">
                echo $student1->hasHonors();
            </p>
            <h4 class="text-center">Output:</h4>
            <p class="code text-center">
                <?php
                    class Student {
                        var $name;
                        var $major;
                        var $gpa;

                        function __construct($name, $major, $gpa) {
                            $this->name = $name;
                            $this->major = $major;
                            $this->gpa = $gpa;
                        }

                        function hasHonors() {
                            if ($this->gpa >= 3.5) {
                                return "true";
                            } else {
                                return "false";
                            }
                        }
                    }

                    $student1 = new Student("Jim", "Business", 2.8);
                    $student2 = new Student("Pam", "Art", 3.6);

                    echo $student1->hasHonors();
                ?>
            </p>
            <p class="caption">
                The code above is actually being generated by PHP code within <span class="code">site.php</span>. If you change the student to <span class="code">$student2</span> and refresh the page you will see the value change.
            </p>
        </section>
        <section>
            <h2>Getters & Setters</h2>
            <p>
                Getters & Setters are special functions inside classes that allow us to control access to the attributes of those classes. It's similar to having validation for forms, but instead its validation for object attributes.
            </p>
            <p>
                Here's the <em>potential</em> problem - if we allow object attributes to simply be assigned any value, then there is the potential for those attributes to be assigned values that shouldn't be allowed. For example, if we have a <strong>movie</strong> class that has a <strong>rating</strong> attribute, the rating should only have certain values (i.e. PG, PG-13, R, etc.). Getters & Setters act as a sort of validation inside the code to make sure that the value of <span class="code">object->attribute</span> cannot go beyond those restrictions.
            </p>
            <h3>Visibility Modifiers</h3>
            <p>
                Earlier in the course we created class attributes with the <span class="code">var</span> keyword. In modern day PHP, it is convention to use either the <span class="code">public</span> or <span class="code">private</span> keyword instead of <span class="code">var</span>.
            </p>
            <p>
                <span class="code">public</span> and <span class="code">private</span> control which parts of our code have access to certain attributes. If we want to control the access of something (like the movie rating above), then we use the <span class="code">private</span> keyword. Now, in order to assign or retrieve the value of that attribute we must use getters & setters. The reason for this is that <em>only</em> code that is inside of the class itself can modify private attributes. Getters & Setters reside inside the class, so by using them we can set the rules by which that attribute has to abide by.
            </p>
            <h3>Code Practice</h3>
            <p class="code">
                &lt;?php<br>
                // getter function<br>
                function getRating() {<br>
                &emsp;return $this->rating;<br>
                }<br>
                <br>
                // setter function (note that it takes a parameter)<br>
                function setRating($rating) {<br>
                &emsp;if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R") {<br>
                &emsp;&emsp;$this->rating = $rating;<br>
                &emsp;else {<br>
                &emsp;&emsp;$this->rating = "NR";<br>
                &emsp;}<br>
                ?&gt;
            </p>
            <h3>tl;dr</h3>
            <ol>
                <li>Set attribute to <span class="code">private</span></li>
                <li>Create getters & setters with necessary code validation</li>
                <li>Ensure constructor function uses getters & setters to change value of private attribute</li>
            </ol>
        </section>
        <section>
            <h2>Inheritance</h2>
            <p>
                Inheritance can be used to "nest" classes and have higher level classes inherit the attributes of lower-level classes.
            </p>
            <p>
                View the code inside <span class="code">site.php</span> that is printing to the output section below.
            </p>
            <h4 class="text-center">Code Output</h4>
            <p class="code">
                <?php
                    class Chef {
                        function makeChicken() {
                            echo "The chef makes chicken <br>";
                        }
                        function makeSalad() {
                            echo "The chef makes salad <br>";
                        }
                        function makeSpecialDish() {
                            echo "The chef makes bbq ribs <br>";
                        }
                    }

                    class ItalianChef extends Chef {
                        function makePasta() {
                            echo "The chef makes pasta <br>";
                        }

                        // this is called an OVERRIDE function; by using the same function name as the extended class we can override the function.
                        function makeSpecialDish() {
                            echo "The chef makes chicken parmesan <br>";
                        }
                    }

                    $chef = new Chef();
                    $chef->makeSpecialDish();

                    $italianChef = new ItalianChef();
                    $italianChef->makeSpecialDish();
                ?>
            </p>
        </section>
    </body>
</html>