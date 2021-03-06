<?php
  $part = "part1";
  $title = "Introduction to R";
  require_once("../header.php");
?> 
    <h2>Getting Started</h2>
    <hr>
    
    <h3>Installing R, RStudio</h3>
    <p>Although this software isn't required, we do recommend that you use R. It's what we will be using to carry out analyses in all of our examples and what we will use to analyze data in the end-of-chapter exercises. Although there won't be any major differences using other statistical software, occasionally you may obtain different results than we do.</p>
    
    <p>To install R, select any of <a href="http://cran.r-project.org/mirrors.html" target="_blank">the available download mirrors</a> from its website. Select the version that is appropriate for your operating system&mdash;Windows, Mac OS, or a Linux distribution. You may also wish <a href="http://www.rstudio.com" target="_blank">to install RStudio</a>. You will be fine if you don't install it; however, it pretties up R's graphical interface and makes working with data a bit easier for newcomers to the software. To use RStudio, you <strong>must</strong> have R installed on your computer already: installing RStudio <strong>does not</strong> also install R.</p>
    
    <h3>Reading in Data</h3>
    <p>There are two strategies used for reading in data: the command line or RStudio's graphical interface. To load data via the command line, we will type a command such as:</p>
    <pre class="brush: r">
# Here, myData is what we will name our data once we load it.
# We use the function read.csv to tell R to load our data
# from the path specified. If you aren't sure where your
# working directory is, type the function getwd()
# and hit Enter.

myData <- read.csv("/Path/to/File.csv", headers=TRUE)
    </pre>
    
    <p>Alternately, in RStudio's Environment tab, we can click the Import Dataset button and choose a local file or web URL to read our data from.</p>
    
    <p>Whichever option you choose, be sure to use a .txt, .dat, .csv, or similar file: R can't read many proprietary file formats (E.g., Excel's .xslx; SPSS .sav; etc.). Usually, whatever program you use to manage your data will have an option to allow you to save to CSV that you can access through the File -> Save As menu.</p>
    
    <h3>Creating a Script</h3>
    <p>Working in R, there are two ways that you can execute commands: through the console and through a script. The console is what first opens when you start R. It will usually contain some text like:</p>
    
    <pre class="brush: r">
R version 3.1.0 (2014-04-10) -- "Spring Dance"
Copyright (C) 2014 The R Foundation for Statistical Computing
Platform: x86_64-apple-darwin13.1.0 (64-bit)

R is free software and comes with ABSOLUTELY NO WARRANTY.
You are welcome to redistribute it under certain conditions.
Type 'license()' or 'licence()' for distribution details.
    </pre>
    
    <p>When you're working in the console, all you have to do is type in your command and hit Enter; the code will be automatically evaluated. Alternately, however, you can use a script by clicking File -> New File -> R Script. This allows you to write multiple lines of R code at once and then selectively run them by holding Ctrl/Cmd + Enter (depending on whether you are using a Mac or PC keyboard). By default, this will execute whatever line is currently selected by your pointer; however, you can also highlight multiple lines, hit Ctrl/Cmd + Enter, and evaluate everything highlighted at once.</p>
    
    <p>We will generally recommend using an R script as this can be saved and referenced later. It also makes it easier to go back and rerun old code or to reference old work. (Opposed to the console, where you have a much more limited history.)</p>
    <br />
    
    <h2>Basic R Syntax</h2>
    <hr>
    
    <h3>Constants</h3>
    <p>Constants are just what they sound like: things. They don't do anything; they can't take in one number and spit out another; they're just static objects. This can mean a number or a string of text, or something more complex like a vector, matrix, or data frame. So let's first define the different data types that R supports. (NOTE: throughout the rest of the book, we will use the term data type rather than constant.)</p>
    
    <h4>Vectors</h4>
    <p>A vector, in this case, you can think of as being a column of data in Excel. It's just a series of items that are all stored in one object. For instance, let's say that we want a column of numbers from 1 through 10:</p>
    <pre class="brush: r">
