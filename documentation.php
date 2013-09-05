<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Mooi | A Beautifully Clean and Simple SCSS Framework</title>
<!-- HTML5Shiv and Respond.js -->
 <!--[if lte IE 8]>
<script src="http://www.lukehoward.me.uk/mooi/jquery/html5shiv.js"></script>
<script src="http://www.lukehoward.me.uk/mooi/jquery/respond.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/lukehoward.me.uk/35410.css" type="text/css" />
<link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/www.lukehoward.me.uk/35410.css" type="text/css" />
<link href="stylesheets/style.css" rel="stylesheet" type="text/css">

    
</head>

<body>
<?php include_once("scripts/analytics.php") ?>
<!-- Page Header -->

<header class="row">
	<div class="sixteen columns mooi-header">
    <img class="logo" src="images/mooi_logo_sml.png" width="168" height="60" alt="Mooi">
	<nav class="mooi-menu-right add-top-space">
    	<ul>
        	<li><a href="http://www.lukehoward.me.uk/mooi/">Home</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/documentation.php">Documentation</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/license.php">License</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/contact.php">Contact</a></li>
		</ul>
	</nav>        	          
    </div>
</header>    
<div class="row section">
	<div class="sixteen columns">
	<h2>Before you start</h2>
		<p>So before you start using Mooi, the first thing you need to appreciate is that Mooi uses SASS, so you are going to need a preprocessor for compiling your SASS into CSS, now personally I use <a href="http://alphapixels.com/prepros/">PrePros</a>, works on Windows and OS X, but it's down to you, however you will need one. Once you have got that sorted out, then you can start to have some fun with this framework.</p>
	
	</div>
	<div class="sixteen columns">
<h2>How to Use Mooi</h2>
        <p>To use Mooi there are a few things you need to make sure you put a few things in to any web page that you create.</p>
        
        <p>The first thing you need to include is the <code>&lt;meta name="viewport"&gt;</code>, the full example is below, this is used to ensure that the web page responds correctly to the browsers size.</p>
        
        <p class="code">
            &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"&gt;
        </p>
        
        <p>The next thing we need to include is the HTML5 Shiv and Respond, this is to make sure that HTML5 tags such as <code>&lt;header&gt;</code> work correctly in browsers that are no HTML5 compatible and so that Media Queries work in the older browsers such as Internet Explorer 8. The working example for this is below, all you need to do is make sure that this points to the html5shiv.js and respond.js on your website.</p>
          
        <p class="code">
            &lt;!-- HTML5Shiv.js &amp; Respond.js --&gt;<br />
            &lt;!--[if lte IE 8]&gt;<br />
                &lt;script type="text/javascript" src="jquery/html5shiv.js"&gt;&lt;/script&gt;<br />
                &lt;script type="text/javascript" src="jquery/respond.js"&gt;&lt;/script&gt;<br />
            &lt;![endif]--&gt;
        </p>            
        <p>The last thing we need to include is the style sheet, an example of this is below.</p>
        
        <p class="code">
            &lt;link href="stylesheets/style.css" rel="stylesheet" type="text/css"&gt;
        </p>
        <p>Once you have included those 3 items in your html/php document you are ready to get working with all of the great features that Mooi has to offer. It is recommended that you take a look at the '_vars.scss' file found in the 'stylesheets' folder, in this file you will find variables that can be changed to tweak the look and styles within Mooi.</p>
	</div>
