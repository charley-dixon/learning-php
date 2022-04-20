<h1><?php echo $title ?></h1>
<h4 class="text-center">By <?php echo $author ?></h4>
<p class="text-center">
    Word Count: 
    <?php
        echo $wordCount;
    ?>
</p>
<p>
    Here is the code that <span class="code">include</span> is injecting into this PHP file:
</p>
<p class="code" style="color:black;">
    &lt;?php<br>
        $title = "Learn PHP for Wordpress";<br>
        $author = "Charley Dixon";<br>
        $wordCount = 400;<br>
        include "include-practice.php";<br>
    ?&gt;
</p>
<p>
    In our <span class="code">include-practice.php</span> file we created an <span class="code">&lt;h1&gt;</span> with the title of this section ("Learn PHP for Wordpress"), an <span class="code">&lt;h3&gt;</span> with the author ("Charley Dixon"), and a <span class="code">&lt;p&gt;</span> with the word count. So this would be our <span class="code">post.php</span> file in WP, and then in our <span class="code">site.php</span> file we run the code block above to actually set those variables before the code in <span class="code">post.php</span> is run.
</p>