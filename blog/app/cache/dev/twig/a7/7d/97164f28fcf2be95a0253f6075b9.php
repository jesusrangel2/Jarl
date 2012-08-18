<?php

/* BloggerBlogBundle:Page:nosotros.html.twig */
class __TwigTemplate_a77d97164f28fcf2be95a0253f6075b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  174 => 52,  169 => 47,  166 => 46,  140 => 33,  98 => 5,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 42,  152 => 58,  148 => 34,  145 => 56,  141 => 55,  134 => 50,  132 => 26,  127 => 46,  123 => 44,  109 => 39,  93 => 53,  90 => 32,  54 => 30,  133 => 44,  124 => 24,  111 => 12,  80 => 26,  60 => 16,  52 => 21,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 39,  25 => 3,  72 => 16,  64 => 19,  53 => 15,  34 => 6,  92 => 20,  86 => 26,  79 => 43,  19 => 2,  42 => 10,  40 => 7,  29 => 5,  26 => 4,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 39,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 22,  117 => 21,  103 => 36,  74 => 27,  47 => 12,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 34,  58 => 18,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 25,  125 => 42,  121 => 40,  115 => 39,  107 => 10,  99 => 34,  96 => 34,  91 => 52,  82 => 27,  77 => 23,  75 => 24,  57 => 15,  50 => 13,  46 => 10,  44 => 11,  39 => 9,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 9,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 46,  81 => 24,  73 => 22,  70 => 26,  67 => 19,  62 => 24,  59 => 33,  55 => 14,  51 => 13,  48 => 10,  41 => 14,  38 => 8,  35 => 5,  31 => 4,  28 => 3,);
    }
}