</div>

    
<div class="row  section">
	<div class="sixteen columns">
    	<h3>The Layout</h3>
		<p>The Layout is based on Skeleton by Dave Gamache, but has been changed to work on percentages, but to still take advantage of break points to ensure a truly fluid and responsive design.</p>
        
        
    </div>
        
    <div class="sixteen columns">
        <p>The first thing you should know about the layout is that is based on sixteen columns, and everything is percentage based.</p>
        <p>Once you have set up your first web page using the instructions above, you are ready to start laying out the web page. The first thing you need to do when using the Mooi Layout is to set the maximum page width you want in the _vars.scss file, by default this is set to 1280px width. Once this is done go back to your index.html file and within the <code>body</code> tags you can start to add the required <code>div</code> tags.</p>
        
        <p>When you start out the first thing you need to do is create the row, in which the columns will be located. so you need to create a <code>div</code> with the a class of <code>row</code>, so it should look like this <code>&lt;div class="row"&gt; &lt;/div&gt;</code>.</p>
        <p>Once you have done this you can now start to add the required columns between the open and close tags for the row. so for example lets say you want four equal columns. so sixteen divided by four is four, so based on this you can now create 4 new <code>divs</code>, now each one need to have two classes set the first one states how many columns it is going to use and the width of the <code>div</code>, so in this case the first class would be <code>four</code> the second class that you need to set for this would be <code>columns</code>, this provides other information that ensures that the four <code>divs</code> will stack correctly and <code>float:left;</code>, it will also provide a level of margin to ensure that columns are not pushing against each other.</p>
        <p>So having completed the above examples you should now have something that looks like the example below.</p>
        
        
        <p class="code">
			&lt;div class="row"&gt;<br/>
            &lt;div class="four columns"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;div class="four columns"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;div class="four columns"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;div class="four columns"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;/div&gt;
        
        </p>
        
        <p>Now for our next example lets say that you want a column that spans the entire width of page, so first you will need to create your <code>&lt;div class="row"&gt;&lt;/div&gt;</code>. Then you can get to creating the column that you need so you would then create a <code>div</code> that has classes of <code>sixteen</code> for the width and <code>columns</code> to set the float and stacking on the element. So you should end up with something like below.</p>
        <p class="code">
			&lt;div class="row"&gt;<br/>
            &lt;div class="sixteen columns"&gt;<br/>
            &lt;p&gt;This is an example element&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;/div&gt;
        </p>
        
        <p>Now the next thing you might want to do is break the page width in to thirds, so you would again create your <code>&lt;div class="row"&gt;&lt;/div&gt;</code>, then you will need to create the a <code>div</code> that has two classes, the first would be <code>one-third</code> this will set the width and then you will need a class of <code>column</code>, this will provide the stacking and float for the <code>div</code>, and lets say that you want to create another div that takes up the last two thirds of the page width you would just create the following, <code>&lt;div class="two-thirds column"&gt;&lt;/div&gt;</code> this would allow you to generate a sidebar effect. So you would end up with something that looks like the example below.</p> 
        
        <p class="code">
			&lt;div class="row"&gt;<br/>
            &lt;div class="one-third column"&gt;<br/>
            &lt;p&gt;This is one third of the page's width.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;div class="two-thirds column"&gt;<br/>
            &lt;p&gt;This is two thirds of the page's width.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;/div&gt;
        
        </p>
        
        <p>it is important to not that when using number of columns that you use a class of <code>columns</code> and when using thirds your second class is <code>column</code>.</p>
        
        <p>Finally the last thing you can do is offset your columns by a number of columns, so for example if you want to offset the first example, then you could do something like below. This would still take up the full width, but would leave an empty space of four columns to the left of your first <code>div</code>, the offset can be done from one column <code>offset-by-one</code> all the way through to fifteen <code>offset-by-fifteen</code>.</p>
        
        <p class="code">
			&lt;div class="row"&gt;<br/>
            &lt;div class="four columns offset-by-four"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;div class="four columns"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;div class="four columns"&gt;<br/>
            &lt;p&gt;This is four columns wide.&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;/div&gt;
        
        </p>
        
        <p>With all the information you should now be ready to create your first layout using mooi. Just remember that you have to write the number out, for example use <code>five</code> not <code>5</code>.</p>
        
    </div>
    
  <div class="one columns example-col">One</div>
  <div class="fifteen columns example-col">Fifteen</div>
    
  <div class="two columns example-col">Two</div>
  <div class="fourteen columns example-col">Fourteen</div>
    
    <div class="three columns example-col">Three</div>
    <div class="thirteen columns example-col">Thirteen</div>
    
    <div class="four columns example-col">Four</div>
    <div class="twelve columns example-col">Twelve</div>
    
    <div class="five columns example-col">Five</div>
    <div class="eleven columns example-col">Eleven</div>
    
    <div class="six columns example-col">Six</div>
    <div class="ten columns example-col">Ten</div>
    
    <div class="seven columns example-col">Seven</div>
    <div class="nine columns example-col">Nine</div>
    
    <div class="eight columns example-col">Eight</div>
    <div class="eight columns example-col">Eight</div>
    
    <div class="nine columns example-col">Nine</div>
    <div class="seven columns example-col">Seven</div>
    
    <div class="ten columns example-col">Ten</div>
    <div class="six columns example-col">Six</div>
    
    <div class="eleven columns example-col">Eleven</div>
    <div class="five columns example-col">Five</div>
    
    <div class="twelve columns example-col">Twelve</div>
    <div class="four columns example-col">Four</div>
    
    <div class="thirteen columns example-col">Thirteen</div>
    <div class="three columns example-col">Three</div>
    
    <div class="fourteen columns example-col">Fourteen</div>
    <div class="two columns example-col">Two</div>
    
    <div class="fifteen columns example-col">Fifteen</div>
    <div class="one columns example-col">One</div>
    
  <div class="sixteen columns example-col">Sixteen</div>

    <div class="one-third column example-col">One Third</div>
    <div class="one-third column example-col">One Third</div>
    <div class="one-third column example-col">One Third</div>
    
    <div class="two-thirds column example-col">Two Thirds</div>
    <div class="one-third column example-col">One Third</div>
