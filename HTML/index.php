<?php
  $count = 1;
  require_once("chapters.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8' />
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta name="description" content="Applied Statistics: An Introduction to Statistical Analysis. An overview of basic techniques for sound analysis and interpretation of experimental data for non-statisticians." />
  <meta name="keywords" content="Stats, Statistics, Statistical analysis, Applied statistics">
  <meta name="author" content="Chris Wetherill" />

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/stylesheet.css">
  <title>Applied Statistics</title>
  <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-51762248-1', 'chriswetherill.me');
    ga('send', 'pageview');
  </script>
</head>
<body>
  <div style ="position:fixed;width:100%;min-width:300px;height:100%;min-height:300px;opacity:0.9;filter: alpha(opacity=90);background-color:#2F353B;color:#f8f8f8;z-index:9;">
    <p style="margin: 125px auto auto auto; color:#f8f8f8; width:30%;min-width:300px;height:30%;min-height:300px;">
      Uh-oh! We've decided to hold off on working on this site until we finish with the \(\LaTeX\) version of the book. In the meanwhile, please feel free to <a href="https://github.com/faulconbridge/appliedStats/raw/master/LaTeX/book.pdf" target="_blank">check it out on GitHub.</a>
    </p>
  </div>
  <div class="content">
    <h1 class="title">Applied Statistics</h1>
    <h2 class="title">An Introduction to Statistical Analysis</h2>
    
    <p>This book is provided under the terms of the <a href="http://book.chriswetherill.me/license" target="_blank">Apache License, Version 2.0</a>. Not all datasets used throughout the book may be under this license; in such cases, the terms of use will be clearly stated on GitHub. To edit <a href="https://github.com/faulconbridge/appliedStats" target="_blank">this version</a>, you will need a <a href="https://github.com/" target="_blank">GitHub account</a>.</p>
    
    <h2>Introduction</h2>
    <hr>
    
    <?php
      for ($i = 0; $i < count($index["part1"]); $i++) {
        echo "<h3><a href=\"".$index["part1"][$chapterKeys[0][$i]]["link"]."\">".$count." &mdash; ".$chapterKeys[0][$i]."</a></h3>";
        echo "<p>".$index["part1"][$chapterKeys[0][$i]]["description"]."</p>";
        $count++;
      }
    ?>
    
    <h2>Describing Relationships and Predicting Values</h2>
    <hr>
    
    <?php
      for ($i = 0; $i < count($index["part2"]); $i++) {
        echo "<h3><a href=\"".$index["part2"][$chapterKeys[1][$i]]["link"]."\">".$count." &mdash; ".$chapterKeys[1][$i]."</a></h3>";
        echo "<p>".$index["part2"][$chapterKeys[1][$i]]["description"]."</p>";
        $count++;
      }
    ?>
    
    <h2>Comparisons Among Multiple Samples</h2>
    <hr>
    
    <?php
      for ($i = 0; $i < count($index["part3"]); $i++) {
        echo "<h3><a href=\"".$index["part3"][$chapterKeys[2][$i]]["link"]."\">".$count." &mdash; ".$chapterKeys[2][$i]."</a></h3>";
        echo "<p>".$index["part3"][$chapterKeys[2][$i]]["description"]."</p>";
        $count++;
      }
    ?>
    
    <h2>Inferences from Unusual Data Structures</h2>
    <hr>
    
    <?php
      for ($i = 0; $i < count($index["part4"]); $i++) {
        echo "<h3><a href=\"".$index["part4"][$chapterKeys[3][$i]]["link"]."\">".$count." &mdash; ".$chapterKeys[3][$i]."</a></h3>";
        echo "<p>".$index["part4"][$chapterKeys[3][$i]]["description"]."</p>";
        $count++;
      }
    ?>
    
    <h2>Supplemental Materials</h2>
    <hr>
    
    <?php
      for ($i = 0; $i < count($index["part5"]); $i++) {
        echo "<h3><a href=\"".$index["part5"][$chapterKeys[4][$i]]["link"]."\">".$count." &mdash; ".$chapterKeys[4][$i]."</a></h3>";
        echo "<p>".$index["part5"][$chapterKeys[4][$i]]["description"]."</p>";
        $count++;
      }
    ?>
    <br /><br />
  </div>
</body>
</html>