<?php

/* index.html */
class __TwigTemplate_cdc2e2600b56f13f78d09ba929b3688b8b032cbe5240df153c3ff5026a52c5e6 extends Twig_Template
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
        // line 41
        echo twig_escape_filter($this->env, (isset($context["app_title"]) ? $context["app_title"] : null), "html", null, true);
        echo "</h1>
    <main>
      <div id=\"filter-container\">
        <form> 
          <div class=\"row\">
            <div class=\"eight columns\">
              <label for=\"keyword\">Find a deal</label>
              <input type=\"text\" name=\"keyword\" id=\"keyword\" class=\"u-full-width\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\" placeholder=\"Keyword\">
            </div>
            <div class=\"two columns\">
              <label for=\"search_index\">Category</label>
              <select name=\"search_index\" id=\"search_index\" class=\"u-full-width\">
              ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search_indices"]) ? $context["search_indices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 54
            echo "                ";
            $context["data"] = (((isset($context["search_index"]) ? $context["search_index"] : null) . ",") . $context["index"]);
            // line 55
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
        // line 57
        echo "              </select>
            </div>
            <div class=\"two columns\">
              <button class=\"button-primary\" id=\"search-button\">search</button>
            </div>
          </div>
        </form>
      </div>


";
        // line 67
        if ((isset($context["m"]) ? $context["m"] : null)) {
            // line 68
            echo "<div id=\"results-container\">

        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["m"]) ? $context["m"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["md"]) {
                // line 71
                echo "        
        <div class=\"item\">
          <div class=\"item-image-container\">
            <img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["md"], 0, array(), "array"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["md"], 1, array(), "array"), "html", null, true);
                echo "\" class=\"item-image\">
          </div>
          <div class=\"item-details-container\">
            <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["md"], 2, array(), "array"), "html", null, true);
                echo "\" class=\"item-title\">
              <strong>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["md"], 3, array(), "array"), "html", null, true);
                echo "</strong>
              
            </a>
                         <div class=\"item-price\">\$";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["md"], 4, array(), "array"), "html", null, true);
                echo "</div>
                        
            
                    </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['md'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                      </div>




";
        } elseif (        // line 92
(isset($context["has_searched"]) ? $context["has_searched"] : null)) {
            // line 93
            echo "not yet

";
        }
        // line 96
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
        return array (  173 => 96,  168 => 93,  166 => 92,  159 => 87,  147 => 81,  141 => 78,  137 => 77,  129 => 74,  124 => 71,  120 => 70,  116 => 68,  114 => 67,  102 => 57,  89 => 55,  86 => 54,  82 => 53,  74 => 48,  64 => 41,  25 => 5,  19 => 1,);
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