</div>

<div class="row section">
	<div class="sixteen columns">
    	<h2>Typography</h2>
        <p>The typography for Mooi is set up so that it is easy to read no matter what screen size. Regular font paragraphs are set to 16px with a line height of 24px (1.5rem), these can be easily changed by modifying the _vars.scss file. </p>
	</div>
    <div class="eight columns"> 
    	<h5>Heading</h5>       
        <h1>Heading &lt;h1&gt;</h1>
        <h2>Heading &lt;h2&gt;</h2>
        <h3>Heading &lt;h3&gt;</h3>
        <h4>Heading &lt;h4&gt;</h4>
        <h5>Heading &lt;h5&gt;</h5>
        <h6>Heading &lt;h6&gt;</h6>
	</div>
    <div class="eight columns">  
    	<h5>Block Quote</h5>      
        <blockquote>"I wanted Mooi to be a framework that speeded up development for me, and made my life easier when working on a site. For that reason I thought others should have access to it as well" - Luke Howard</blockquote>
        <h5>Quote</h5>
        <q>"I had great fun developing Mooi" - Luke Howard</q>
        
        <h5>Paragraph</h5>
        <p>This is an example of a default paragraph within Mooi. It is easy to modify the paragraph so that it looks the way you want.</p>
        
        <h5>Links</h5>
        <a href="">Normal Link</a><br/>
        <a href="" class="link-active">Active Link</a><br/>
        <a href="" class="link-visited">Visited Link</a>
        
	</div>
    
    <div class="sixteen columns">
    
    	<p class="code">
        &lt;h1&gt;Heading&lt;/h1&gt; <br/>
        &lt;p&gt;This is a paragraph&lt;/p&gt;<br/>
        &lt;blockquote&gt;This is a blockquote&lt;/blockquote&gt;<br/>
        &lt;q&gt;This is a quote&lt;/q&gt;
             
        
        </p>
    
    </div>
    
</div>            
   
