// Mentor form
$(document).ready(function(){
    $('#formMentor').submit(function(e){
    e.preventDefault();
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
            console.log('Booking details saved');
            console.log(data);
        })
    })
})

// Test your ability form
$(document).ready(function(){
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
            console.log('Assesment Test details saved');
            console.log(data);
        })
    })
})


// Contact-us
$(document).ready(function(){
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
            console.log('Contact-us details saved');
            console.log(data);
        })
    })
})
