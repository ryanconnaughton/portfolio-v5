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

		<h1>Task/Reward UX Experiment</h1>

		<p>
			<a href="https://www.findmypast.co.uk" target="_blank">www.findmypast.co.uk</a>
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
				<p>This study follows how I led an instructional and incentive based UX experiement within a lean & agile  team of 6.
					Our mission was to try and improve the beginner onboarding experience that was at that time, better suited towards intermediate users.
				</p>

				<!-- MULTIPLE PARAGRAPH NEEDS ADJUSTED <P> MARGIN-BOTOM 	<p style="margin-bottom: -15px;"> -->


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
					<span class="btm-btn">(9 min read)</span>
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
			<div class="date">February, 2018</div>
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
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-1.jpeg" onError="imgError(this, 'case-study')" alt="Old user journey flows" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
					<div class="row">
						<div class="col-md-6 pull-right text-right">
							<a href="#" class="zoom-image">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="image-descrip">Old  user journey</div>
						</div>
					</div>
		</div>
	</div>

	<div class="normal-width">
		<h2>Problem Statement & Goal(s)</h2>
		<p>First things first, we needed to frame the problem and define our goals. In order to do that, I gathered a group of longstanding ‘specialists’ within the business who had appropriate deep-seated knowledge in different areas and disciplines — the outcome of which can be read below:</p>

		<div class="page-quote-bordered">
			<p>Our tree product is intended to acquire new <span class="bold">beginner users within their first session.</span></p>
			<p>We have observed that our tree product journey is overly-complex and is at present largely <span class="bold">suited towards intermediate users.</span> This, we believe, is causing people less familiar to family history to <span class="bold">drop off in high numbers.</span></p>
			<p style="margin-bottom: 0px;">How might we improve our tree product to better <span class="bold">onboard</span> and <span class="bold">retain beginner users</span> resulting in <span class="bold">higher conversion/paid subscriptions?</span></p>
		</div>

		<p>Our deadline for this was just two weeks so we had to move quickly.


		<h2>Defining the Problem(s), Objectives & Key Results</h2>
		<p>It was the beginning of the quarter and we had to define what we thought was the <span class="bold">right</span> problem to solve for our users (objective) while adhering to the business goals. Following that, we had to come up with a viable strategy on how to tackle it and how best to measure our success (key results).</p>
		<p>In order to help us do that and as with all our pre-decision making, we first accumulated all existing previous data we had and/or carry out additional research we thought necessary but unavailable. This consisted of user research, competitor analysis and quantitative data metrics.</p>


		<h2>Defining The Users</h2>
		<p>
			The next step was to bring the appropriate teams up to speed of what it means to be a ‘beginner hobbyist’. Below you can find the pre-defined user profiles that we were working with.
		</p>
	</div>

	<div class="normal-width">
		<div class="spaced">
		<div>
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-2.jpeg" onError="imgError(this, 'case-study')" alt="User profile canvas" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
		</div>
			<div class="row"
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip">Pre-defined User profile Canvas based off of extensive research (user pains/gains etc.)
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="std-width">
	</div>

	<div class="md-width">
	</div>

	<div class="lg-width">
	</div>

	<div class="std-width">
	</div>

	<div class="md-width">
	</div>

<!-- CODE FOR THE DIFFEREENT ELEMENTS
			<div class="page-quote">
				<p>I help solve business problems by designing seamless user experiences</p>
				<span class="quote-author">-User testing participant</span>
			</div>

			<div class="spaced">
				<img src="img/work/nightkey3.jpeg" alt="" data-action="zoom" />
					<div class="row">
						<div class="col-md-6 pull-right text-right">
							<a href="#" class="zoom-image">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<span class="image-descrip">Optional description will be written under the image here</span>
						</div>
					</div>
				</div>
