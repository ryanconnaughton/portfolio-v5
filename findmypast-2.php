<?php
global $getBodyClass, $pageTitleTag, $getMetaDescription, $getMetaKeywords;
$getBodyClass = 'work-page';
$pageTitleTag = 'Ryan Connaughton - Case Study: Night key';
$getMetaDescription = 'Ryan Connaughton\'s Portolio - Product Designer specialising in User Experience, User Inteface & Visual Design.';
$getMetaKeywords = 'UX, UI, Visual Design, User Experience';
require_once 'includes/header.php';
?>

<section class="full-height text-center">
	<div class="inner-wrap">

		<h1>User Onboarding Experiment</h1>

		<p>
			<a href="https://findmypast.co.uk/family-tree" target="_blank">live link</a>
		</p>

		<div class="row">
<!--- tags feel free to add back in
			<div class="col-md-12">
				<div class="mobile-center tags-pages">
					<span class="btn btn-bordered btn-info btn-sm">
						<span class="blue-override">#</span>user experience design
					</span>
					<span class="btn btn-bordered btn-info btn-sm">
						<span class="blue-override">#</span>user interace design
					</span>
					<span class="btn btn-bordered btn-info btn-sm">
						<span class="blue-override">#</span>visual design
					</span>
					<span class="btn btn-bordered btn-info btn-sm">
						<span class="blue-override">#</span>wireframing
					</span>
				</div>
			</div>
!-->
			<div class="intro-paragraph">
				<p >This case study is intended to illustrate some of my Lean/UCD/UX processes and mehodologies within an agile software team where we exercised continuous deployment on an existing product.</p>

				<!-- old content:
				Talk about problem? Onboarding new usaers to a complicated product
			 Trying to make complicated onboarding easier to learn. We tried incentivising users with small tasks and rewards in an attempt
			 to make learning the produvt more fun

			 "with surpsiing results"
			 Working within a lean & agile product team of 6, over a 2 week period I carried out a task/reward based UX experiment
			 on a family-history based web app with aims to improve the onboarding (becoming aquainted) with the product.

				-->
			</div>

			<div class="btn-set-container-desktop">
				<a href="#main"  class="btn blue-style-btn scroll">
					<span class="top-btn">Read full case study</span>
					<span class="btm-btn">(12 min read)</span>
				</a>

<!--secondary button
				<a href="#main" class="btn trans-style-btn scroll">
					<span class="top-btn">Read the short version</span>
					<span class="btm-btn">(jargon free - 5 min read)</span>
				</a>
			</div>
-->
			</div>
		</div>
	</div>

	<div class="btn-set-container-mobile">
			<a href="#main"  class="btn blue-style-btn scroll">
				<span class="top-btn">Read full case study</span>
				<span class="btm-btn">(9 min read)</span>
			</a>
			<div class="date">August, 2016</div>
	</div>
		<a href="#main" class="scroll-down bounce animated">
			<span>More</span>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
				<g>
					<path fill="#fff" d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
				</g>
			</svg>
		</a>
</section>

<main role="main" class="container" id="main">
	<div class="normal-width">
		<h2>Introductory context</h2>
			<h3>The product</h3>
		<p>Findmypast is a family history web-based product. You can primarily do three things on said website:</p>

		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> Search a collection of 8 billion+ records for your British & Irish ancestors
			</li>
			<li>
				<span class="list-number">2)</span> Build your family tree which in turn generates ‘Hints’ of possible ancestor record matches
			</li>
			<li>
				<span class="list-number">3)</span> Combine 1 & 2 to make discoveries and build a picture of who your ancestors were
			</li>
		</ul>

		<p>Now, in the case of this experiment, we’ll be focusing on the user journey of number 2, building your family tree. In order to give you better context before going through my approach, here’s what the current journey looks like:</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-1.jpeg" onError="imgError(this, 'case-study')" alt="Old user journey flows" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Old  user journey</div>
					</div>
				</div>
		</figure>
	</div>




