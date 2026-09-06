<?php declare(strict_types=1);

use Mousr\Templates\Attributes\PreEscapedHTML;
use Mousr\Templates\ViewContext;

final readonly class Page implements ViewContext {
    public function __construct(
        #[PreEscapedHTML]
        public string $renderedMarkdown,
    ) {}
}
