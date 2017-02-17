<?php

/* bootstrapt.html */
class __TwigTemplate_aab198f98cee2740a5681b75c73a1aca223002433c6f859219745f8bd84db2d4 extends Twig_Template
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
    <title>bootstrapt测试</title>
</head>
<body>
    <h1>bootstrapt测试</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "bootstrapt.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>bootstrapt测试</title>
</head>
<body>
    <h1>bootstrapt测试</h1>
</body>
</html>", "bootstrapt.html", "F:\\phpStudy\\WWW\\myFrame\\app\\view\\Index\\bootstrapt.html");
    }
}
