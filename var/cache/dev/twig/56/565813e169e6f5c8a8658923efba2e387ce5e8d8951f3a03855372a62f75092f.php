<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* build/pages/page.html.twig */
class __TwigTemplate_30042130a3b399ddf267f581c4764ba5523c98a911d3dd0c3de2b4292c4c8ecd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "build/pages/page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "build/pages/page.html.twig"));

        // line 1
        $this->loadTemplate("/build/base/base.html.twig", "build/pages/page.html.twig", 1)->display($context);
        // line 2
        echo "<div>";
        $this->loadTemplate("/build/base/menu.html.twig", "build/pages/page.html.twig", 2)->display($context);
        echo "</div>
<div>
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h1>
    <div>
        ";
        // line 6
        echo (isset($context["pageBody"]) || array_key_exists("pageBody", $context) ? $context["pageBody"] : (function () { throw new RuntimeError('Variable "pageBody" does not exist.', 6, $this->source); })());
        echo "
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "build/pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"/build/base/base.html.twig\" %}
<div>{% include \"/build/base/menu.html.twig\" %}</div>
<div>
    <h1>{{ pageTitle }}</h1>
    <div>
        {{ pageBody | raw }}
    </div>
</div>", "build/pages/page.html.twig", "/var/www/templates/build/pages/page.html.twig");
    }
}