<!-- CODE FOR THE DIFFEREENT ELEMENTS
			<div class="page-quote">
				<p>I help solve business problems by designing seamless user experiences</p>
				<span class="quote-author">-User testing participant</span>
			</div>

			<figure class="spaced">
				<img src="img/work/nightkey3.jpeg" alt="" data-action="zoom" />
					<div class="row">
						<div class="col-md-6 pull-right text-right">
							<a href="#" class="zoom-image">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="image-descrip">Optional description will be written under the image here</div>
						</div>
					</div>
				</figure>
-->
	<div class="normal-width">
		<h3>The team</h3>
		<p>First off, I’d like to introduce you to the team I worked with on this experiment. We were 1 of 6 total product teams working cross-functionally to achieve overall continuous product improvement. We numbered a total of 8 — consisting of 1 Product Manager, 6 Software Engineers and myself.
		</p>
		<p>I was charged with leading on the UX, User Research and Visual Design (as well as Product Owner duties).
		</p>
		<p>The company, team and I were working with within an <a href="https://en.wikipedia.org/wiki/OKR" target="_blank">OKR</a>'
			framework which was popularised by Google and stands for '<bold>O</bold>bjectives & <bold>K</bold>ey <bold>R</bold>esults'. The purpose of which is to define goals and track their outcomes in the context of the wider team and company mission.
		</p>

		<p>
			Day to day and within the team itself, we tended to follow many <a href="https://en.wikipedia.org/wiki/Lean_software_development" target="_blank">Lean</a>, <a href="https://en.wikipedia.org/wiki/Agile_software_development" target="_blank">Agile</a> and <a href="https://en.wikipedia.org/wiki/User-centered_design" target="_blank">User-centered Design</a> principles.
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-2.jpeg" onError="imgError(this, 'case-study')" alt="The product/agile team" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">The dream team (mid-<a href="https://searchsoftwarequality.techtarget.com/definition/Agile-retrospective" target="_blank">retrospective</a> exercise carried out weekly)
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<h2>Defining the Problem(s), Objectives & Key Results</h2>
		<p>It was approaching a new quarter, and as per routine, it was time to define new OKR's. To do that, we had to decide what the <bold>right</bold> problem was to
			solve for our users (user objectives v business objectives), coupled with a viable strategy on how to tackle it and how best to measure our success (key results).
		</p>
		<p>
		In order to help us do that and as with all our pre-decision making, we first accumulated all existing previous data we had in our arsenal and/or carried out additional
		research we thought necessary but unavailable - a few examples of which I'll be touching on in the following paragraphs.
		</p>

		<h3>Previous user research</h3>
		<p>Take from vast amounts of previous user testing, we knew that:</p>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> The tree was a complex product that was suited more towards intermediate users
			</li>
			<li>
				<span class="list-number">2)</span> Beginner users felt overwhelmed due to high-educational and knowledge barrier to entry
			</li>
			<li>
				<span class="list-number">3)</span> Beginner users wanted to be 'hand-held' throughout the experience
			</li>
		</ul>

		<h3>Competitor analysis</h3>
		<p>
		To further guide our decision making, and since such research was at the time non-existing, I thought it useful to get a better understanding of our competitors strengths and weaknesses and what worked for them.
		I conducted and documented in-depth analysis which I then relayed onto to the rest of the team.
		</p>

	</div>

	<div class="normal-width">
		<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-3.png" onError="imgError(this, 'case-study')" alt="Competitor analysis matrix grid" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip"><span class="bold">Competitor analysis:</span> matrix (features & business model)</div>
					</div>
				</div>
		</figure>
		<p>
		To begin the process, I spent some time on each competitor product across different platforms
		and mapped out the experiences in the form of <a href="https://www.google.co.uk/search?q=page+flow&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiZl8j9vefYAhWqIMAKHVQsAFcQ_AUICigB&biw=1807&bih=1030" target="_blank">page flows</a> - weighing up the differences in terms of features and business models along the way.
		</p>


	</div>

	<div class="lg-width">
		<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-4.jpeg" onError="imgError(this, 'case-study')" alt="Spider/radar chart" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Competitor analysis: spider/radar chart (themes and features)</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<p>
		I then conducted a <a href="https://en.wikipedia.org/wiki/Heuristic_evaluation" target="_blank">heuristic evaluation</a> of each competitor and grouped everything together in the form of several key themes. These were put into a spider/radar chart diagram where I ranked each from 0–5 (0 being non-existent and 5 being excellent).
		</p>
		<p>
			It’s not an exact science in all cases and thus some themes can be subject to opinion, but I felt it would be helpful to have this extra layer of qualitative data to hand when we congregated at the decision table.
		</p>
		<p>
		Ultimately though, this technique is a quick way to visually distinguish a strong and weak areas of our competitors in comparison to our own as well as identifying patterns and gaps. This could also be built upon and reused going forward for all future experiments.
		</p>

		<h3>Data science discovery</h3>
		<p>
			Furthermore, we had been working closely with a data scientist that had made a profound discovery — when users reached the point of adding ‘x’ or more people to their family tree, the likelihood of them signing up for a paid subscription increased dramatically.
		</p>

		<h3>Technical blockers</h3>
		<p>It’s worth mentioning at this point also, the tree product was built in legacy code — this meant that improvements to the tree itself was at best extremely difficult, expensive and time-consuming and at worst out of the question.
		</p>
		<p>In addition, work had begun to build a newer version of the tree from the ground up by another in-house team.
		</p>

		<h3>Outcome</h3>
		<p>With all the above taken into consideration, we concluded that we had strong indication on the direction we should go. The outcome of which can be read below:
		</p>

		<div class="page-quote-bordered">
			<p style="margin-bottom: 0px;"><span class="bold">Objective</span> Improve the tree onboarding experience for the first time session users<br /><br />
				<span class="bold">KR# 1:</span> The Average number of family members added to each tree increases from 'X' to ‘Y’ or more by new users within their first session <br />
				<span class="bold">KR #2:</span> Achieve a conversion rate increase of ‘X’, from ‘Y’ to ‘Z’ <br />
				<span class="bold">KR #3:</span> Achieve an <a href="https://www.medallia.com/net-promoter-score/" target="_blank">NPS</a> (Net Promoter Score) increase of ‘X’%, from ‘Y%’ to ‘Z’
			</p>
		</div>



		<h2>Defining the users</h2>
		<p>Before we jumped into ways we could achieve the above objective, It was important to reiterate to the team the types of users whom we would be designing for. Below was one of the pre-defined primary personas/user profiles we were working with:
		</p>
	</div>
	<div class="normal-width">
			<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-5.jpeg" onError="imgError(this, 'case-study')" alt="User profile canvas" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
					<div class="row">
						<div class="col-md-6 pull-right text-right">
							<a href="#" class="zoom-image">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="image-descrip">Pre-defined User profile Canvas based off of extensive research (user pains/gains etc.)</div>
						</div>
					</div>
			</figure>
	</div>

	<div class="normal-width">
		<h3>Experience level capture</h3>
		<p>To help us validate our assumptions and inform us which type of user we should be focusing on when it came to designing solutions, we wanted to know exactly what percentage of our traffic were beginners who were signing up.
		<p>It had been unclear up until this point what the answer to that question was. It had been believed that the majority of users were intermediates.
		</p>
		<p>In order to clear that question up once and for all, I advised the team we first conduct a quick experiment where we would ask the user(s) if they were a beginner, intermediate, or expert upon signing up which was agreed upon. Since this question alone could produce a subjective answer, we added an additional question which asked: "How long have you been researching your family history?" - this would help us further understand how they defined themselves in comparison to how we would define these 3 labels.
		</p>
		<p>We later jumbled up these answers and re-tested in order to see if selection bias came into play. It did not.
		</p>
	</div>

	<div class="lg-width">
		<figure>
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-6.png" onError="imgError(this, 'case-study')" alt="Mid-fidelity wireframes key screens" data-action="zoom"/>
				<div class="pre-loader"></div>
			</picture>
			<div class="image-descrip">Experience level capture (<span class="bold">left:</span> wireframes, <span class="bold">left:</span>right:</span> live-build)</div>
		</figure>
	<div>

	<div class="normal-width">

		<p>The results showed that in fact, the vast majority of new users classified themselves as a beginner with 0–1 month experience. This experiment was then rolled out to the rest of the product journeys were it was discovered that near identical results persisted.
		</p>

		<h2>Strategy & Planning</h2>
		<p>As with all our experiments, we created a strategy and planning board which was split into 3 simultaneous workflows represented by different post-it colours (discovery, delivery and cross-functional teams), assigning each item into one of the timeline columns and rows.
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-7.jpeg" onError="imgError(this, 'case-study')" alt="The product/agile team" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Planning board (<span class="bold" style="color:#FF246E">pink:</span> discovery, <span class="bold" style="color: #FFD04B">yellow:</span> delivery, <span class="bold" style="color: #B8CE1E;">green:</span> cross-functional team)
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<h2>Solution Ideation Workshop</h2>
		<p>To begin the solution process, I gathered the team and other appropriate key participants into a meeting room where whereI conducted an ideation workshop where I had the user journey flows and OKR pinned up on the wall.
		</p>
	</div>
	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-8.jpeg" onError="imgError(this, 'case-study')" alt="Whiteboarding session pin-up workshop" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">User flows with generated ideas on post-its
						</div>
					</div>
				</div>
		</figure>
	</div>
	<div class="normal-width">

		<p>Everyone had a good understanding of what we were trying to achieve by this point - but I reminded the group of the types of users we were designing for and the technical blockers/restrictions we had to ensure the discussions were on point and generated ideas were practical.
		</p>
		<p>
		The workshop produced many great ideas and discussions which I grouped into themes and later used for inspiration.
		</p>


		<h2>Design & Testing (part 1): Sketches</h2>
		<p>Following the workshop, I began exploring some of the more popular ideas further by sketching out what they would look like and mapping out how they would fit into the overall user journey.
		</p>
		<p>One of the better solutions I thought, was to have a visually clear step-by-step process which added family members one  at a time before they reached the tree itself. This solved several problems we knew from our research:
		</p>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> Overcame our technical blockers (the tree product itself was built in legacy code with a separate team working to build a newly-coded version from the ground-up)
			</li>
			<li>
				<span class="list-number">2)</span> Overcame the lack of clear direction for the user with bite-sized next steps
			</li>
			<li>
				<span class="list-number">3)</span> Jump started the high learning curve needed to build on and interact with the tree
			</li>
			<li>
				<span class="list-number">3)</span> When completed, it meant the tree would be readily populated with additional family members, which in turn meant our system would generate more ‘hints’ from the get go, making them see immediate value when they arrived on the tree
			</li>
		</ul>
	</div>

	<div class="lg-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-9.png" onError="imgError(this, 'case-study')" alt="Sketched wireframes" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip">Early wireframe sketches</div>
				</div>
			</div>
		</figure>
	</div>

	<div class="normal-width">
		<h3>Internal user testing</h3>
		<p>Having then tested these sketches with a few colleagues, a few of them expressed their scepticism on this particular direction, as I was informed that a similar experiment had failed previously which looked like the below:
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-10.png" onError="imgError(this, 'case-study')" alt="Previous experiment screenshots" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Previous experiment experience</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<p>
			However, I felt strongly that this may not necessarily be down to the concept itself, but rather, the execution. With some healthy debate, we were all onboard to explore this idea further.
		</p>

		<h2>Design & Testing (part 2) : Mid-Fidelity Prototype</h2>
		<p>
			I then quickly created a simple greyscale clickable prototype which we (a user research specialist and myself) user tested with 5 external participants that matched user profiles covered in the beginning.
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-11.png" onError="imgError(this, 'case-study')" alt="Mid-fidelity keyscreen wireframe greyscale" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Mid-fidelity wireframed prototype (key screen)
						</div>
					</div>
				</div>
		</figure>
	</div>
	<div class="normal-width">
		<p>
			We tasked each participant to sign up and to think out loud, prompting questions where necessary to better understand their thought process
		</p>
		<p>
			Overall, the prototype appeared to resonate extremely well with our participants.
		</p>

		<h3>External user testing key learnings</h3>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> Participants wanted the ability to go back and edit
			</li>
			<li>
				<span class="list-number">2)</span> It was not clear to participants what the ‘correct’ format of the ‘year of birth’ input was and how that might affect their result. It made them feel uneasy (despite the example text ‘1965’ that displayed the correct format)
			</li>
			<li>
				<span class="list-number">3)</span> Users were unsure on which parts were compulsory and which parts were not and how that would affect their results going forward (only a single name was needed to move forward)
			</li>
		</ul>

		<div class="page-quote-container">
			<p class="page-quote">Ah! What if I make a mistake? Can’t I go back and edit it? Would I do that from the browser menu?</p>
			<span class="quote-author">- User testing participant</span>
		</div>

		<h3>External user testing key learnings</h3>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> Introduced a back button (later new learnings meant we had to remove this due to technical constraints)
			</li>
			<li>
				<span class="list-number">2)</span> Changed the ‘text entry box/field’ to a selective ‘drop down list/menu’ to remove any ambiguity
			</li>
			<li>
				<span class="list-number">3)</span> Added a subtitle that read “Don’t worry if you don’t know everything, just fill in what you can…”
			</li>
		</ul>


		<h2>Design & Testing (part 3) : High-fidelity prototyping</h2>
		<p>With our confidence growing from positive feedback, I began work on a more in-detail and refined version. I explored several different styles, some of which you can see below:
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-12.png" onError="imgError(this, 'case-study')" alt="Layout & styling exploration wireframes" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Layout & styling exploration
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<div class="page-quote-container">
			<p class="page-quote">The amount of effort you put into your MVP (Minimal Viable Product) should be proportional to the amount of evidence you have that your idea is a good one</p>
			<span class="quote-author">- <a href="https://www.amazon.co.uk/Lean-UX-Designing-Great-Products-ebook/dp/B01LYGQ6CH/ref=sr_1_3?s=books&ie=UTF8&qid=1539960841&sr=1-3&keywords=lean+ux/" target="_blank">Lean UX</a></span>
		</div>
	</div>

	<div class="normal-width">
			<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-13.png" onError="imgError(this, 'case-study')" alt="High-fidelity prototype #1 key screens" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
					<div class="row">
						<div class="col-md-6 pull-right text-right">
							<a href="#" class="zoom-image">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="image-descrip">High-fidelity prototype #1 key screens
							</div>
						</div>
					</div>
			</figure>
	</div>

	<div class="normal-width">
		<p>
			As with all my designs, I made sure that I pinned them up at regular intervals for everyone to see. That way I could encourage frequent useful feedback throughout the process as and when colleagues felt ready to give it.
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-14.jpeg" onError="imgError(this, 'case-study')" alt="User/page flow wall pin-up" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">User/page flow pin-up (situated just outside of our team seating area)</div>
					</div>
				</div>
		</figure>
	</div>
	<div class="normal-width">
		<h3>Avatars</h3>
		<p>One piece of useful feedback from the above designs told me that from previous user research, users tended to dislike ‘cutesy’ avatars as family history had a more serious connotation to it. This prompted me to design the below improved faceless avatars:
		</p>
	</div>


	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-15.png" onError="imgError(this, 'case-study')" alt="Family member avatar illustrations" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Family member avatar illustrations
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">

		<p>These I figured could also be used for marketing assets and throughout the rest of the product going forward as and when needed.
		</p>

		<h3>User testing key learnings</h3>
		<p>We did a further 2 rounds of testing both involving 5 participants each (totalling 15 so far).</p>

		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> It wasn’t clear enough which family members details they were asking to be filled in on each step.
			</li>
			<li>
				<span class="list-number">2)</span> Mobile: The skip link and call to actions were hidden away on smaller resolutions underneath the fold (the immediate viewable area without the need for scrolling).
			</li>
			<li>
				<span class="list-number">3)</span> Participants tended not to read the subtitle we added at the top of the page which read “Don’t worry if you don’t know everything, just fill in what you can…” This again meant users weren’t sure about which fields were mandatory and which were not.
			</li>
			<li>
				<span class="list-number">4)</span> Making the previous decision to introduce the ‘dropdown list/menu’ for the ‘year of birth’ presented it’s own problems — it meant that participants were having to scroll for some time in order to select the right date which they found tedious, particularly when taking into consideration that they were potentially going to do this up to 7 times
			</li>
		</ul>
	</div>
	<div class="normal-width">
		<div class="page-quote-container">
			<p class="page-quote">I don’t know my Grandfathers details. Is it not possible to skip this step?</p>
			<span class="quote-author">- Mobile user testing participant</span>
		</div>
	</div>

	<div class="lg-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-16.png" onError="imgError(this, 'case-study')" alt="High-fidelity prototype #2 key screens" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Prototype #2 keyscreens</div>
					</div>
				</div>
		</figure>
	</div>


	<div class="normal-width">
		<h3>Key iterations/actions undergone from the above key learnings</h3>
		<p>We did a further 2 rounds of testing both involving 5 participants each (totalling 15 so far).</p>

		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> We experimented with having the avatar boxes ‘slide’ horizontally as to have it always be centred in the middle on the relevant family member (ultimately though this presented some technical challenges so we decided to settle on having a clear bold title <italic><bold>within</bold></italic> the form accompanied by a mini icon replicating the family members avatar).
			</li>
			<li>
				<span class="list-number">2)</span> Mobile: Added a permanently visible ‘next/skip’ footer navigation.
			</li>
			<li>
				<span class="list-number">3)</span> We added a clear bold title within the form itself, where users eyes tended to be drawn (as opposed to the top of the page).
			</li>
			<li>
				<span class="list-number">4)</span> We devised a way to only have possible/relevant date ranges depending on how old the user was— this made scrolling to the right date much more efficiently on all following family member forms.
			</li>
		</ul>


		<h2>Build Execution & Release Plan</h2>
		<p>For storytelling purposes and readability, I thought it best to explain things linearly as structured above. In reality, we had more than enough evidence sometime prior to this point that our idea was good enough to warrant testing this for real in the form of A/B testing (a method used to split user traffic 50%/50% to compare its performance against the current live build).
		</p>
		<p>This meant we had two separate simultaneous workstreams with discovery and design work being 1–2 weeks ahead of what was being built into the live product.
		</p>
		<p>
			This afforded us improved efficiency and two separate sources of continuous learning (qualitative user testing and quantitative metrics from the live website) that we could use to make evidence-based improvements as and when they came in.
		</p>

		<h3>Release plan</h3>
		<p>Since this wasn’t the only experiment we were testing at the time, we first had to come up with a test/release plan in order to see how this would fit in with the other ongoing work.
		</p>
	</div>

	<div class="normal-width">
			<figure class="spaced">
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-17.jpeg" onError="imgError(this, 'case-study')" alt="Product/feature roadmap" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
					<div class="row">
						<div class="col-md-6 pull-right text-right">
							<a href="#" class="zoom-image">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="image-descrip">Product/feature roadmap</div>
						</div>
					</div>
			</figure>
	</div>

	<div class="normal-width">
		<p>First, as a team, we estimated each items complexity (using Agile’s ‘<a href="https://www.ca.com/en/blog-highlight/works-agile-estimation-story-sizing.html" target="_blank">t-shirt sizing</a>’ method). We then grouped and prioritised each into ‘release segments’ — containing time until completion estimates and structuring it in a way where we thought we could make the most positive impact to the user and business in the shortest amount of time.
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-18.jpeg" onError="imgError(this, 'case-study')" alt="Product/feature roadmap" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip"><a href="https://searchsoftwarequality.techtarget.com/definition/user-story" target="_blank">User story</a> refinement session with the team — using <a href="https://trello.com/" target="_blank">Trello</a> with a <a href="https://www.planview.com/resources/articles/what-is-kanban-board/" target="_blank">kanban</a> structure</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<h2>Shipping it</h2>
		<p>We then began breaking down release #1 into Trello tickets in the form of <a href="https://www.atlassian.com/agile/project-management/epics-stories-themes" target="_blank">epics</a> and <a href="https://www.atlassian.com/agile/project-management/epics-stories-themes" target="_blank">user stories</a> to be built into real code.
		</p>
		<p>We tracked how our users engaged with our experiment on <a href="https://analytics.google.com/analytics/web/" target="_blank">Google Analytics</a> and the results were promising. This gave us the green light for us to plough on and execute on further iterated releases we had waiting in the pipeline.
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-19.png" onError="imgError(this, 'case-study')" alt="Build release key screens" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						</div>
					</div>
				</div>
		</figure>
	</div>
	<div class="normal-width">
		<h2>The Outcome</h2>
		<p>We managed to hit our overall objective and 2 out of 3 of our key result goals.
		Results showed we had upped user engagement by 150% and increased conversion (paid subscriptions) by 6%.
		</p>
		<p>Through the remainder of the quarter, we carried out several more related successful experiments which increased engagement a further 150% totalling 300%+, including integrating this experiment into different user journeys throughout the product.
		</p>
	</div>



	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-20.jpeg" onError="imgError(this, 'case-study')" alt="Visual graph / user metrics increase" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip"><span class="bold">150%</span> increase in user engagement metrics
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<h3>Learnings summary</h3>
		<p>All said and done, we learned that beginner users really liked clear guided bite-sized onboarding steps to help overcome the trees overwhelming nature and usability complexity (to which we were powerless to improve due to technical constraints).
		</p>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-21.png" onError="imgError(this, 'case-study')" alt="Mobile high-fidelity design mobile mockup" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<p>
			This helped kick start their journey and in turn increased the chances of them attaining the outcomes they wanted sooner, without the daunting task of starting from scratch (an empty tree).
		</p>
	</div>
	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast2-22.gif" onError="imgError(this, 'case-study')" alt="Final onboarding user journey" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="normal-width">
		<p>In closing, the biggest key take away I think, was that there is a fine line between what is minimally viable for the user and what is not - and with that, and although a difficult judgment call, we should always approach with caution when deciding to waive an experiment too early before they have had a chance to be fully fleshed out.
		</p>
		<p>Although the previous 'add parents' experiment had failed, the concept itself turned out to be solid - it just needed a different approach.
		</p>

		<h3>Live demonstration video</h3>
	</div>

	<div class="normal-width">
		<figure class="spaced">
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-1.jpeg" onError="imgError(this, 'case-study')" alt="Old user journey" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
				<div class="row">
					<div class="col-md-6 pull-right text-right">
						<a href="#" class="zoom-image">
						</a>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="image-descrip">Old user journey
						</div>
					</div>
				</div>
		</figure>
	</div>

	<div class="prototype-link normal-width">
		<p>
			Live link: <a href="https://findmypast.co.uk/family-tree" target="_blank">https://findmypast.co.uk/family-tree</a><br />
			Watch my verbally presented demo on another experiment at Findmypast: <a href="https://vimeo.com/251565658" target="_blank">Click here</a>
		</p>
	</div>


		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" frameborder="0" src="https://player.vimeo.com/video/253118296"></iframe>
		</div>




		</div>
	</div>
</main>

<?php
require_once 'includes/footer.php';
?>
