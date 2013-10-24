<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_547cd3429cc0ab7e97b42794c1e93e1929c3fa10bd1110c80664f285f3151f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "
    <table class=\"table table-condensed sonata-ba-list\">

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 20
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!$this->getContext($context, "display"))) {
                    // line 21
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                    // line 22
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            if ($this->getContext($context, "display")) {
                // line 25
                echo "                <tr>
                    <td colspan=\"3\" style=\"background: none repeat scroll 0 0 #F7F7F7;\"><strong>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                echo "</strong></td>
                </tr>

                ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                    ";
                    if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">
                                ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                        // line 37
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                        ";
                            if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                                // line 39
                                echo "                                            <a class=\"btn btn-link\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                            </a>
                                        ";
                            } else {
                                // line 44
                                echo "                                            <a class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                                // line 50
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                    <li>
                                                        <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "subclass"), "html", null, true);
                                    echo "</a>
                                                    </li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                            </ul>
                                        ";
                            }
                            // line 57
                            echo "                                    ";
                        }
                        // line 58
                        echo "                                    ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                        <a class=\"btn btn-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                            <i class=\"icon-list\"></i>
                                            ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                    ";
                        }
                        // line 64
                        echo "                                </div>
                            </td>
                        </tr>
                    ";
                    }
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "
            ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 72,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  121 => 51,  112 => 47,  102 => 42,  100 => 41,  94 => 39,  89 => 37,  75 => 30,  71 => 29,  62 => 25,  60 => 24,  57 => 23,  50 => 22,  38 => 19,  29 => 15,  26 => 14,  793 => 265,  790 => 264,  785 => 259,  778 => 255,  772 => 252,  768 => 250,  766 => 249,  763 => 248,  757 => 246,  755 => 245,  752 => 244,  746 => 242,  744 => 241,  741 => 240,  735 => 238,  733 => 237,  730 => 236,  724 => 234,  722 => 233,  719 => 232,  716 => 231,  712 => 186,  706 => 185,  697 => 182,  692 => 181,  687 => 180,  684 => 179,  679 => 178,  676 => 177,  672 => 167,  663 => 163,  657 => 161,  654 => 160,  651 => 159,  645 => 156,  641 => 155,  638 => 154,  632 => 153,  627 => 150,  621 => 149,  613 => 147,  610 => 146,  606 => 145,  601 => 143,  598 => 142,  596 => 141,  593 => 140,  590 => 139,  583 => 138,  580 => 137,  577 => 136,  574 => 135,  568 => 134,  565 => 133,  562 => 132,  559 => 130,  552 => 129,  549 => 128,  543 => 127,  540 => 126,  535 => 125,  532 => 124,  529 => 123,  523 => 122,  517 => 168,  515 => 159,  511 => 157,  508 => 156,  505 => 123,  503 => 122,  499 => 120,  496 => 119,  489 => 115,  483 => 114,  478 => 113,  475 => 112,  468 => 76,  462 => 75,  458 => 74,  455 => 73,  449 => 71,  447 => 70,  442 => 68,  437 => 66,  433 => 65,  429 => 64,  423 => 61,  419 => 59,  413 => 58,  405 => 57,  401 => 55,  398 => 54,  391 => 50,  387 => 49,  383 => 47,  368 => 36,  366 => 35,  361 => 33,  357 => 32,  352 => 30,  349 => 29,  346 => 28,  340 => 22,  333 => 271,  331 => 264,  326 => 261,  324 => 231,  320 => 230,  317 => 229,  311 => 226,  308 => 225,  306 => 224,  301 => 221,  295 => 218,  292 => 217,  290 => 216,  287 => 215,  282 => 212,  276 => 210,  273 => 209,  270 => 208,  256 => 207,  250 => 205,  245 => 202,  239 => 200,  231 => 198,  229 => 197,  226 => 196,  223 => 195,  205 => 194,  202 => 193,  200 => 192,  196 => 190,  194 => 189,  190 => 187,  188 => 177,  181 => 172,  178 => 171,  176 => 119,  173 => 71,  171 => 112,  164 => 110,  162 => 109,  150 => 99,  137 => 94,  134 => 93,  117 => 50,  93 => 87,  90 => 86,  87 => 85,  81 => 83,  79 => 82,  74 => 80,  68 => 54,  65 => 26,  63 => 28,  54 => 22,  51 => 21,  49 => 20,  43 => 17,  41 => 20,  37 => 14,  35 => 13,  33 => 12,  31 => 11,  159 => 49,  153 => 62,  147 => 46,  144 => 97,  140 => 95,  132 => 43,  129 => 42,  125 => 40,  119 => 39,  113 => 89,  110 => 46,  106 => 44,  103 => 34,  101 => 33,  97 => 31,  91 => 38,  85 => 28,  82 => 33,  78 => 31,  70 => 78,  67 => 24,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 21,  45 => 18,  42 => 17,  39 => 15,  34 => 18,  28 => 14,);
    }
}
