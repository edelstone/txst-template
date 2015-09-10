<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Style Guide - Texas State University </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">
	
  <link rel="stylesheet" type="text/css" href="//fast.fonts.net/cssapi/959b8b5d-6e60-4d5a-bd8f-497d6e2a1825.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style-guide-main.css">

  <!-- Prisim Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prisim/prisim.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">TX STATE</span>
        <span class="sg-logo-full">TEXAS STATE UNIVERSITY</span> <em>STYLE GUIDE</em>
      </h1>
      <button type="button" class="sg-nav-toggle"><i class="fa fa-bars"></i></button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Introduction</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Introduction</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times. Add some documentation here on how to get started with your new style guide and start customizing this boilerplate to your liking.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #501214;"></div>
                <div class="sg-color-name">TX State Maroon</div>
                <div class="sg-color-value">#501214</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #6a5638;"></div>
                <div class="sg-color-name">TX State Gold</div>
                <div class="sg-color-value">#6a5638</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #363534;"></div>
                <div class="sg-color-name">Charcoal</div>
                <div class="sg-color-value">#363534</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #005481;"></div>
                <div class="sg-color-name">Dusk Blue</div>
                <div class="sg-color-value">#005481</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #8baea1;"></div>
                <div class="sg-color-name">River</div>
                <div class="sg-color-value">#8baea1</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #e8e3db;"></div>
                <div class="sg-color-name">Sandstone</div>
                <div class="sg-color-value">#e8e3db</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #deb407;"></div>
                <div class="sg-color-name">Old Gold</div>
                <div class="sg-color-value">#deb407</div>
              </div>
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style="font-family: 'Univers W01', Helvetica, Calibri, Arial, sans-serif; font-weight: 100;"> 'Univers W01', Helvetica, Calibri, Arial, sans-serif;</dd>

              <dt>Primary Font Italic:</dt>
              <dd style="font-family: 'Univers W01', Helvetica, Calibri, Arial, sans-serif; font-weight: 100; font-style: italic;"> 'Univers W01', Helvetica, Calibri, Arial, sans-serif;</dd>
              
              <dt>Primary Font Semi-Bold:</dt>
              <dd style="font-family: 'Univers W01', Helvetica, Calibri, Arial, sans-serif; font-weight: 400;"> 'Univers W01', Helvetica, Calibri, Arial, sans-serif;</dd>

              <dt>Primary Font Bold:</dt>
              <dd style="font-family: 'Univers W01', Helvetica, Calibri, Arial, sans-serif; font-weight: 700;"> 'Univers W01', Helvetica, Calibri, Arial, sans-serif;</dd>

              <dt>Secondary Font:</dt>
              <dd style="font-family: 'Adobe Garamond W01', Garamond, 'Goudy Old Style', 'Times New Roman', serif;"> 'Adobe Garamond W01', Garamond, 'Goudy Old Style', 'Times New Roman', serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prisim/prisim.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

