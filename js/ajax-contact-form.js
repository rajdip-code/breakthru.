function postContact() {
    var name = document.getElementById('name-2').value.trim();
    var nameErr = "";
    var email = document.getElementById('email-2').value.trim();
    var emailErr = "";
    var phone = document.getElementById('phone-2').value.trim();
    var phoneErr = "";
    var project = document.getElementById('project-2').value.trim();
    var projectErr = "";

    //verification of user-input
    if (!/^[a-z ,.'-]+$/i.test(name)) {
        nameErr = "No cyborg names! Enter your real one.";
        if (name.length == 0) {
            nameErr = "Name required.";
        }
    }

    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        emailErr = "Come on! Enter your real email.";
        if (email.length == 0) {
            emailErr = "Email required.";
        }
    }

    if (!/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g.test(phone)) {
        phoneErr = "Enter a valid phone number.";
        if (phone.length == 0) {
            phoneErr = "Phone required.";
        }
    }

    if (!project || project.length < 4) {
        projectErr = "Content too short!";
    }

    if (nameErr.length != 0 || phoneErr.length != 0 || emailErr.length != 0 || projectErr.length != 0) {
        document.getElementById('name-err').innerHTML = nameErr;
        document.getElementById('phone-err').innerHTML = phoneErr;
        document.getElementById('email-err').innerHTML = emailErr;
        document.getElementById('project-err').innerHTML = projectErr;
    } else {
        //document.getElementById('form-button').innerHTML = '';
        document.getElementById('name-err').innerHTML = "";
        document.getElementById('phone-err').innerHTML = "";
        document.getElementById('email-err').innerHTML = "";
        document.getElementById('project-err').innerHTML = "";
        document.getElementById('form-button').removeAttribute(onclick);

        name = encodeURI(name);
        email = encodeURI(email);
        phone = encodeURI(phone);
        project = encodeURI(project);

        var xhttp;
        if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        } else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("form-button").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "contact-form-ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name=" + name + "&email=" + email + "&phone=" + phone + "&project=" + project);

        //document.getElementById('form-button').innerHTML = 'We will get back to you ASAP! <img style="height: 20px;width: 20px;" src="assets/double-tick.png">';
    }



}