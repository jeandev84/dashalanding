<section id="main">
    <div class="container">
           <header>
               {% includePath('landing/partials/navbar.php') %}
               {% includePath('landing/sections/main.php') %}
           </header>
    </div>
</section>
<section id="about">
    <div class="container">
        {% includePath('landing/sections/about.php') %}
    </div>
</section>
<section id="tasks" class="section__text__center">
    <div class="container">
        {% includePath('landing/sections/tasks.php') %}
    </div>
</section>
<section id="services" class="section__text__center">
    <div class="container">
        {% includePath('landing/sections/services.php') %}
    </div>
</section>
<section id="blog" class="bg_belgian section__text__center">
    <div class="container">
        {% includePath('landing/sections/blog.php') %}
    </div>
</section>
<section id="feedback" class="section__text__center">
    <div class="container">
        {% includePath('landing/sections/feedback.php') %}
    </div>
</section>
<section id="contact" class="bg_belgian section__text__center">
    <div class="container">
        <footer>
            {% includePath('landing/sections/contact.php') %}
        </footer>
    </div>
</section>