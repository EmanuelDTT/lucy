<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>./CSS/Stylo.css">
    <title>LUCY</title>
</head>

<body>

    <!-- <div class="hear">
        <section class="textos-headers">
            <h1 class="title">
                <span>Hi, Soy lucy</span>
                <span>tu asistente</span>
                <span>virtual</span>
            </h1>

         
        </section>
        

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 501.69,38.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"></path>
            </svg></div>
    </div> -->
    <br>

    <!-- esta parte de aqui es el menu  -->
<div class="desa"> 
    <nav class="toc">
  <ul>
    <li><a href="#intro">Intro</a></li>
    <li>
      <a href="#dev"> Desarrollo</a>
      <ul>
        <li><a href="#dev-edit-html">Edit HTML</a></li>
        <li><a href="#dev-element-classes">Element Classes</a></li>
        <li><a href="#dev-slide-classes">Slide Classes</a></li>
        <li><a href="#dev-export-html">Export HTML</a></li>
      </ul>
    </li>
    <li>
      <a href="#css">CSS Editor</a>
      <ul>
        <li><a href="#css-fonts">Custom Fonts</a></li>
        <li><a href="#css-developer-mode">Developer Mode</a></li>
        <li><a href="#css-examples">Examples</a></li>
      </ul>
    </li>
  </ul>
  <svg class="toc-marker" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
    <path stroke="#444" stroke-width="3" fill="transparent" stroke-dasharray="0, 0, 0, 1000" stroke-linecap="round" stroke-linejoin="round" transform="translate(-0.5, -0.5)" />
  </svg>
</nav>


<article class="contents">
  <section id="intro">
    <h2>OverView</h2>
    <p>
    Bienvenido a la documentación de desarrollo de Lucy, nuestro increíble asistente virtual! En esta sección,
    encontrarás una detallada guía que te sumergirá en el emocionante mundo del desarrollo detrás de Lucy.
    </p>
    <p>
     El resto del contenido lo puedes encontrar en <a href="/Lucy/public/inicio" target="_top">Lucy.com/desarrollo</a>. 
     Donde podras probar a lucy en su totalidad.
    </p>
    <p>
      Created by Hakim El Hattab | <a href="http://hakim.se" target="_top">hakim.se</a> | 
      <a href="https://twitter.com/hakimel" target="_top">@hakimel</a>
    </p>
    <h2>Slides for Developers</h2>
    <p>
      We strive to make Slides a great and flexible tool for developers. Presentations created on Slides are HTML 
      documents under the hood, so generally anything that HTML can do, Slides can do. We make it easy to access and edit the underlying HTML 
      and CSS through the <a href="#dev">Developer Mode</a>.
    </p>
    <p>
      There's also an API for creating new presentations with preset content and we're aiming to add additional APIs in the future.
    </p>
  </section>

  <section>
    <div id="dev">
      <h2>Developer Mode</h2>
      <p>
        The Slides editor has a developer mode which is useful if you know a bit of HTML and CSS. With this mode active you will be able to modify the underlying HTML of your deck, allowing you to make adjustments that the Slides editor does not provide interface options for.
      </p>
      <p>
        To enable the developer mode open the editor settings in the bottom left corner:
      </p>
      <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-developer-mode-1.png">
    </div>

    <div id="dev-edit-html">
      <h3>Editing HTML</h3>
      <p>
        The per-slide HTML editor can be accessed from the slide options area. It gives you raw access to the current slide's HTML, allowing you to change anything you like. Note that some elements, such as &lt;script&gt; and &lt;link&gt;, are not allowed for security reasons.﻿
      </p>

      <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-developer-mode-2.png">
    </div>

    <div id="dev-element-classes">
      <h3>Element Classes <a href="/pricing" class="header-secondary-text">(Requires Pro)</a></h3>
      <p>
        As a paying Slides customer you have access to the <a href="#css">CSS editor</a> which allows you to add custom styles to your deck. By turning on the developer mode a new "class name" field will appear for any block that you focus. This allows you to easily target a specific element with your CSS.
      </p>
      <p>
        Here's an example that defines an "upside-down" class using custom CSS and applies it to a text block.
      </p>
      <pre class="code-block" data-highlight-theme="github-gist"><code class="hljs css">.upside-down {
    transform: scale( 1, -1 );
}</code></pre>

      <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-developer-mode-3.png">
    </div>

    <div id="dev-slide-classes">
      <h3>Slide Classes <a href="/pricing" class="header-secondary-text">(Requires Pro)</a></h3>
      <p>
        Just like you can add custom classes to individual elements it's also possible to add custom classes at the slide level. This can used to apply broader changes to the whole slide like inverting text and icon colors or changing the slide transition.
      </p>
      <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-developer-mode-4.png">
      <p>
        Under the hood the slide background element is separate from the slide itself. Here are two examples showing how you'd target the slide contents or slide background using a custom class called "night-sky":
      </p>

      <pre class="code-block" data-highlight-theme="github-gist"><code class="hljs css">// Targets the slide contents
