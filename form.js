// Mentor form
$(document).ready(function(){
    $('#formMentor').submit(function(e){
    e.preventDefault();
    var bookName = $('#bookName').val();
    var bookMobile = $('#bookMobile').val();
    var bookEmail = $('#bookEmail').val();
    var bookDate = $('#bookDate').val();

    // var url = 'frontController.php';

    // $.post(url, {bookName:bookName, bookMobile:bookMobile, bookEmail:bookEmail, bookDate:bookDate}).done(
    //     function(data){
    //         console.log('Booking details saved');
    //         console.log(data);
    //     }
    // )
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
    
    // var url = 'frontController.php';

    // $.post(url, {testName:testName, testMobile:testMobile, testEmail:testEmail, testExam:testExam}).done(
    //     function(data){
    //         console.log('Assesment Test details saved');
    // console.log(testName);
    //     }
    // )
    })
})


// Contact-us
$(document).ready(function(){
    $('#formContact').submit(function(e){
    e.preventDefault();
    var contactID = $('#contactUsID').val();
    var contactMobile = $('#contactUsMobile').val();
    var contactQuery = $('#contactUsQuery').val();

    // var url = 'frontController.php';

    // $.post(url, {contactUsID:contactUsID, contactUsMobile:contactUsMobile, contactUsQuery:contactUsQuery}).done(
    //     function(data){
    //         console.log('Contact-us details saved');
    //         console.log(data);
    //     }
    // )
    // console.log(contactUsMobile);
    })
})
