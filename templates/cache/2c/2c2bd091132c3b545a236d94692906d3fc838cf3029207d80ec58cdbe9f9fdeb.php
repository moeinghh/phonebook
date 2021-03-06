<?php

/* add.html.twig */
class __TwigTemplate_4b95b95e4cd7fe22f3ad59fbdf5c228dc725a1831e9b7de62226f4d11618cb22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "add.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-md-12 col-sm-12\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">اضافه کردن مشتری</h3>
            </div>
            <form>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-3\">

                            <div class=\"form-group\">
                                <label>نام</label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"نام\">
                            </div>
                            <div class=\"form-group\">
                                <label>نام خانودگی</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"نام خانودگی\">
                            </div>
                            <div class=\"form-group\">
                                <label>ایمیل</label>
                                <input type=\"email\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"ایمیل\">
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label>تلفن همراه</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن همراه\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن محل کار</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن محل کار\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن منزل</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن منزل\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-default\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-info pull-right\">Sign in</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"base.html.twig\"%}
{% block content %}
    <div class=\"col-md-12 col-sm-12\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">اضافه کردن مشتری</h3>
            </div>
            <form>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-3\">

                            <div class=\"form-group\">
                                <label>نام</label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"نام\">
                            </div>
                            <div class=\"form-group\">
                                <label>نام خانودگی</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"نام خانودگی\">
                            </div>
                            <div class=\"form-group\">
                                <label>ایمیل</label>
                                <input type=\"email\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"ایمیل\">
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label>تلفن همراه</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن همراه\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن محل کار</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن محل کار\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن منزل</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن منزل\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-default\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-info pull-right\">Sign in</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
{% endblock %}", "add.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\add.html.twig");
    }
}
