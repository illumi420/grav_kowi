<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_6c70458f87b5417cda26baaf55c3667b7b976c457afc10915fb354dd1460edbc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
      <img src=\"netzwerk.png\" style=\"width:22%;\"/>
         </div>
        <div class=\"col\">
       <img src=\"bank-konto.png\" style=\"width:25%;\"/>
         </div>
     </div>
   </div>
 <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p> 
   </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
      <img src=\"netzwerk.png\" style=\"width:22%;\"/>
         </div>
        <div class=\"col\">
       <img src=\"bank-konto.png\" style=\"width:25%;\"/>
         </div>
     </div>
   </div>
 <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p> 
   </section>
</section>
", "partials/footer.html.twig", "/var/www/html/user/themes/quark/templates/partials/footer.html.twig");
    }
}
