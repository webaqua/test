<?php

/* C:\xampp\htdocs\neurosurgeon/themes/laratify-octobercms-octaskin/pages/home.htm */
class __TwigTemplate_b9f5c4a177d8429303b0c52f42268d3c6ad1de1dbdfa7b21f5f6b2a5b03f4840 extends Twig_Template
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
        echo "<section id=\"lt-feature\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-feature-content\">
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-home/feature"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
  </div>
</section>

<section id=\"lt-utility\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-utility-content\">
      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-home/utility"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-home/mainpage"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "    </div>
  </div>
</section>

<section id=\"lt-bottom\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-bottom-content\">
      ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-home/bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </div>
  </div>
</section>

<section id=\"lt-extension\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-extension-content\">
      ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-home/extension"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\neurosurgeon/themes/laratify-octobercms-octaskin/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  76 => 36,  67 => 29,  63 => 28,  54 => 21,  50 => 20,  41 => 13,  37 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"lt-feature\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-feature-content\">
      {% partial \"pages-home/feature\" %}
    </div>
  </div>
</section>

<section id=\"lt-utility\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-utility-content\">
      {% partial \"pages-home/utility\" %}
    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      {% partial \"pages-home/mainpage\" %}
    </div>
  </div>
</section>

<section id=\"lt-bottom\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-bottom-content\">
      {% partial \"pages-home/bottom\" %}
    </div>
  </div>
</section>

<section id=\"lt-extension\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-extension-content\">
      {% partial \"pages-home/extension\" %}
    </div>
  </div>
</section>", "C:\\xampp\\htdocs\\neurosurgeon/themes/laratify-octobercms-octaskin/pages/home.htm", "");
    }
}
