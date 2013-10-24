<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_b711de5283b5ddecc7faf3b6f7a512f10eebf4ac4cc4a53918a998bd74f48178 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  66 => 25,  46 => 14,  30 => 5,  24 => 2,  19 => 1,  32 => 6,  27 => 13,  25 => 12,  20 => 1,  179 => 72,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  121 => 51,  112 => 47,  102 => 42,  100 => 41,  94 => 39,  89 => 37,  75 => 28,  71 => 29,  62 => 24,  60 => 24,  57 => 23,  50 => 15,  38 => 19,  29 => 15,  26 => 3,  793 => 265,  790 => 264,  785 => 259,  778 => 255,  772 => 252,  768 => 250,  766 => 249,  763 => 248,  757 => 246,  755 => 245,  752 => 244,  746 => 242,  744 => 241,  741 => 240,  735 => 238,  733 => 237,  730 => 236,  724 => 234,  722 => 233,  719 => 232,  716 => 231,  712 => 186,  706 => 185,  697 => 182,  692 => 181,  687 => 180,  684 => 179,  679 => 178,  676 => 177,  672 => 167,  663 => 163,  657 => 161,  654 => 160,  651 => 159,  645 => 156,  641 => 155,  638 => 154,  632 => 153,  627 => 150,  621 => 149,  613 => 147,  610 => 146,  606 => 145,  601 => 143,  598 => 142,  596 => 141,  593 => 140,  590 => 139,  583 => 138,  580 => 137,  577 => 136,  574 => 135,  568 => 134,  565 => 133,  562 => 132,  559 => 130,  552 => 129,  549 => 128,  543 => 127,  540 => 126,  535 => 125,  532 => 124,  529 => 123,  523 => 122,  517 => 168,  515 => 159,  511 => 157,  508 => 156,  505 => 123,  503 => 122,  499 => 120,  496 => 119,  489 => 115,  483 => 114,  478 => 113,  475 => 112,  468 => 76,  462 => 75,  458 => 74,  455 => 73,  449 => 71,  447 => 70,  442 => 68,  437 => 66,  433 => 65,  429 => 64,  423 => 61,  419 => 59,  413 => 58,  405 => 57,  401 => 55,  398 => 54,  391 => 50,  387 => 49,  383 => 47,  368 => 36,  366 => 35,  361 => 33,  357 => 32,  352 => 30,  349 => 29,  346 => 28,  340 => 22,  333 => 271,  331 => 264,  326 => 261,  324 => 231,  320 => 230,  317 => 229,  311 => 226,  308 => 225,  306 => 224,  301 => 221,  295 => 218,  292 => 217,  290 => 216,  287 => 215,  282 => 212,  276 => 210,  273 => 209,  270 => 208,  256 => 207,  250 => 205,  245 => 202,  239 => 200,  231 => 198,  229 => 197,  226 => 196,  223 => 195,  205 => 194,  202 => 193,  200 => 192,  196 => 190,  194 => 189,  190 => 187,  188 => 177,  181 => 172,  178 => 171,  176 => 119,  173 => 71,  171 => 112,  164 => 110,  162 => 109,  150 => 99,  137 => 94,  134 => 93,  117 => 50,  93 => 87,  90 => 86,  87 => 85,  81 => 83,  79 => 29,  74 => 80,  68 => 54,  65 => 26,  63 => 28,  54 => 22,  51 => 21,  49 => 20,  43 => 17,  41 => 20,  37 => 14,  35 => 13,  33 => 12,  31 => 11,  159 => 49,  153 => 62,  147 => 46,  144 => 97,  140 => 95,  132 => 43,  129 => 42,  125 => 40,  119 => 39,  113 => 89,  110 => 46,  106 => 44,  103 => 34,  101 => 33,  97 => 31,  91 => 35,  85 => 28,  82 => 33,  78 => 31,  70 => 26,  67 => 24,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 21,  45 => 18,  42 => 12,  39 => 15,  34 => 18,  28 => 14,);
    }
}