<div class="row  section">
	<div class="sixteen columns">
    
    <h2>The Buttons</h2>
    	
        <h5>Default Button</h5>
        
        <p>To use the Mooi style buttons by adding <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <a href="#" class="mooi-button">Default Button</a>
        <button class="mooi-button">Default Button</button>
       
        
        <p class="code">
        &lt;a href="#" class="mooi-button"&gt;Default Button&lt;/a&gt;<br/>
        &lt;button class="mooi-button"&gt;Default Button&lt;/button&gt;
        </p>
        
        <h5>Disabled Button</h5>
        
        <p>To disable a button add <code>mooi-button-disabled</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <a href="#" class="mooi-button mooi-button-disabled">Disabled Button</a>
        <button class="mooi-button mooi-button-disabled">Disabled Button</button>
        
        <p class="code">
        &lt;a href="#" class="mooi-button mooi-button-disabled"&gt;Disabled Button&lt;/a&gt;<br/>
        &lt;button class="mooi-button mooi-button-disabled"&gt;Disabled Button&lt;/button&gt;
        </p>
        
        <h5>Primary Button</h5>
        
        <p>To use the primary button add <code>mooi-button-primary</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <a href="#" class="mooi-button mooi-button-primary">Primary Button</a>
        <button class="mooi-button mooi-button-primary">Primary Button</button>
        
        <p class="code">
        &lt;a href="#" class="mooi-button mooi-button-primary"&gt;Primary Button&lt;/a&gt;<br/>
        &lt;button class="mooi-button mooi-button-primary"&gt;Primary Button&lt;/button&gt;
        </p>
        
		<h5>Coloured Button</h5>
        
        <p>To use one of the coloured buttons add <code>mooi-button-red</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <button class="mooi-button mooi-button-green">Green Button</button>
        <button class="mooi-button mooi-button-red">Red Button</button>
        <button class="mooi-button mooi-button-orange">Orange Button</button>
        <button class="mooi-button mooi-button-blue">Blue Button</button>
        
        <p class="code">
        &lt;button class="mooi-button mooi-button-green"&gt;Green Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-red"&gt;Red Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-orange"&gt;Orange Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-blue"&gt;Blue Button&lt;/button&gt;
        </p>
        
        <h5>Different Sized Buttons</h5>
        
        <p>To change the size of the buttons add <code>mooi-button-small</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <button class="mooi-button mooi-button-xsmall">X-Small Button</button>
        <button class="mooi-button mooi-button-small">Small Button</button>
        <button class="mooi-button">Regular Button</button>
        <button class="mooi-button mooi-button-large">Large Button</button>
        <button class="mooi-button mooi-button-xlarge">X-Large Button</button>
        
		<p class="code">
        &lt;button class="mooi-button mooi-button-xsmall"&gt;X-Small Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-small"&gt;Small Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button"&gt;Regular Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-large"&gt;Large Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-xlarge"&gt;X-Large Button&lt;/button&gt;
        </p>
        
    </div>
</div>    

<div class="row section">
	<div class="sixteen columns">
    	<h2>Menus</h2>
        <p>In Mooi there are some basic styles set for menus and navigation, they are easy to use and implement.</p>
       	
        	<h5>Horizontal Menu</h5>
            <ul class="mooi-menu-horizontal">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            
            <h5>Vertical Menu</h5>
            <ul class="mooi-menu-vertical mooi-responsive-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            
            <h5>Blocked Menu</h5>
            <ul class="mooi-menu-blocked mooi-responsive-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            
            <!-- <h5>Responsive Menu</h5>
            <div>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>  -->
        
            
	
    </div>

</div>


