<?php
global $getBodyClass, $pageTitleTag, $getMetaDescription, $getMetaKeywords;
$getBodyClass = 'home-page';
$pageTitleTag = 'Ryan Connaughton - Portfolio';
$getMetaDescription = 'Ryan Connaughton\'s Portolio - Product Designer specialising in User Experience, User Inteface & Visual Design.';
$getMetaKeywords = 'UX, UI, Visual Design, User Experience';
require_once 'includes/header.php';
?>
<section class="full-height intro text-center">
	<div class="video-control normal-column">
		<a href="#" class="active">
			<span class="pause">
				<img src="img/icons/pause-icon.png" alt="pause" />
			</span>
			<span class="play">
				<img src="img/icons/play-icon.png" alt="play" />
			</span>
			Background
		</a>
	</div>
	<video loop="" autoplay="" muted=""  class="fullscreen-bg__video" id="homeVideo" preload="none">
	</video>
	<div class="fullscreen-bg__video_replacement"></div>
	<div class="text-area">
		<img src="img/mugshot.png" alt="Ryan Connaughton" class="mugshot" />
		<h1>

				<em class="visible-xs">UX</em>
				<em class="hidden-xs">User Experience</em>
				Designer
			<br />
			<span>Based in London, UK</span>
		</h1>

		<div class="btn-set-container-desktop">
			<a href="ryanconnaughton-cv-resume.pdf" class="btn resume-btn" download>View my CV/Resumé</a>
			<a href="#main2" class="btn work-btn scroll">View my work</a>
		</div>

		<div class="quote-block">
			<p>I help solve business problems by designing seamless user experiences.</p>
		</div>

	</div>
	<div class="landing-arrow">
		<div class="quote-block-mobile">
			<p>I help solve business problems by designing seamless user experiences.</p>
		</div>
		<a href="#main2" class="scroll-down bounce animated">
			<span>More</span>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
				<g>
					<path fill="#fff" d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
				</g>
			</svg>
		</a>
	</div>
</section>
	<div id="main2" role"main2" class="logo-bar container">
		<div class="row vertical-center normal-column-logo">
			<div class="col-xs-6 col-sm-6 col-md-2">
				<img class="coca-cola-logo" src="img/logos/coca_cola.svg" alt="Coca Cola"/>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-2">
				<img class="scope-logo" src="img/logos/scope.svg" alt="Scope"/>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-2">
				<img class="rubicon-logo" src="img/logos/rubicon.svg" alt="Rubicon" />
			</div>
			<div class="col-xs-6 col-sm-6 col-md-2">
				<img class="threem-logo" src="img/logos/3m.svg" alt="3M" />
			</div>
			<div class="col-xs-6 col-sm-6 col-md-2">
				<img class="find-my-past-logo" src="img/logos/find_my_past.svg" alt="Find My Past" />
			</div>
			<div class="col-xs-6 col-sm-6 col-md-2">
				<img class="general-assembly-logo" src="img/logos/general_assembly.svg" alt="General Assembly" />
			</div>
		</div>
	</div>