.slides .night-sky svg path {
    fill: yellow;
}

// Target the slide background
.backgrounds .night-sky {
    background: linear-gradient(0deg, #141528, #0b1bb2);
}</code></pre>

      <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-developer-mode-5.png">
    </div>

    <div id="dev-export-html">
      <h3>Export HTML</h3>
      <p>
        You can access the complete HTML for all slides in your deck ﻿inside of the export panel, under "Export to reveal.js"﻿. This provides a way of exporting your deck markup and the core Slides styles to reveal.js. There are a few limitations with exporting this way but it should provide a good starting point.
      </p>

      <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-developer-mode-6.png">
    </div>

  </section>

  <section>
    <div id="css">
      <h2>CSS Editor <a href="/pricing" class="header-secondary-text">(Requires Pro)</a></h2>
      <p>
        The CSS editor lets you author custom styles for your presentation with a real-time preview of the result. It's available as an option inside of the Style panel of the presentation editor.
      </p>
      <p>
        The editor preprocesses styles using <a href="http://lesscss.org/">LESS</a>, though you're free to write plain CSS as well. We apply the styles in real-time as you type so there's no need to leave the editor or even press a refresh button to see what you're getting. Note that when your styles are saved they will be automatically wrapped in a ".reveal {}" selector to avoid conflicts with other page styles.
      </p>
    </div>
    <div id="css-fonts">
      <h3>Custom Fonts</h3>
      <p>
        You can load custom fonts from Typekit and Google fonts and apply them using custom CSS. <a href="http://help.slides.com/knowledgebase/articles/1077976-custom-fonts-pro">Find out more</a>.
      </p>
    </div>
    <div id="css-developer-mode">
      <h3>Developer Mode</h3>
      <p>
        If you turn on the <a href="#dev">developer mode</a> you can also add custom classes to any focused element. This is a convenient way to easily apply your CSS to specific elements.
      </p>
    </div>

    <div id="css-examples">
      <h3>Examples</h3>
      <pre class="code-block" data-highlight-theme="github-gist"><code class="hljs css">// Change presentation background
&amp; {
    background: #a83239;
}

// Change color of body text
.slides {
    color: #009999;
}

// Turn text white if the slide has a dark background
.has-dark-background {
    color: #fff;
}

// Add a blue border to all slides (each slide is a &lt;section&gt;)
.slides section {
    outline: 1px solid blue;
}

// Add a red border to all vertical stacks of slides
.slides section.stack {
    outline: 1px solid red;
}<br>
// Include a custom font<br>@font-face {<br>&nbsp; font-family: "Cabin Sketch";<br>&nbsp; src: url("https://s3.amazonaws.com/static.slid.es/fonts/cabinsketch/cabinsketch-regular.woff") format("woff"),<br>&nbsp; &nbsp; &nbsp; &nbsp;url("https://s3.amazonaws.com/static.slid.es/fonts/cabinsketch/cabinsketch-regular.ttf") format("truetype");<br>}
<br>.slides h1, .slides h2, .slides h3 {<br>&nbsp; &nbsp; font-family: "Cabin Sketch";<br>}


// Change color of controls and progress bar
﻿@interactiveColor: rgb(200,105,119);

.progress span {
    background: @interactiveColor !important;
}

.controls .navigate-left {
    border-right-color: @interactiveColor !important;
}
.controls .navigate-right {
    border-left-color: @interactiveColor !important;
}
.controls .navigate-up {
    border-bottom-color: @interactiveColor !important;
}
.controls .navigate-down {
    border-top-color: @interactiveColor !important;
}</code></pre>
    </div>

    <p>Here's where you can access the CSS editor from inside of the Style panel:</p>
    <img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-css-editor-1.png">

    <p>A screenshot of the editor:</p>
    ﻿<img class="developer-image" src="https://static.slid.es.s3.amazonaws.com/site/developers/slides-css-editor-2.png">

  </section>
</article>

</div>


</body>
<script src="./JS/animation.js"></script>
<script>
    
</script>

</html>

