// Mentor form
$(document).ready(function(){
    $('#formMentor').submit(function(e){
    e.preventDefault();
    var bookName = $('#bookName').val();
    var bookMobile = $('#bookMobile').val();
    var bookEmail = $('#bookEmail').val();
    var bookDate = $('#bookDate').val();
    var formName = 'mentor';

    $.post('frontController.php', {
        bookName: bookName, 
        bookMobile: bookMobile, 
        bookEmail: bookEmail, 
        bookDate: bookDate,
        form: formName
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
    var testName = $('#testName').val();
    var testMobile = $('#testMobile').val();
    var testEmail = $('#testEmail').val();
    var testExam = $('#testExam').val();
    var formName = 'test';
    
    $.post('frontController.php', {
        testName: testName, 
        testMobile: testMobile, 
        testEmail: testEmail, 
        testExam: testExam,
        form: formName
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
    var contactID = $('#contactUsID').val();
    var contactMobile = $('#contactUsMobile').val();
    var contactQuery = $('#contactUsQuery').val();
    var formName = 'contact';

    $.post('frontController.php', {
        contactID: contactID, 
        contactMobile: contactMobile, 
        contactQuery: contactQuery,
        form: formName
    }).done(function(data){
            console.log('Contact-us details saved');
            console.log(data);
        })
    })
})
