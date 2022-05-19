
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous">

// Mentor
$(document).ready(function(){
    $('#formMentor').submit(function(e){
    e.preventDefault();
    var bookName = $('#bookName').val();
    var bookMobile = $('#bookMobile').val();
    var bookEmail = $('#bookEmail').val();
    var bookDate = $('#bookDate').val();

    // var url = $(this).attr('action');

    // $.post(url, {bookName:bookName, bookMobile:bookMobile, bookEmail:bookEmail, bookDate:bookDate}).done(
    //     function(data){
    //         console.log('Booking details saved');
    //         console.log(data);
    //     }
    // )
    })
})

// Test
$(document).ready(function(){
    $('#formTest').submit(function(e){
    e.preventDefault();
    var testName = $('#testName').val();
    var testMobile = $('#testMobile').val();
    var testEmail = $('#testEmail').val();
    var testExam = $('#testExam').val();
    // var url = $(this).attr('action');

    // $.post(url, {testName:testName, testMobile:testMobile, testEmail:testEmail, testExam:testExam}).done(
    //     function(data){
    //         console.log('Assesment Test details saved');
    console.log(testName);
    //     }
    // )
    })
})
// Contact-us
<script>
$(document).ready(function(){
    $('#formContact').submit(function(e){
    e.preventDefault();
    var contactUsID = $('#contactUsID').val();
    var contactUsMobile = $('#contactUsMobile').val();
    var contactUsQuery = $('#contactUsQuery').val();

    // var url = $(this).attr('action');

    // $.post(url, {contactUsID:contactUsID, contactUsMobile:contactUsMobile, contactUsQuery:contactUsQuery}).done(
    //     function(data){
    //         console.log('Contact-us details saved');
    //         console.log(data);
    //     }
    // )
    console.log(contactUsMobile);
    })
})
