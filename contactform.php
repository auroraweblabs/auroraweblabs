<div class="mb-md-0 mb-5">
    <form id="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()">
        <div class="row">
            <div class="col-md-6">
                <div class="md-form mb-4">
                    <input type="text" id="name" name="name" placeholder="YOUR NAME" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form mb-4">
                    <input type="text" id="email" name="email" placeholder="YOUR EMAIL" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-4">
                    <input type="text" id="subject" name="subject" placeholder="SUBJECT" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <textarea type="text" id="message" name="message" placeholder="MESSAGE" rows="2" class="form-control md-textarea mb-2"></textarea>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="status text-center mb-1" id="status"></div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="text-center text-md-left justify-content-center" align="center">
                <a class="btn btn-primary justify-content-center text-center btn-lg btn-block mt-2" onclick="validateForm();">
                    Send
                </a>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<script>
function validateForm() {
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name'     : $('input[name=name]').val(),
        'email'    : $('input[name=email]').val(),
        'subject'  : $('input[name=subject]').val(),
        'message'  : $('textarea[name=message]').val()
    };
    $.ajax({
        url : "mail.php",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {
            $('#status').text(data.message);
            if (data.code) //If mail was sent successfully, reset the form.
            $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            $('#status').text(jqXHR);
            
        }
        
    });
    
}
</script>