myNumbers <- c(seq(from=1, to=10, by=1))
moreNumbers <- c(1,2,3,4,5,6,7,8,9,10)
    </pre>
    
    <p>In both of the above examples, we create a column of data with the numbers 1 through 10. But these don't have to only be numeric. For instance:</p>
    
    <pre class="brush: r">
characters <- c("one","two","three","four","five") # a character vector
boolean <- c(TRUE, FALSE, FALSE, FALSE, TRUE)      # a boolean (logical) vector
    </pre>
    
    <p>We can see that there are three basic types of vectors you can construct: numeric; character; and logical. Numeric vectors are composed of arabic numerals; character vectors of strings of text; and logical vectors of TRUE/FALSE booleans.</p>
    
    <h4>Matrices</h4>
    <p>You can think of a matrix in R as either (1) a single vector split up into multiple rows/columns or (2) multiple vectors of the same length piled up next to one another. It's roughly analogous to a spreadsheet. However, the one caveat is that, just like with vectors, all elements in a matrix must have the same type (i.e., all numeric, all character, or all logical). There's no mixing and matching here. The basic syntax for creating a matrix is:</p>
    
    <pre class="brush: r">
myMatrix <- matrix(vector, nrow=r, ncol=c, byrow=FALSE, 
  	 dimnames=list(c("rownames"), c("colnames"))
    </pre>
    
    <p>Here, vector is a vector of elements that you would like to divide into rows and columns; nrow and ncol respectively refer to the number of rows and columns in your matrix; byrow takes a TRUE/FALSE boolean and indicates whether the matrix should be filled in by rows (TRUE) or by columns (FALSE). Finally, dimnames is an optional argument that specifies the column and row names.</p>
    
    <p>As an example, let's create a 4x3 matrix:</p>
    
    <pre class="brush: r">
matrixVector <- c(21, 5.9, 147,
                  28, 5.7, 168,
                  18, 5.5, 126,
                  24, 6.1, 195)
myMatrix <- matrix(matrixVector, nrow=4, ncol=3, byrow=TRUE,
                   dimnames=list(c("Chris", "John", "Amy", "Max"),
                   c("Age", "Height", "Weight")))
    </pre>
    
    <p>This will result in a matrix that looks like this:</p>
    
    <pre class="brush: r">
      Age   Height   Weight
Chris  21      5.9      147
 John  28      5.7      168
  Amy  18      5.5      126
  Max  24      6.1      195
    </pre>
    
    <h4>Data Frames</h4>
    
    <p>A data frame in R is a generalized instance of a matrix: this you can truly think of as a page of an Excel spreadsheet. Each column represents a vector of a single type; however, each column can be of a different data type. So, for instance, if we wanted to turn the matrix above into a data frame but also add in a column for hair color, we would do something like:</p>
    
    <pre class="brush: r">
name <- c("Chris", "John", "Amy", "Max")
age <- c(21, 28, 18, 24)
height <- c(5.9, 5.7, 5.5, 6.1)
weight <- c(147, 168, 126, 195)
hair <- c("brown", "blonde", "red", "brown")

myData <- data.frame(name, age, height, weight, hair)
colnames(myData) <- c("name", "age", "height", "weight", "hair")
    </pre>
    
    <p>Just like the matrix, this will give us the following:</p>
    
    <pre class="brush: r">
 Name   Age   Height   Weight     Hair
Chris    21      5.9      147    brown
 John    28      5.7      168   blonde
  Amy    18      5.5      126      red
  Max    24      6.1      195    brown
    </pre>
    
    <h4>Factors</h4>
    <p>Oftentimes in experiments we will have factors: nominal variables that indicate levels. For example, we might have a placebo group and an experimental group. In this case, these are important variables for R to properly interpret; however, they are non-numeric and don't make sense to interpret as a string. In these cases, we can indicate to R that they should be interpreted as factors. For example:</p>
    
    <pre class="brush: r">
# The variable "drugCondition" contains 20 experimental trials
# and 20 control trials. Currently, these values are stored
# as characters. You can check this by running str(drugCondition)
# You should see "chr" indicating the elements are characters

drugCondition <- c(rep("experimental",20), rep("control",20))

# We will now convert the elements to factors.
# If you run str(drugCondition) again, you should see:
# Factor w/ 2 levels "control","experimental"

drugCondition <- factor(drugCondition)
    </pre>
    <br />
    
    <h2>Manipulating Data</h2>
    <p>We won't go into detail about manipulating data here: rather, we will discuss it as needed throughout subsequent chapters as it becomes relevant to constructing graphical representations of our data and running statistical analyses.</p>
    <br />
    
    <h2></h2>
    
    <h2>Exercises</h2>
    <hr>
    
    <ol class="exercises">
      <li>Download a data file from the web. To do this, you'll want to use the code:
      <pre class="brush: r">
download.file(
    "https://raw.githubusercontent.com/faulconbridge/appliedStats/master/part1/data/introToREx01.csv",
    "sampleData.csv", "wget", extra="--no-check-certificate")
      </pre>
      Paste that into the R console and hit enter. If it's successful, you should see something similar to <code>2014-05-30 20:12:15 (172 KB/s) - 'sampleData.csv' saved [8528/8528]</code>.
      </li>
      <li>Now we will assign the data to an object. This makes it easier to work with once we start plotting it and running analyses on the data. To do this, run the command: <code>myData <- read.csv("sampleData.csv",header=TRUE,sep=",") </code>. To see if you did this correctly, run the command head(myData). If you don't get an error, then you're good to go.</li>
      <li>Finally, we will load a file from the desktop. <a href="https://raw.githubusercontent.com/faulconbridge/appliedStats/master/part1/data/introToREx01.csv">Click here to download the data.</a> Save it to your desktop. Now, in RStudio, click Import Dataset, select the file, make sure that you choose Yes for the Heading option, and import it.</li>
      <li>Next we will practice working with different data structures in R. Run <code>head(myData)</code>; describe what the function does. What about <code>colnames(myData)?</code></li>
      <li>Make a vector called <code>myVector</code> containing the numbers 20 through 30.</li>
      <li>Now make a matrix with two rows and five columns called <code>myMatrix</code> that uses the vector you made in the previous problem.</li>
      <li>Run the following code:
      <pre class="brush: r">
sex <- c(rep("male",5),rep("female",5)
age <- c(sample(1:100,10,replace=TRUE))
weight <- c(sample(95:200,10,replace=TRUE))
      </pre>
      And now combine the three vectors above with myVector to create a data frame called <code>myDataFrame</code>.</li>
      <li>Almost there! Finally, convert the column <code>sex</code> into a factor. (HINT: to reference a single column of a data frame, try <code>myDataFrame$sex</code>.)</li>
    </ol>
    <br />
    
    <h2>Additional Resources</h2>
    <hr>
    
    <p>For a more complete tutorial on using R, we would recommend:</p>
    <ul>
      <li><a href="https://www.youtube.com/playlist?list=PLOU2XLYxmsIK9qQfztXeybpHvru-TrqAP" target="_blank">Intro to R</a> by Google Developers (YouTube)</li>
      <li><a href="https://www.coursera.org/specialization/jhudatascience/1/courses" target="_blank">Data Science</a> by Johns Hopkins University (Coursera)</li>
      <li><a href="http://cran.r-project.org/doc/manuals/R-intro.html" target="_blank">An Introduction to R</a> by The R Project (CRAN)</li>
      <li><a href="http://statistics.ats.ucla.edu/stat/r/" target="_blank">R Resources</a> by IDRE (UCLA)</li>
    </ul>
    
<?php
  require_once("../footer.php");
?>