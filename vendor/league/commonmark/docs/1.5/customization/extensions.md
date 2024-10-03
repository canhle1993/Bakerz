---
layout: default
title: Extensions
description: Creating custom extensions to add new syntax and other custom functionality
---

# Extensions

Extensions provide a way to group related parsers, renderers, etc. together with pre-defined priorities, configuration settings, etc.  They are perfect for distributing your customizations as reusable, open-source packages that others can plug into their own projects!

To create an extension, simply create a new class implementing `ExtensionInterface`.  This has a single method where you're given a `ConfigurableEnvironmentInterface` to register whatever things you need to. For example:

```php
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\ConfigurableEnvironmentInterface;

final class EmojiExtension implements ExtensionInterface
{
    public function register(ConfigurableEnvironmentInterface $environment)
    {
        $environment
            // TODO: Create the EmojiParser, Emoji, and EmojiRenderer classes
            ->addInlineParser(new EmojiParser(), 20)
            ->addInlineRenderer(Emoji::class, new EmojiRenderer(), 0)
        ;
    }
}
```

To hook up your new extension to the `Environment`, simply do this:

```php
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;

$environment = Environment::createCommonMarkEnvironment();
$environment->addExtension(new EmojiExtension());

$converter = new CommonMarkConverter([], $environment);
echo $converter->convertToHtml('Hello! :wave:');
```
