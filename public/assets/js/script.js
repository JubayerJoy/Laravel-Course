/* =========================== typing animation ========================*/
var typed = new Typed(".typing", {
    strings:["", "Android App Developer", "Android App Developer", "App Designer", "Graphic Designer", "Freelancer"],
    typeSpeed:100,
    backSpeed:60,
    loop:true
})

/* ===========================  Send Contact Form  ========================*/

var btn = document.getElementById("sendbtn");
btn.addEventListener('click', () =>{

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
    var body = 'Name: '+ name + '<br/>Email: '+ email + '<br/>Subject: '+ subject + '<br/>Message: '+ message;

    //for alart dialog
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "mojar.gaming2020@gmail.com",
            Password : "3963403A56181D88CBDAA66E089E55E9FDFC",
            To : 'mojar.gaming2020@gmail.com',
            From : email,
            Subject : subject,
            Body : body
        }).then(
            swal("Email Send Successfully.","Thanks for Connecting with us","success")
        );



})


/*
btn.addEventListener('click', function(e){
    e.preventDefault()

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
    var body = 'Name: '+ name + '<br/>Email: '+ email + '<br/>Subject: '+ subject + '<br/>Message: '+ message;

    var mylength = name.value.length;
    alert(mylength);

   
    /*
    // for alart dialog
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "mojar.gaming2020@gmail.com",
            Password : "3963403A56181D88CBDAA66E089E55E9FDFC",
            To : 'mojar.gaming2020@gmail.com',
            From : email,
            Subject : subject,
            Body : body
        }).then(
            swal("Email Send Successfully.","Thanks for Connecting with us","success")
        );

       


        
    })

    */