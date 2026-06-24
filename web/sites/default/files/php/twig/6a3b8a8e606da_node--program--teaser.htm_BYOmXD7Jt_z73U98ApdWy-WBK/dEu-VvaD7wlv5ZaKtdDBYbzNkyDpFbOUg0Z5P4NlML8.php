<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/riverside/templates/node--program--teaser.html.twig */
class __TwigTemplate_fa1fa39ca4efca061ec21e2264768543 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["image"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 2), "html", null, true);
            yield "
";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        yield "
";
        // line 5
        $context["category"] = "";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "  ";
            $context["category"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "label", [], "any", false, false, true, 7);
        }
        // line 9
        yield "
";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "riverside:program-card", ["title" =>         // line 11
($context["label"] ?? null), "url" =>         // line 12
($context["url"] ?? null), "image" =>         // line 13
($context["image"] ?? null), "category" =>         // line 14
($context["category"] ?? null), "summary" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["node"] ?? null), "field_summary", [], "any", false, true, true, 15), "value", [], "any", true, true, true, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_summary", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), "")) : ("")), "meta" => ((        // line 16
array_key_exists("program_meta", $context)) ? (Twig\Extension\CoreExtension::default(($context["program_meta"] ?? null), "")) : (""))], false));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "node", "label", "url", "program_meta"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/riverside/templates/node--program--teaser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  73 => 16,  72 => 15,  71 => 14,  70 => 13,  69 => 12,  68 => 11,  67 => 10,  64 => 9,  60 => 7,  58 => 6,  56 => 5,  53 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/riverside/templates/node--program--teaser.html.twig", "/var/www/html/web/themes/custom/riverside/templates/node--program--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 6];
        static $filters = ["escape" => 2, "default" => 15];
        static $functions = ["include" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'default'],
                ['include'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