<div class="row  section">
	<div class="sixteen columns">
    	<h2>Forms</h2>
        
        <p>Mooi comes with some pre styled forms that you can use in your designs, they are easy to work with and you can get up and running straight away.</p>
        <p>To use the Mooi Forms, the first thing you need to do is give your <code>&lt;form&gt;</code> a class of <code>mooi-form</code>, then you will need to set certain variables in the _vars.scss file.</p>
        
        <h6>Simple Inline Form</h6>
        <p>If you just want a simple inline form like the one below all you have to do is add a second class to your <code>&lt;form&gt;</code> of <code>mooi-form-inline</code>.
        <form class="mooi-form mooi-form-inline">
        <input type="text" placeholder="User Name" />
       	<input type="password" placeholder="Password" />
        <label><input type="checkbox"> Remember Me</label>
        <input type="button" class="mooi-button mooi-button-primary" value="Login" />
        </form>
        
        <p class="code">
        &lt;form class="mooi-form mooi-form-inline"&gt;<br />
        &lt;input type="text" placeholder="User Name" /&gt;<br />
       	&lt;input type="password" placeholder="Password" /&gt;<br />
        &lt;label&gt;&lt;input type="checkbox"&gt; Remember Me&lt;/label&gt;<br />
        &lt;input type="button" class="mooi-button mooi-button-primary" value="Login" /&gt;<br />
        &lt;/form&gt;
        </p>
        
        
       
        <h6>Column Form</h6>
        <p>If you just want a form with everything stacked on top of each other like the one below all you have to do is add a second class to your <code>&lt;form&gt;</code> of <code>mooi-form-column</code>.
        <form class="mooi-form mooi-form-column">
        <label>User Name</label>
        <input type="text" placeholder="User Name" />
        <label>Password</label>
       	<input type="password" placeholder="Password" />
        <label><input type="checkbox"> Remember Me</label>
        <input type="button" class="mooi-button mooi-button-primary" value="Login" />
        </form>    
        
        <p class="code">
        &lt;form class="mooi-form mooi-form-column"&gt;<br />
        &lt;input type="text" placeholder="User Name" /&gt;<br />
       	&lt;input type="password" placeholder="Password" /&gt;<br />
        &lt;label&gt;&lt;input type="checkbox"&gt; Remember Me&lt;/label&gt;<br />
        &lt;input type="button" class="mooi-button mooi-button-primary" value="Login" /&gt;<br />
        &lt;/form&gt;
        </p>
        
       
        
        
        
        
        
        
        <h6>Aligned Form</h6>
        <p>If you are after a form where the label is aligned with the input like the one below then you will need to add a second class to your <code>&lt;form&gt;</code> of <code>mooi-form-aligned</code>.
        <form class="mooi-form mooi-form-aligned">
        <div>
        <label>First Name</label>
        <input type="text" placeholder="First Name" />
        </div>
        <div>
        <label>Last Name</label>
        <input type="text" placeholder="Last Name" />
        </div>
        <div>
        <label>Email</label>
        <input type="text" placeholder="Email" />
        </div>
        <div>
        <label>Confirm Email</label>
        <input type="text" placeholder="Confirm Email" />
        </div>
        <div>
        <label>Password</label>
       	<input type="password" placeholder="Password" />
        </div>
        <div>
        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm Password" />
        </div>
        <div class="mooi-form-aligned-right">
        <label class="mooi-form-aligned-checkbox"><input type="checkbox"> I agree to the Terms</label>
        </div>
        <div class="mooi-form-aligned-right">
        <input type="button" class="mooi-button mooi-button-primary" value="Login" />
        </div>
        </form>
        
        
        <p class="code">
        
        &lt;form class="mooi-form mooi-form-aligned"&gt;<br />
        &lt;div&gt;<br />
        &lt;label&gt;First Name&lt;/label&gt;<br />
        &lt;input type="text" placeholder="First Name" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;div&gt;<br />
        &lt;label&gt;Last Name&lt;/label&gt;<br />
        &lt;input type="text" placeholder="Last Name" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;div&gt;<br />
        &lt;label&gt;Email&lt;/label&gt;<br />
        &lt;input type="text" placeholder="Email" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;div&gt;<br />
        &lt;label&gt;Confirm Email&lt;/label&gt;<br />
        &lt;input type="text" placeholder="Confirm Email" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;div&gt;<br />
        &lt;label&gt;Password&lt;/label&gt;<br />
       	&lt;input type="password" placeholder="Password" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;div&gt;<br />
        &lt;label&gt;Confirm Password&lt;/label&gt;<br />
        &lt;input type="password" placeholder="Confirm Password" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;div class="mooi-form-aligned-right"&gt;<br />
        &lt;label class="mooi-form-aligned-checkbox"&gt;&lt;input type="checkbox"&gt; I agree to the Terms&lt;/label&gt;<br />
        &lt;/div&gt;<br />
        &lt;div class="mooi-form-aligned-right"&gt;<br />
        &lt;input type="button" class="mooi-button mooi-button-primary" value="Login" /&gt;<br />
        &lt;/div&gt;<br />
        &lt;/form&gt;<br />
        
        </p>
            
       
        
    </div>
</div>

