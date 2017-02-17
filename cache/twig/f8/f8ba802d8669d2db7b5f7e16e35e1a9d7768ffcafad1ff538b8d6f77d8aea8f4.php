<?php

/* index.html */
class __TwigTemplate_b2cf5697116d86b9dadd1a70f76d116fe7151ce3c886554e64e4878b2c6ecd42 extends Twig_Template
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
    <title>Title</title>
</head>
<body>
<h1>这是视图文件</h1>
<?php echo '框架的作者是'.\$name?>
<?php echo \$data;?>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
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
    <title>Title</title>
</head>
<body>
<h1>这是视图文件</h1>
<?php echo '框架的作者是'.\$name?>
<?php echo \$data;?>
</body>
</html>", "index.html", "F:\\phpStudy\\WWW\\myFrame\\app\\view\\Index\\index.html");
    }
}
