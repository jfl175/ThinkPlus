$(document).ready(function(){
    
    // Mentor form
    $('#formMentor').submit(function(e){
        e.preventDefault();
        
        // var newForm = $("#bookSession").html();

        var fullname = $('#bookName').val();
        var phone = $('#bookMobile').val();
        var email = $('#bookEmail').val();
        var sessionDate = $('#bookDate').val();
        var form = 'mentor';

        $.post('frontController.php', {
            fullname: fullname, 
            phone: phone, 
            email: email, 
            sessionDate: sessionDate,
            form: form
        }).done(function(data){
            data = $.parseJSON(data);

            if(data["code"] = 200){
                $('#mentorModalContent').empty();
                $('#mentorModalFooter').remove();
                $('#mentorModalContent').html('<p class="lead"> Your request for FREE Mentoring Session with our expert has successfully been registered. Your reference number for this request is <span class="fw-bolder" >' + data["ref"] + '. </span>  Our experts will contact you within 24 working hours. </p><div class="text-end" id="mentorModalFooter"><button type="button" id="mentorClose" class="btn btn-success px-5" data-bs-dismiss="modal">Close</button></div>');

                // $("#mentorClose").on("click", function(){
                //     location.reload(true);
                //     // $("#bookSession").empty();  
                //     // $("#bookSession").html(newForm);
                // })
            } else {
                console.log('Something is wrong at mentoring session form.');
            }
        })
    })

    // Test your ability form
    $('#formTest').submit(function(e){
        e.preventDefault();
        var fullname = $('#testName').val();
        var phone = $('#testMobile').val();
        var email = $('#testEmail').val();
        var exam = $('#testExam').val();
        var form = 'test';
        
        $.post('frontController.php', {
            fullname: fullname, 
            phone: phone, 
            email: email, 
            exam: exam,
            form: form
        }).done(function(data){
            data = $.parseJSON(data);

            if(data["code"] = 200){
                $('#testModalContent').empty();
                $('#testModalFooter').remove();
                $('#testModalContent').html('<p class="lead"> Our experts will contact you and share the link for your FREE Assessment test. Your reference number is <span class="fw-bolder" >' + data["ref"] + '. </span>  Our experts will contact you within 24 working hours. </p><div class="text-end" id="testModalFooter"><button type="button" id="testClose" class="btn btn-success px-5" data-bs-dismiss="modal">Close</button></div>');
            } else {
                console.log('Something is wrong at assessment test form.');
            }
        })
    })

    // Contact-us
    $('#formContact').submit(function(e){
        e.preventDefault();
        var fullname = $('#contactName').val();
        var phone = $('#contactMobile').val();
        var message = $('#contactQuery').val();
        var form = 'contact';

        $.post('frontController.php', {
            fullname: fullname, 
            phone: phone, 
            message: message,
            form: form
        }).done(function(data){
            data = $.parseJSON(data);

            if(data["code"] = 200){
                $('#contactModalContent').empty();
                $('#contactModalFooter').remove();
                $('#contactModalContent').html('<p class="lead"> We have successfully recorded your query. Your reference number is <span class="fw-bolder" >' + data["ref"] + '. </span>  Our experts will contact you within 48 working hours. </p><div class="text-end" id="contactModalFooter"><button type="button" id="contactClose" class="btn btn-success px-5" data-bs-dismiss="modal">Close</button></div>');
            } else {
                console.log('Something is wrong at contact form.');
            }
        })
    })
})
