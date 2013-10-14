<?php

/* MagaTallerBundle:Default:index.html.twig */
class __TwigTemplate_decf456b87090ae0135b4c29e55bcf5e extends Twig_Template
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
        echo "<ul>
\t<li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("curso_new");
        echo "\">Nuevo Curso</li>
\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("materia_new");
        echo "\">Nueva Materia</li>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("alumno_new");
        echo "\">Nuevo Alumno</li>
</ul>


";
    }

    public function getTemplateName()
    {
        return "MagaTallerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
