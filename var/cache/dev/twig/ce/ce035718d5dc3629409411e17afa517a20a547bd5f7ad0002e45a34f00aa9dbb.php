<?php

/* inc/navbar.html.twig */
class __TwigTemplate_c65b6acf54761d2225deec25ada5c83fc9f1cf39a31dffca945e7d7a4e6c65b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
<div class=\"container\">
  <a class=\"navbar-brand\" href=\"/\">SymfCRUD</a>

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\"
    <span class=\"navbar-toggle-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
    <ul class=\"navbar-nav ml-auto\">
      <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"/text/new\" class=\"nav-link\">New Text</a>
      </li>
    </ul>
  </div>
</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
<div class=\"container\">
  <a class=\"navbar-brand\" href=\"/\">SymfCRUD</a>

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\"
    <span class=\"navbar-toggle-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
    <ul class=\"navbar-nav ml-auto\">
      <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"/text/new\" class=\"nav-link\">New Text</a>
      </li>
    </ul>
  </div>
</div>
</nav>
", "inc/navbar.html.twig", "/home/lucifer/Projects/SymfCRUD/templates/inc/navbar.html.twig");
    }
}
