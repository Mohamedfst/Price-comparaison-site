<?php

/* index.html */
class __TwigTemplate_0a8ed1b9c5590b5464a1b3e2e599d4820ae6866e66a22a4fa47460b084ee6db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["app_title"]) ? $context["app_title"] : null), "html", null, true);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"assets/skeleton/css/skeleton.css\">
  <link rel=\"stylesheet\" href=\"css/style.css\">
  <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: \"Lato\", sans-serif}
.w3-bar,h1,button {font-family: \"Montserrat\", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<!-- Navbar -->
<div class=\"w3-top\">
  <div class=\"w3-bar w3-red w3-card-2 w3-left-align w3-large\">
    <a class=\"w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red\" href=\"javascript:void(0);\" onclick=\"myFunction()\" title=\"Toggle Navigation Menu\"><i class=\"fa fa-bars\"></i></a>
    <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large w3-white\">Home</a>
    <a href=\"#\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\">About us</a>
    <a href=\"#\" class=\"w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white\">Partnerships</a>
   
  </div>

  <!-- Navbar on small screens -->
  <div id=\"navDemo\" class=\"w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large\">
    <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">Link 1</a>
    <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">Link 2</a>
    <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">Link 3</a>
    <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">Link 4</a>
  </div>
</div>


  </div>
  <div id=\"wrapper\" class=\"container\">
    <h1>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["app_title"]) ? $context["app_title"] : null), "html", null, true);
        echo "</h1>
    <main>
      <div id=\"filter-container\">
        <form> 
          <div class=\"row\">
            <div class=\"eight columns\">
              <label for=\"keyword\">Find a deal</label>
              <input type=\"text\" name=\"keyword\" id=\"keyword\" class=\"u-full-width\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\" placeholder=\"Keyword\">
            </div>
            <div class=\"two columns\">
              <label for=\"search_index\">Category</label>
              <select name=\"search_index\" id=\"search_index\" class=\"u-full-width\">
              ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search_indices"]) ? $context["search_indices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 55
            echo "                ";
            $context["data"] = (((isset($context["search_index"]) ? $context["search_index"] : null) . ",") . $context["index"]);
            // line 56
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('selected')->getCallable(), array((isset($context["data"]) ? $context["data"] : null))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "              </select>
            </div>
            <div class=\"two columns\">
              <button class=\"button-primary\" id=\"search-button\">search</button>
            </div>
          </div>
        </form>
      </div>
      ";
        // line 66
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 67
            echo "      <div id=\"results-container\">
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                echo "        <div class=\"item\">
          <div class=\"item-image-container\">
            <img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "MediumImage", array()), "URL", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "ItemAttributes", array()), "Title", array()), "html", null, true);
                echo "\" class=\"item-image\">
          </div>
          <div class=\"item-details-container\">
            <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "DetailPageURL", array()), "html", null, true);
                echo "\" class=\"item-title\">
              <strong>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "ItemAttributes", array()), "Title", array()), "html", null, true);
                echo "</strong>
            </a>
            <div class=\"item-brand\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "ItemAttributes", array()), "Brand", array()), "html", null, true);
                echo "</div>
            
            <div class=\"item-price\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "OfferSummary", array()), "LowestNewPrice", array()), "FormattedPrice", array()), "html", null, true);
                echo "</div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "      </div>
     
      ";
        } elseif (        // line 85
(isset($context["has_searched"]) ? $context["has_searched"] : null)) {
            // line 86
            echo "       
      ";
        }
        // line 87
        echo "  
      
      
      
     </main>
  </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 87,  164 => 86,  162 => 85,  158 => 83,  148 => 79,  143 => 77,  138 => 75,  134 => 74,  126 => 71,  122 => 69,  118 => 68,  115 => 67,  113 => 66,  103 => 58,  90 => 56,  87 => 55,  83 => 54,  75 => 49,  65 => 42,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\wamp64\\www\\ama\\templates\\index.html");
    }
}
