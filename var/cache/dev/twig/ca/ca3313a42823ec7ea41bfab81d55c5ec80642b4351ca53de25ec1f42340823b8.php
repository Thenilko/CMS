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

/* /build/base/menu.html.twig */
class __TwigTemplate_700c1e4f42debf69b5db80c3d33b356841cd6d28f6b9624bc78931e1b77894a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/build/base/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/build/base/menu.html.twig"));

        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["page"], "isHomePage", [], "any", false, false, false, 3)) {
                // line 4
                echo "                    <li><a href=\"";
                echo "../";
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 4), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 6
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, (("../pages/page-" . twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 6)) . ".html"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 6), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/build/base/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  69 => 8,  61 => 6,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for page in pages %}
            {% if page.isHomePage %}
                    <li><a href=\"{{ '../' }}\">{{ page.title }}</a></li>
            {% else %}
                    <li><a href=\"{{ '../pages/page-'~ page.id ~'.html' }}\">{{ page.title }}</a></li>
            {% endif %}
    {% endfor %}
</ul>", "/build/base/menu.html.twig", "/var/www/templates/build/base/menu.html.twig");
    }
}
