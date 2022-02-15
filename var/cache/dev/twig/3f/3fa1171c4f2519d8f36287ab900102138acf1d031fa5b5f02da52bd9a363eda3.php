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

/* admin/page/_form.html.twig */
class __TwigTemplate_970f37f73aa1e8831a65f9b6d04ad29c94ebb5ad3253e549d356de1fbcf15fca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/page/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/page/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'label', ["label" => "Page title:"]);
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'widget');
        echo "
</div>
<div class=\"form-group\">
    <div style=\"display: none\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "metadata", [], "any", false, false, false, 8), 'widget');
        echo "</div>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "metadata", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Matadata:"]);
        echo "
    <div class=\"col-md-6 col-sm-6 col-sx-12\">
        <ul id=\"metadata-list\"
            data-prototype=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "metadata", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "prototype", [], "any", false, false, false, 12), 'widget'));
        echo "\"
            data-vars-id=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "metadata", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
            data-vars-full-name=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "metadata", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "full_name", [], "any", false, false, false, 14), "html", null, true);
        echo "\"
            data-widget-tags=\"";
        // line 15
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\"
            data-widget-counter=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "metadata", [], "any", false, false, false, 16)), "html", null, true);
        echo "\" style=\"list-style: none; padding-inline-start: 0px\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "metadata", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["metadataField"]) {
            // line 18
            echo "                <li>
                    <label>";
            // line 19
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["metadataField"], "vars", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19)), "html", null, true);
            echo ": </label>
                    <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["metadataField"], "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["metadataField"], 'errors');
            echo "
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["metadataField"], 'widget');
            echo "

                    <button type=\"button\"
                            class=\"remove-collection-element-widget\"
                    >Remove param</button>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metadataField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>

        <button type=\"button\"
                class=\"add-another-collection-widget\"
                data-list-selector=\"#metadata-list\">Add another metadata</button>
        ";
        // line 34
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "metadata", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34))) {
            // line 35
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">×</span></button>
                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "metadata", [], "any", false, false, false, 38), 'errors');
            echo "
            </div>
        ";
        }
        // line 41
        echo "    </div>

</div>
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'rest');
        echo "
    <button class=\"btn\">";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 45, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
<script>
    jQuery(document).ready(function () {
        jQuery('.add-another-collection-widget').click(function (e) {
            let list = jQuery(jQuery(this).attr('data-list-selector'));
            let newElem = \"<input type='text' class='metadata-key' placeholder='Metadata name'/> <input type='text' class='metadata-value' placeholder='Metadata value'/> <input type='hidden' class='final-input'/>\";
            list.append('<li>'+ newElem +'</li>');
        });

        jQuery('.remove-collection-element-widget').click(function (e) {
            jQuery(this).parent().remove();
        });

        \$(document).on('keyup', \"#metadata-list li input.metadata-key\",function () {
            let value = \$(this).val();
            let list = \$(this).parent().parent();
            let widgetId = list.data('vars-id');
            let widgetFullName = list.data('vars-full-name');

            let formattedKey = value.split(' ').join('_')
            \$(this).parent().find('input.final-input').attr('name', widgetFullName + '[' + formattedKey + ']');
            \$(this).parent().find('input.final-input').attr('id', widgetId + '_' + formattedKey);
        });

        \$(document).on('keyup', \"#metadata-list li input.metadata-value\",function () {
            let value = \$(this).val();
            \$(this).parent().find('input.final-input').val(value);
        });
        // \$(\"#castalis_pls_brulafine_corebundle_mailing_scenario_discountCode\").chosen()
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 46,  150 => 45,  146 => 44,  141 => 41,  135 => 38,  130 => 35,  128 => 34,  121 => 29,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  63 => 9,  59 => 8,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

<div class=\"form-group\">
    {{ form_label(form.title, 'Page title:') }}
    {{ form_widget(form.title) }}
</div>
<div class=\"form-group\">
    <div style=\"display: none\">{{ form_widget(form.metadata)}}</div>
    {{ form_label(form.metadata, 'Matadata:', {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12' }}) }}
    <div class=\"col-md-6 col-sm-6 col-sx-12\">
        <ul id=\"metadata-list\"
            data-prototype=\"{{ form_widget(form.metadata.vars.prototype)|e }}\"
            data-vars-id=\"{{ form.metadata.vars.id }}\"
            data-vars-full-name=\"{{ form.metadata.vars.full_name }}\"
            data-widget-tags=\"{{ '<li></li>'|e }}\"
            data-widget-counter=\"{{ form.metadata|length }}\" style=\"list-style: none; padding-inline-start: 0px\">
            {% for metadataField in form.metadata %}
                <li>
                    <label>{{ metadataField.vars.name | title }}: </label>
                    <p>{{ metadataField.vars.value }}</p>
                    {{ form_errors(metadataField) }}
                    {{ form_widget(metadataField) }}

                    <button type=\"button\"
                            class=\"remove-collection-element-widget\"
                    >Remove param</button>
                </li>
            {% endfor %}
        </ul>

        <button type=\"button\"
                class=\"add-another-collection-widget\"
                data-list-selector=\"#metadata-list\">Add another metadata</button>
        {% if form.metadata.vars.errors|length %}
            <div class=\"alert alert-danger\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">×</span></button>
                {{ form_errors(form.metadata) }}
            </div>
        {% endif %}
    </div>

</div>
    {{ form_rest(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
<script>
    jQuery(document).ready(function () {
        jQuery('.add-another-collection-widget').click(function (e) {
            let list = jQuery(jQuery(this).attr('data-list-selector'));
            let newElem = \"<input type='text' class='metadata-key' placeholder='Metadata name'/> <input type='text' class='metadata-value' placeholder='Metadata value'/> <input type='hidden' class='final-input'/>\";
            list.append('<li>'+ newElem +'</li>');
        });

        jQuery('.remove-collection-element-widget').click(function (e) {
            jQuery(this).parent().remove();
        });

        \$(document).on('keyup', \"#metadata-list li input.metadata-key\",function () {
            let value = \$(this).val();
            let list = \$(this).parent().parent();
            let widgetId = list.data('vars-id');
            let widgetFullName = list.data('vars-full-name');

            let formattedKey = value.split(' ').join('_')
            \$(this).parent().find('input.final-input').attr('name', widgetFullName + '[' + formattedKey + ']');
            \$(this).parent().find('input.final-input').attr('id', widgetId + '_' + formattedKey);
        });

        \$(document).on('keyup', \"#metadata-list li input.metadata-value\",function () {
            let value = \$(this).val();
            \$(this).parent().find('input.final-input').val(value);
        });
        // \$(\"#castalis_pls_brulafine_corebundle_mailing_scenario_discountCode\").chosen()
    });

</script>
", "admin/page/_form.html.twig", "/var/www/templates/admin/page/_form.html.twig");
    }
}