-->


	<div class="normal-width">
		<p>
			It’s worth mentioning also that at this point in time, I had been leading on the UX of the tree journey for some time and had already conducted 30+ user interviews and tests previously. This helped better guide my decision making on this project while also consulting the analytics team regarding any quantitive data questions we had.
		</p>

		<h2>Solution Ideation Workshop</h2>
		<p>
			With the scene set, I gathered a mixed-disciplined in-house team to a meeting room where I facilitated a design studio workshop — this is essentially a process to generate and bounce many diverse ideas off of each of the participants extremely quickly while also building shared understanding and acquiring stakeholder ‘buy-in’.
		</p>
		<p>
			I made it clear to the group that the goal of this workshop was not necessarily to create a single, final solution. Rather, they are simply helping to refine the overall design direction that will continue to be explored after the design studio workshop is over.
		</p>

		<h3>Design studio workshop format</h3>
		<p>The format for this was 3 short rounds of sketching and individual presenting/critiquing. Due to quite a large group and a 2 hour window time constraint, I explored the idea of adapting a simplified version of the ‘6 thinking hats’ (<a href="https://en.wikipedia.org/wiki/Six_Thinking_Hats" target="_blank">Wikipedia description</a>) — assigning them into 2 groups of either a ‘green hat (the optimist)’ and ‘red hat (the pessimist)’, which meant they had to give their feedback from one of those two ways of thinking. I then had them rotate hats/roles each round.
		</p>
	</div>

	<div class="normal-width">
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-3.png" onError="imgError(this, 'case-study')" alt="Design studio workshop" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip"><span class="bold">Design Studio facilitation</span> — featuring optimist/pessimist colour coded ‘thinking hats’ and post-its (Note: these are not real hats and are superimposed for illustrative purposes only — although that would of made a nice touch, wouldn’t it? :))
		</div>
				</div>
			</div>
		</div>
	</div>

	<div class="normal-width">
		<p>I found this new experimental hat method resulted in the discussions being much more concise which really helped overcome our time constraints.
		</p>
		<p>In addition to successfully making the rounds much shorter, I was told the hat method helped their thinking be more focused while also making them much more comfortable in giving ‘negative feedback’.
		</p>

		<h3>Outcome</h3>
		<p>Finally, with colour coded feedback post-its scattered on each pinned up design around the room (which gave visual indication of which were the more liked ideas), we finished up by summarising the overall themes which were:
		</p>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> Task guidance onboarding
			</li>
			<li>
				<span class="list-number">2)</span> Hint(s)’ (our usual model was to have them subscribe before access)
			</li>
			<li>
				<span class="list-number">3)</span> Bite-sized education
			</li>
		</ul>
	</div>

	<div class="normal-width">
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-4.png" onError="imgError(this, 'case-study')" alt="Workshop feedback survey results" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					Following each workshop I conduct, I send out a short 3 question feedback survey for continuous improvement
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="normal-width">
		<h2>Choosing Which Solutions to Test</h2>
		<p>Next up, having generated themes from the design studio workshop, I gathered a new group together for a white boarding session consisting of the product manager, content and a few of the software engineers who would potentially be building this feature if our hypotheses were validated.
		</p>
		<p>Even at this early stage in the process, it’s important for me to get a diverse range of inputs in order to maintain as much consistent shared understanding and team accountability as possible, while also gaining valuable insight into technical feasibility.
		</p>
		<p>
		Together, after exploring many possible avenues, we settled on testing the following two hypotheses:
		</p>
		<div class="page-quote-bordered">
			<p><span class="bold">Hypothesis #1 — Task Onboarding</span><br />
					We believe beginner hobbyists within their first session(persona)<br />
				 	Will be more likely to engage in our tree product (behavioural success)<br />
					By guiding them with instructional tasks (feature)<br />
			</p>
			<p style="margin-bottom: 0px;"><span class="bold">Hypothesis #2 — Free Hint Reward</span><br />
					We believe beginner hobbyists within their first session (persona)<br />
					Will be more likely to complete tasks and experience value (behavioural success)<br />
					By rewarding them with free use of a hint after completing 3 tasks (feature)<br />
			</p>
		</div>
	</div>

	<div class="normal-width">
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-5.jpeg" onError="imgError(this, 'case-study')" alt="Post workshop whiteboarding session" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip"><span class="bold">Left:</span> Key themes from workshop / <span class="bold">Middle:</span> Prioritised tasks (impact vs. difficulty) / <span class="bold">Right:</span> Hypotheses
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="normal-width">
		<h3>Task selection & prioritisation</h3>
		<p>Before we did that though, we needed to flesh those ideas out. We needed to decide on which tasks we should assign to users and in what order.</p>
		<p>First, using post-its, we listed out all the possible tasks that could be carried out on the tree. Then, we mapped out which ones we felt brought the most value to the user followed by how complex each of those tasks were by number of steps they had to take to complete them. We then ranked them all ‘high’, ‘medium’ or ‘low’ in impact and difficulty which we used as a guide for prioritising their order.</p>
		<p>Naturally, we thought it best to start with the easiest and most impactful tasks first and work down from there. We decided on having the ‘free hint’ reward after 3 successfully completed tasks.</p>
		<p>It wasn’t perfect, but with such a short deadline at hand we had no time to dwell. Our thinking was to get something in front of users as soon as possible to test, where we could then quickly iterate accordingly if our decisions were less than optimal.</p>
	</div>


	<div class="spaced lg-width">
		<div>
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-6.png" onError="imgError(this, 'case-study')" alt="Task prioritisation method w/ annotations" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
		</div>
		<div class="row">
			<div class="col-md-6 pull-right text-right">
				<a href="#" class="zoom-image">
				</a>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="image-descrip">Impact vs. difficulty task prioritisation method</div>
			</div>
		</div>
	</div>


	<div class="normal-width">
		<h2>Design & Testing (part 1): Low-Fidelity</h2>
		<p>Now equipped with the content, clarity on task selection and order, I began sketching out a bunch of wireframes.
			I then  tested these internally with different colleagues around the business.
		</p>
		<p>One of the key iterations made here was the introduction of a permanently viewable step-by-step ‘text instructions’ bar for each task as to not force the user to repetitively minimise and maximise the below tab when interacting with the product (this will become more clear in the next section).
		</p>
	</div>

	<div class="spaced lg-width">
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-7.png" onError="imgError(this, 'case-study')" alt="Early sketched wireframes w/ annotations" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip">Sketches: 1 of the more successful internally tested wireframes
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="page-quote-container normal-width">
		<p class="page-quote">It’s pretty tedious that I have to minimise and maximise these tabs in order to see what my next step is.</p>
		<span class="quote-author">- In-house user testing participant</span>
	</div>

	<div class="normal-width">
		<h2>Design & Testing (part 2): Mid-fidelity Prototype</h2>
		<p>Following my sketches and after a few iterations, I decided to move quickly to a mid-fidelity wireframed prototype. I decided on greyscale at this point in order to focus the discussion and feedback solely on the idea concepts rather than the aesthetics.</p>
		<p>I tested these internally with different colleagues around the business.</p>
		<p>One of the key iterations made here was the introduction of a permanently viewable step-by-step ‘text instructions’ bar for each task as to not force the user to repetitively minimise and maximise the below tab when interacting with the product (this will become more clear in the next section).</p>

		<h3>External user testing</h3>
		<p>Again, due to a looming deadline, we didn’t have adequate time to test both the mobile and the desktop versions. Suffice to say though, a high majority of our users tend to use higher screen resolutions when actually using our tree product (i.e tablets and desktops), albeit mobile is higher in initial ‘sign-ups’.</p>
	</div>

	<div class="normal-width">
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-8.png" onError="imgError(this, 'case-study')" alt="User participant pictures" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip">Round #1 user testing participants
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="normal-width">
		<p>With that said, we (a user research specialist and myself) did two rounds of testing — with each round consisting of 5 participants (10 total). Starting with an initial short user interview followed by the test itself. All successfully matched our ideal user profile demographics.</p>
	</div>

	<div class="normal-width">
		<div class="spaced">
			<div>
				<picture>
					<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-9.png" onError="imgError(this, 'case-study')" alt="Card sorting post-it pictures" data-action="zoom" />
					<div class="pre-loader"></div>
				</picture>
			</div>
			<div class="row">
				<div class="col-md-6 pull-right text-right">
					<a href="#" class="zoom-image">
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="image-descrip">Card sorting helped us evaluate our participants thinking and how they value each ‘task’ in order of importance
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="normal-width">
		<h3>Card sorting</h3>
		<p>Towards the latter part of the interview, we had participants do a card sort in two parts. We had them firstly write out on post-its the tasks they would like to see and rank them in importance. Then, we had them rank the tasks we had put together ourselves in order of importance and questioned them on their reasoning for each.</p>
	</div>


	<div class="max-width">
		<div>
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-10.png" onError="imgError(this, 'case-study')" alt="Mid-fidelity wireframes key screens" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
		</div>
		<div class="image-descrip">Mid-fidelity prototype #1 (key screens)</div>
	</div>

	<div class="normal-width">
		<h3> User testing key learning</h3>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> The result of the card sort was extremely enlightening. It hit home how different our thinking was in regards to our task selection decision making and descriptive language style. While we were thinking in terms of actions to take on the product itself, our participants were thinking more of the <span class="bold">outcomes</span> they wanted to achieve.
			</li>
			<li>
				<span class="list-number">2)</span> The descriptive word ‘task’ really didn’t resonate with users. They felt it sounded ‘chore-like’.
			</li>
			<li>
				<span class="list-number">3)</span> It wasn’t clear to users that the ‘4th step’ was actually a reward and at a glance, they assumed it was just another task having not read the content of it at this point (this is where greyscale mid-fidelity wireframes proved to have it’s downfalls — in hindsight, with an interface of this complexity, a lack of visual colour distinction maybe wasn’t the best testing choice to deliver the best learnings).
			</li>
			<li>
				<span class="list-number">4)</span> Participants were more interested in a free trial rather than a ‘free hint’.
			</li>
			<li>
				<span class="list-number">5)</span> On the first task, which was to ‘play the introductory video’, participants were extremely unclear on how to take this action. This was because the button icon to take this action was in the form of a question mark which was taken from live build (this is what the live website was currently displaying).
			</li>
		</ul>
		<div class="page-quote-container">
			<p class="page-quote">Tasks? I don’t like the sound of that. Sounds like a chore.</p>
			<span class="quote-author">- User testing participant</span>
		</div>
		<h3>Key iterations/actions undergone from the above key learnings</h3>
		<ul class="content-list-ordered">
			<li>
				<span class="list-number">1)</span> We needed to drastically rethink how we presented these ‘tasks’. Making it abundantly clear that completing them will not only give them a reward and help them learn how to use the product, but more crucially potentially help produce the outcomes they wanted (e.g discovering unknown family members).
			</li>
			<li>
				<span class="list-number">2)</span> Renamed ‘Tasks’ to ‘Achievements'.
			</li>
			<li>
				<span class="list-number">3)</span> Added a ‘star icon’ to the reward button, giving visual emphasis and distinction from the tasks.
			</li>
			<li>
				<span class="list-number">4)</span> Changed the reward from ‘free hint’ to ‘free trial’.
			</li>
			<li>
				<span class="list-number">5)</span> Changed the button icon from a question mark to a play button. In addition, and to further address this kind of problem, we explored the idea of having temporary ‘lighter/darker’ visuals on the area where the current action was to be executed.
			</li>
			<li>
				<span class="list-number">6)</span> Changed the shape of the task shape from tall/thin to wide/short to give less visual obstruction on user/tree interaction.
			</li>
		</ul>
	</div>

	<div class="max-width">
		<div>
			<picture>
				<img class="placeholder" src="img/work/placeholder-img.png" data-src="img/case-studies/findmypast-11.png" onError="imgError(this, 'case-study')" alt="Mid-fidelity wireframes key screens" data-action="zoom" />
				<div class="pre-loader"></div>
			</picture>
		</div>
		<div class="image-descrip">Mid-fidelity prototype #2 (key screens)</div>
	</div>

	<div class="normal-width">
		<h2>The Outcome</h2>
		<p>Initially, our confidence was high but our assumptions on how our users would react to our ideas were off the mark. We grossly underestimated the sheer complexity of getting this type of experiment right in such a short time frame.
		</p>
		<p>Overall, although enticed by the idea of a reward, users felt that this feature added an extra unnecessary layer of complexity to the experience — they wanted to be able to explore the product freely without being distracted by a strict task regiment.
		</p>
		<p>This, we felt, didn’t necessarily mean that a task/reward feature was a complete write-off — only that for now at least, we had seen enough by this point to persuade us to pivot to a different direction where our confidence was higher in both scope and value to the user/business.
		<p>
		<p>In the end, within just 2 weeks, we had identified/defined a problem, designed, prototyped and tested what would of been a complex and thus expensive feature to implement. Furthermore, we had generated a foundation of ideas and learnings for the backlog to be picked up for potential future experiment exploration — all without writing one line of code.
		</p>
	</div>

	<div class="prototype-link normal-width">
		<p>
			Prototype link: <a href="https://goo.gl/qA9zHT" traget="_blank">https://goo.gl/qA9zHT</a>
		</p>
	</div>
</main>

<?php
require_once 'includes/footer.php';
?>
