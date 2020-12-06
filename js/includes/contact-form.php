<!-- <form method="post" action="contact.php"> -->
<form id="contactForm">
    <div class="form-wrapper input-group">
        <div class="col-xs-12 col-md-6 col-sm-6 field-section has-float-label">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required />
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6 field-section has-float-label">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required />
        </div>
        <div class="col-xs-12 field-section has-float-label">
            <label for="message">Message</label>
            <textarea name="message" rows="1" id="message" required></textarea>
        </div>
        <div class="col-xs-12 text-right mobile-center">
            <button class="btn-send-message invalid-btn">Send message</button>
        </div>
    </div>
</form>

<section id="success-message" class="hide">
	<div class="">
		<h1>Success! :) </h1>
		<h2>Thanks for reaching out. I’ll get back to you asap.</h2>
	</div>
</section>

<section id="problem-message" class="hide">
	<div class="">
		<h1 style="margin: 0px;">Whoopsie daisy!</h1>
		<h2 style="margin-top: 5px;">Something went wrong.</h2>
    <p style="max-width: 80%; margin: 0 auto; margin-bottom: 20px; text-align: center">Fear not, though! - you can write to me directly via email to <a href="mailto: hello@ryanconnaughton.com">hello@ryanconnaughton.com</p>
	</div>
</section>

<script>
    const contactForm = document.getElementById('contactForm');
    const getInTouch = document.getElementById('get-in-touch');
    var textarea = null;
    window.addEventListener("load", function() {
        textarea = window.document.querySelector("textarea");
        textarea.addEventListener("keypress", function() {
            if(textarea.scrollTop != 0){
                textarea.style.height = textarea.scrollHeight + "px";
            }
        }, false);
    }, false);

    // Handles the form submit without refreshing the page
    contactForm.addEventListener('submit', function( event ){
        event.preventDefault();
        const name = $("#name").val()
        const email = $("#email").val()
        const message = $("#message").val()
        $.ajax({
            type: "POST",
            url: "contact.php",
            datatype: "html",
            data: { name, email, message},
            success: function(data) {
                if (data === "successful") {
                    showSuccessMessage();
                } else if (data === "unsuccessful") {
                    showProblemMessage();
                }
            }
        });
    });

    function showSuccessMessage() {
        const successMessage = document.getElementById("success-message")
        successMessage.setAttribute('class', 'show');
        contactForm.setAttribute('class', 'hide');
        getInTouch.setAttribute('class', 'hide');
    }

    function showProblemMessage() {
        const problemMessage = document.getElementById("problem-message")
        problemMessage.setAttribute('class', 'show');
        contactForm.setAttribute('class', 'hide');
        getInTouch.setAttribute('class', 'hide');
    }
</script>