<main id="main" role="main" class="container">
	<div class="normal-column">
		<div class="row">
			<div class="col-md-5 col-sm-5">
				<h2 class="selected-works-title">Selected Works</h2>
			</div>
			<div class="col-md-7 col-sm-7">
				<nav class="work-filter text-right">
					<ul>
						<li class="current_page_item2">
							<a href="#" data-filter="*" class="active">View all</a>
						</li>
						<li>
							<a href="#" data-filter=".casestudy">
							 Case studies
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="row isotope normal-column-gallery">

		<article class="column-view col-xs-4 gallery" data-work="homerun" data-title="Homerun">
			<div class="picture-container">
				<picture>
					<source media="(max-width: 799px)" srcset="img/thumbs/1-homerun.jpg" />
					<source media="(min-width: 800px)" srcset="img/thumbs/1-homerun.jpg" />
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/1-homerun.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Homerun<br /></h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>product/ux design,</li>
						<li><span class="hashtag">#</span>visual/ui design,</li>
						<li><span class="hashtag">#</span>user research,</li>
						<li><span class="hashtag">#</span>clickable-prototype</li>
				</ul>
				<div class="separator"></div>
				<span class="date">September, 2018</span>
			</div>
		</article>

		<article class="column-view col-xs-4 gallery" data-work="3m" data-title="3M - Graphics Hub">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/2-3m_graphicshub.jpg" onError="imgError(this, 'landing')" alt="3M Mobile Key Screens" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">3M - Graphics Hub</h3>
				<ul class="tags3">
					<li><span class="hashtag">#</span>product/ux design,</li>
					<li><span class="hashtag">#</span>wireframe sketching,</li>
					<li><span class="hashtag">#</span>information architecture,</li>
					<li><span class="hashtag">#</span>proto-personas</li>
				</ul>
				<div class="separator"></div>
				<span class="date">August, 2018</span>
			</div>
		</article>


		<article class="column-view col-xs-4 gallery" data-url="./findmypast.php" data-title="Findmypast - Case Study #1">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/3-findmypast.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Findmypast - Task/Reward Experiment</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>ux experiment,</li>
						<li><span class="hashtag">#</span>user research</li>
						<li><span class="hashtag">#</span>user testing,</li>
						<li><span class="hashtag">#</span>wireframing,</li>
						<li><span class="hashtag">#</span>rapid-prototying,</li>
							<li><span class="hashtag">#</span>workshops</li>
				</ul>
				<div class="separator"></div>
				<span class="date">Feb, 2018</span>
			</div>
			<div class="case-study-flag"><span class="recommended"></span> Case Study</div>
		</article>




		<article class="column-view col-xs-4 casestudy" data-url="./findmypast-2.php" data-title="Findmypast - Case Study #2">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/4-findmypast2.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Findmypast - User Onboarding Experiement</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>ux experiment,</li>
						<li><span class="hashtag">#</span>lean & agile,</li>
						<li><span class="hashtag">#</span>saas,</li>
						<li><span class="hashtag">#</span>web app,</li>
						<li><span class="hashtag">#</span>product team dynamics</li>
				</ul>
				<div class="separator"></div>
				<span class="date">August, 2017</span>
			</div>
			<div class="case-study-flag"><span class="recommended"></span> Case Study</div>
		</article>

		<article class="column-view col-xs-4 casestudy" data-work="be-training" data-title="Be Training">
			<div class="picture-container">
				<picture>
						<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/5-betraining.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
						<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Be Training Academy</h3>
				<ul class="tags3">
					<li><span class="hashtag">#</span>visual design,</li>
						<li><span class="hashtag">#</span>branding & identity,</li>
						<li><span class="hashtag">#</span>print design,</li>
						<li><span class="hashtag">#</span>stationary,</li>
						<li><span class="hashtag">#</span>folder design</li>
				</ul>
				<div class="separator"></div>
				<span class="date">March, 2014</span>
			</div>
		</article>

		<article class="column-view col-xs-4 gallery" data-work="unified-ring" data-title="Unified Ring">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/6-unified_ring.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Unified Ring</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design,</li>
						<li><span class="hashtag">#</span>user interface design,</li>
						<li><span class="hashtag">#</span>android app,</li>
							<li><span class="hashtag">#</span>ios app,</li>
				</ul>
				<div class="separator"></div>
				<span class="date">August, 2016</span>
			</div>
		</article>




		<article class="column-view col-xs-4 casestudy" data-work="coca-cola" data-title="Coca Cola">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/7-coca_cola.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Coca-Cola</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>print design,</li>
						<li><span class="hashtag">#</span>ooh advertising,</li>
						<li><span class="hashtag">#</span>marketing,</li>
						<li><span class="hashtag">#</span>london underground & buses</li>
				</ul>
				<div class="separator"></div>
				<span class="date">December, 2014</span>
			</div>
			<!--CASE STUDY  FLAT WITHOUT THE STAR // <div class="case-study-flag">Case Study</div>  -->
		</article>

		<article class="column-view col-xs-4 casestudy" data-work="vectone" data-title="Vectone Mobile">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/8-vectone.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Vectone</h3>
				<ul class="tags3">
					<li><span class="hashtag">#</span>visual design,</li>
					<li><span class="hashtag">#</span>user interface design,</li>
					<li><span class="hashtag">#</span>ios app,</li>
				</ul>
				<div class="separator"></div>
				<span class="date">May, 2016</span>
			</div>
		</article>

		<article class="column-view col-xs-4 gallery" data-work="dead-within" data-title="Dead Within">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/9-dead_within.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Dead Within</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design,</li>
						<li><span class="hashtag">#</span>advertising,</li>
						<li><span class="hashtag">#</span>marketing,</li>
						<li><span class="hashtag">#</span>horror movie</li>
				</ul>
				<div class="separator"></div>
				<span class="date">December, 2014</span>
			</div>
		</article>




		<article class="column-view col-xs-4 casestudy" data-work="wgaming" data-title="W-Gaming">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/10-wgaming.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">W-Gaming</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design</li>
						<li><span class="hashtag">#</span>branding & identity,</li>
						<li><span class="hashtag">#</span>advertising,</li>
						<li><span class="hashtag">#</span>marketing</li>
				</ul>
				<div class="separator"></div>
				<span class="date">September, 2014</span>
			</div>
		</article>

		<article class="column-view col-xs-4 casestudy" data-work="rubicon" data-title="Rubicon Project - DSP Builder">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/11-rubicon.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Rubicon Project - DSP Builder</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design</li>
						<li><span class="hashtag">#</span>user interface design</li>
						<li><span class="hashtag">#</span>ipad app</li>
				</ul>
				<div class="separator"></div>
				<span class="date">April, 2015</span>
			</div>
		</article>

		<article class="column-view col-xs-4 gallery" data-work="exterionmedia-2" data-title="Exterion Media - We Love Insight">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/12-we_love-insight.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Exterion Media - We Love Insight</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design,</li>
						<li><span class="hashtag">#</span>print design & stationary,</li>
						<li><span class="hashtag">#</span>branding & identity</li>
				</ul>
				<div class="separator"></div>
				<span class="date">Jan, 2015</span>
			</div>
		</article>




		<article class="column-view col-xs-4 casestudy" data-work="exterionmedia" data-title="Exterion Media - Dynamic Pricing">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/13-dynamic_pricing.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Exterion Media - Dynamic Pricing</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design,</li>
						<li><span class="hashtag">#</span>user interface design,</li>
						<li><span class="hashtag">#</span>desktop app,</li>
				</ul>
				<div class="separator"></div>
				<span class="date">December, 2014</span>
			</div>
		</article>

		<article class="column-view col-xs-4 casestudy" data-work="adscout" data-title="AdScout">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/14-adscout.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">AdScout</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>motion design,</li>
						<li><span class="hashtag">#</span>graphic design,</li>
						<li><span class="hashtag">#</span>advertising,</li>
						<li><span class="hashtag">#</span>marketing</li>
				</ul>
				<div class="separator"></div>
				<span class="date">September, 2012</span>
			</div>
		</article>

		<article class="column-view col-xs-4 gallery" data-work="rubino" data-title="Rubino Restaurant">
			<div class="picture-container">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img-square.png" data-src="img/thumbs/15-rubino.jpg" onError="imgError(this, 'landing')" alt="WorkColumns" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="overlay">
				<h3 class="col-md-12">Rubino Restaurant</h3>
				<ul class="tags3">
						<li><span class="hashtag">#</span>visual design,</li>
						<li><span class="hashtag">#</span>print design,</li>
						<li><span class="hashtag">#</span>branding & identity</li>
						<li><span class="hashtag">#</span>restaurant menu,</li>
				</ul>
				<div class="separator"></div>
				<span class="date">March, 2013</span>
			</div>
		</article>


	</div>
