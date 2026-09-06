<?php declare(strict_types=1);
\Mousr\Templates\Assert::template($renderer, $escaper, $context, Page::class);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?= $escaper->attr($escaper->encoding) ?>">
    <link rel="stylesheet" href="main.css">
    <title>Mousr | small PHP components that can scare an ElePHPant</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
  </head>
  <body>
    <header>
      <nav>
        <img src="logo.png"/>
      </nav>
    </header>
    <main>
        <?= $context->renderedMarkdown ?>
    </main>
    <footer>
    </footer>
  </body>
</html>