<div class="row section">
	<div class="sixteen columns">
    <h2>Tables</h2>
    
    <p>Mooi comes with a small selection of table styles as well as a solution for Responsive tables.</p>
    
    
    
    <h5>Regular Table</h5>
    
    <p>To use the default Mooi table all you have to do is add the class <code>mooi-table</code> to any <code>&lt;table&gt;</code> element.</p>
    
    <table class="mooi-table">
    	<tr><th>User ID</th><th>First Name</th><th>Last Name</th></tr>
        <tr><td>1</td><td>Jane</td><td>Richards</td></tr>
        <tr><td>2</td><td>Joe</td><td>Smith</td></tr>
        <tr><td>3</td><td>Jack</td><td>Jones</td></tr>
    </table>        
	
    <p class="code">
    	&lt;table class="mooi-table"&gt; <br/>
    	&lt;tr&gt;&lt;th&gt;User ID&lt;/th&gt; &lt;th&gt;First Name&lt;/th&gt; &lt;th&gt;Last Name&lt;/th&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;1&lt;/td&gt; &lt;td&gt;Jane&lt;/td&gt; &lt;td&gt;Richards&lt;/td&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;2&lt;/td&gt; &lt;td&gt;Joe&lt;/td&gt; &lt;td&gt;Smith&lt;/td&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;3&lt;/td&gt; &lt;td&gt;Jack&lt;/td&gt; &lt;td&gt;Jones&lt;/td&gt; &lt;/tr&gt;<br/>
    &lt;/table&gt;
	</p>   
   
   <h5>Table with all borders</h5>
   
   <p>To have a table with all borders you need to add a class of <code>mooi-table-borders-all</code> after <code>mooi-table</code> to any <code>&lt;table&gt;</code> element.</p>
   
	<table class="mooi-table mooi-table-borders-all">
    	<tr><th>User ID</th><th>First Name</th><th>Last Name</th></tr>
        <tr><td>1</td><td>Jane</td><td>Richards</td></tr>
        <tr><td>2</td><td>Joe</td><td>Smith</td></tr>
        <tr><td>3</td><td>Jack</td><td>Jones</td></tr>
    </table>
    
    <p class="code">
    	&lt;table class="mooi-table mooi-table-borders-all"&gt; <br/>
    	&lt;tr&gt;&lt;th&gt;User ID&lt;/th&gt; &lt;th&gt;First Name&lt;/th&gt; &lt;th&gt;Last Name&lt;/th&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;1&lt;/td&gt; &lt;td&gt;Jane&lt;/td&gt; &lt;td&gt;Richards&lt;/td&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;2&lt;/td&gt; &lt;td&gt;Joe&lt;/td&gt; &lt;td&gt;Smith&lt;/td&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;3&lt;/td&gt; &lt;td&gt;Jack&lt;/td&gt; &lt;td&gt;Jones&lt;/td&gt; &lt;/tr&gt;<br/>
    &lt;/table&gt;
	</p> 
    
    <h5>Tables with horizontal borders</h5>
    
    <p>To have a table with all borders you need to add a class of <code>mooi-table-borders-horizontal</code> after <code>mooi-table</code> to any <code>&lt;table&gt;</code> element.</p>
    
    <table class="mooi-table mooi-table-borders-horizontal">
    	<tr><th>User ID</th><th>First Name</th><th>Last Name</th></tr>
        <tr><td>1</td><td>Jane</td><td>Richards</td></tr>
        <tr><td>2</td><td>Joe</td><td>Smith</td></tr>
        <tr><td>3</td><td>Jack</td><td>Jones</td></tr>
    </table>
    
    <p class="code">
    	&lt;table class="mooi-table mooi-table-borders-horizontal"&gt; <br/>
    	&lt;tr&gt;&lt;th&gt;User ID&lt;/th&gt; &lt;th&gt;First Name&lt;/th&gt; &lt;th&gt;Last Name&lt;/th&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;1&lt;/td&gt; &lt;td&gt;Jane&lt;/td&gt; &lt;td&gt;Richards&lt;/td&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;2&lt;/td&gt; &lt;td&gt;Joe&lt;/td&gt; &lt;td&gt;Smith&lt;/td&gt; &lt;/tr&gt;<br/>
        &lt;tr&gt;&lt;td&gt;3&lt;/td&gt; &lt;td&gt;Jack&lt;/td&gt; &lt;td&gt;Jones&lt;/td&gt; &lt;/tr&gt;<br/>
    	&lt;/table&gt;
	</p> 
    
    <h5>Table with striped data rows</h5>
    
    <p>To apply striped rows to a table, there are two ways to do it.</p>
    <p>If you just need to work with modern browsers then just add a class of <code>mooi-table-zebra</code> after <code>mooi-table</code> to any <code>&lt;table&gt;</code> element.</p>
    <p>However if you have to support older browsers then you will need to give every other <code>&lt;tr&gt;</code> element a class of <code>mooi-table-odd</code> this will work in both the older browsers as well as the modern ones.</p>
    
    <h6>Modern Browsers</h6>
    <table class="mooi-table mooi-table-zebra">
    	<tr><th>User ID</th><th>First Name</th><th>Last Name</th></tr>
        <tr><td>1</td><td>Jane</td><td>Richards</td></tr>
        <tr><td>2</td><td>Joe</td><td>Smith</td></tr>
        <tr><td>3</td><td>Jack</td><td>Jones</td></tr>
        <tr><td>4</td><td>Joanne</td><td>Taylor</td></tr>
        <tr><td>5</td><td>Jimmy</td><td>Brown</td></tr>
        <tr><td>6</td><td>Jenny</td><td>Wilson</td></tr>
	</table>
    
    <p class="code">
    	&lt;table class="mooi-table mooi-table-zebra"&gt;<br/>
            &lt;tr&gt;&lt;th&gt;User ID&lt;/th&gt;  &lt;th&gt;First Name&lt;/th&gt;  &lt;th&gt;Last Name&lt;/th&gt;  &lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;1&lt;/td&gt; &lt;td&gt;Jane&lt;/td&gt; &lt;td&gt;Richards&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;2&lt;/td&gt; &lt;td&gt;Joe&lt;/td&gt; &lt;td&gt;Smith&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;3&lt;/td&gt; &lt;td&gt;Jack&lt;/td&gt; &lt;td&gt;Jones&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;4&lt;/td&gt; &lt;td&gt;Joanne&lt;/td&gt; &lt;td&gt;Taylor&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;5&lt;/td&gt; &lt;td&gt;Jimmy&lt;/td&gt; &lt;td&gt;Brown&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;6&lt;/td&gt; &lt;td&gt;Jenny&lt;/td&gt; &lt;td&gt;Wilson&lt;/td&gt;&lt;/tr&gt;<br/>
		&lt;/table&gt;    
    </p>
    <h6>Older Browsers</h6>
    <table class="mooi-table">
    	<tr><th>User ID</th><th>First Name</th><th>Last Name</th></tr>
        <tr><td>1</td><td>Jane</td><td>Richards</td></tr>
        <tr class="mooi-table-odd"><td>2</td><td>Joe</td><td>Smith</td></tr>
        <tr><td>3</td><td>Jack</td><td>Jones</td></tr>
        <tr class="mooi-table-odd"><td>4</td><td>Joanne</td><td>Taylor</td></tr>
        <tr><td>5</td><td>Jimmy</td><td>Brown</td></tr>
        <tr class="mooi-table-odd"><td>6</td><td>Jenny</td><td>Wilson</td></tr>
	</table>
    
    <p class="code">
    	&lt;table class="mooi-table"&gt;<br/>
            &lt;tr&gt;&lt;th&gt;User ID&lt;/th&gt; &lt;th&gt;First Name&lt;/th&gt; &lt;th&gt;Last Name&lt;/th&gt; &lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;1&lt;/td&gt; &lt;td&gt;Jane&lt;/td&gt; &lt;td&gt;Richards&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr class="mooi-table-odd"&gt;&lt;td&gt;2&lt;/td&gt; &lt;td&gt;Joe&lt;/td&gt; &lt;td&gt;Smith&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;3&lt;/td&gt; &lt;td&gt;Jack&lt;/td&gt; &lt;td&gt;Jones&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr class="mooi-table-odd"&gt;&lt;td&gt;4&lt;/td&gt; &lt;td&gt;Joanne&lt;/td&gt; &lt;td&gt;Taylor&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td&gt;5&lt;/td&gt; &lt;td&gt;Jimmy&lt;/td&gt; &lt;td&gt;Brown&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr class="mooi-table-odd"&gt;&lt;td&gt;6&lt;/td&gt; &lt;td&gt;Jenny&lt;/td&gt; &lt;td&gt;Wilson&lt;/td&gt; &lt;/tr&gt;<br/>
		&lt;/table&gt;
	</p>
    
    <h5>Responsive Tables</h5>
    
    <p>If you need a responsive table a simple solution has been provided that will support up to forty columns. When the viewable width is reduced, the rows become grouped and stacked as shown below.</p>
    <p>To have a responsive table you need to add a class of <code>mooi-responsive-table</code> after <code>mooi-table</code> to any <code>&lt;table&gt;</code> element.</p>
    <p>When creating the table you will need to give every <code>&lt;td&gt;</code> an additional value of <code>data-value="Name"</code> where name equates to the same value as the <code>&lt;td&gt;</code> element it is applied to, the example below demonstrates this.</p>
    
    <table class="mooi-table mooi-responsive-table">
    	<tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Department</th><th>Start Year</th></tr>
    	<tr><td data-value="User ID">1</td><td data-value="First Name">Jane</td><td data-value="Last Name">Richards</td><td data-value="Department">Sales</td><td data-value="Start Year">2005</td></tr>
        <tr><td data-value="User ID">2</td><td data-value="First Name">Joe</td><td data-value="Last Name">Smith</td><td data-value="Department">Accounts</td><td data-value="Start Year">2007</td></tr>
        <tr><td data-value="User ID">3</td><td data-value="First Name">Jack</td><td data-value="Last Name">Jones</td><td data-value="Department">Shipping</td><td data-value="Start Year">2010</td></tr>
        <tr><td data-value="User ID">4</td><td data-value="First Name">Joanne</td><td data-value="Last Name">Taylor</td><td data-value="Department">Administration</td><td data-value="Start Year">2008</td></tr>
        <tr><td data-value="User ID">5</td><td data-value="First Name">Jimmy</td><td data-value="Last Name">Brown</td><td data-value="Department">Sales</td><td data-value="Start Year">2003</td></tr>
        <tr><td data-value="User ID">6</td><td data-value="First Name">Jenny</td><td data-value="Last Name">Wilson</td><td data-value="Department">IT</td><td data-value="Start Year">2011</td></tr>
	</table>        
    
    <p class="code">
    	&lt;table class="mooi-table mooi-responsive-table"&gt;<br/>
            &lt;tr&gt;&lt;th&gt;User ID&lt;/th&gt; &lt;th&gt;First Name&lt;/th&gt; &lt;th&gt;Last Name&lt;/th&gt; &lt;th&gt;Department&lt;/th&gt; &lt;th&gt;Start Year&lt;/th&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td data-value="User ID"&gt;1&lt;/td&gt; &lt;td data-value="First Name"&gt;Jane&lt;/td&gt; &lt;td data-value="Last Name"&gt;Richards&lt;/td&gt; &lt;td data-value="Department "&gt;Sales&lt;/td&gt; &lt;td data-value="Start Year"&gt;2005&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td data-value="User ID"&gt;2&lt;/td&gt; &lt;td data-value="First Name"&gt;Joe&lt;/td&gt; &lt;td data-value="Last Name"&gt;Smith&lt;/td&gt; &lt;td data-value="Department "&gt;Accounts&lt;/td&gt; &lt;td data-value="Start Year"&gt;2007&lt;/td&gt; &lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td data-value="User ID"&gt;3&lt;/td&gt;&lt;td data-value="First Name"&gt;Jack&lt;/td&gt;&lt;td data-value="Last Name"&gt;Jones&lt;/td&gt;&lt;td data-value="Department "&gt;Shipping&lt;/td&gt;&lt;td data-value="Start Year"&gt;2010&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td data-value="User ID"&gt;4&lt;/td&gt;&lt;td data-value="First Name"&gt;Joanne&lt;/td&gt;&lt;td data-value="Last Name"&gt;Taylor&lt;/td&gt;&lt;td data-value="Department "&gt;Administration&lt;/td&gt;&lt;td data-value="Start Year"&gt;2008&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td data-value="User ID"&gt;5&lt;/td&gt;&lt;td data-value="First Name"&gt;Jimmy&lt;/td&gt;&lt;td data-value="Last Name"&gt;Brown&lt;/td&gt;&lt;td data-value="Department "&gt;Sales&lt;/td&gt;&lt;td data-value="Start Year"&gt;2003&lt;/td&gt;&lt;/tr&gt;<br/>
            &lt;tr&gt;&lt;td data-value="User ID"&gt;6&lt;/td&gt;&lt;td data-value="First Name"&gt;Jenny&lt;/td&gt;&lt;td data-value="Last Name"&gt;Wilson&lt;/td&gt;&lt;td data-value="Department "&gt;IT&lt;/td&gt;&lt;td data-value="Start Year"&gt;2011&lt;/td&gt;&lt;/tr&gt;<br/>
		&lt;/table&gt;        
    </p>
    
    
    </div>
</div>    


<footer class="row">
    <div class="one-third column">
    	<p>&copy; Copyright 2013. Luke Howard. All Rights Reserved.</p>
    </div>
    <div class="one-third column">
    
    </div>
    <div class="one-third column">
    
    </div>
</footer>

</body>
</html>