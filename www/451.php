<?
require_once('Core.php');

?><?= Template::Header(['title' => 'This Ebook Is No Longer Available', 'highlight' => '', 'description' => 'This ebook is unavailable due to legal reasons.']) ?>
<main>
	<section class="narrow has-hero">
		<hgroup>
			<h1>This Ebook Is No Longer Available</h1>
			<h2>This is 451 error.</h2>
		</hgroup>
		<picture data-caption="The Preaching of St. Paul at Ephesus. Eustache Le Sueur, 1649">
			<source srcset="/images/the-preaching-of-st-paul-at-ephesus@2x.avif 2x, /images/the-preaching-of-st-paul-at-ephesus.avif 1x" type="image/avif"/>
			<source srcset="/images/the-preaching-of-st-paul-at-ephesus@2x.jpg 2x, /images/the-preaching-of-st-paul-at-ephesus.jpg 1x" type="image/jpg"/>
			<img src="/images/the-preaching-of-st-paul-at-ephesus@2x.jpg" alt="A classical city is aflame as people scramble in the foreground."/>
		</picture>
		<p>This ebook is no longer available, due to legal reasons. This may occur if the book was thought to be in the U.S. public domain, but new evidence changed that determination.</p>
	</section>
</main>
<?= Template::Footer() ?>