</main>

<aside id="contact" class="container" role="form">
	<div class="normal-column">
		<div class="row">
			<div id="get-in-touch" class="col-xs-12">
				<h2 style="margin-bottom: 0px;">Get In Touch</h2>
			</div>

			<?php
				require_once 'includes/contact-form.php';
				?>

		</div>
	</div>
</aside>

<!-- Work popup -->
<div class="open-window" id="workData">
	<div class="container">
		<div class="inner-overlay-window">
			<div class="close-bar">
				<div class="container normal-column">
					<p class="job-title"></p>

					<!-- Next and Previous project buttons -->
					<!-- <a href="#" class="next">&lt Next Project</a>
					<a href="#" class="previous">Previous Project &gt</a> -->

					<a href="#" class="col-basm-6 close-overlay-window">
						<span>Close <i class="hidden-xs">work piece</i></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="5383.677 1414.483 46.238 42.517">
							<defs>
								<style>.a,.d{fill:none;}.a{stroke:#fff;}.b{fill:#fff;}.c{stroke:none;}</style>
							</defs>
							<g transform="translate(3899.23 1358)">
								<g transform="translate(1484.446 56.483)">
									<g class="a" transform="translate(0)">
										<rect class="c" width="46.238" height="42.517" rx="4"/>
										<rect class="d" x="0.5" y="0.5" width="45.238" height="41.517" rx="3.5"/>
									</g>
									<g transform="translate(13.727 11.543)">
										<path class="b" d="M11.148,9.612,18.6,2.053a1.214,1.214,0,0,0,0-1.7,1.172,1.172,0,0,0-1.675,0L9.473,7.913,2.023.353a1.172,1.172,0,0,0-1.675,0,1.214,1.214,0,0,0,0,1.7L7.8,9.612.347,17.172a1.214,1.214,0,0,0,0,1.7,1.173,1.173,0,0,0,1.675,0l7.451-7.559,7.45,7.559a1.172,1.172,0,0,0,1.675,0,1.214,1.214,0,0,0,0-1.7Z" transform="translate(0 -0.001)"/>
									</g>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="content"></div>
		</div>
	</div>
</div>

<?php
require_once 'includes/footer.php';
?>
