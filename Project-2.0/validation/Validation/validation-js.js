const form  = document.getElementById("form");
const username  = document.getElementById("username");
const email  = document.getElementById("email");
const password1  = document.getElementById("password1");
const password2  = document.getElementById("password2");

form.addEventListener("submit", e => {
    e.preventDefault();

    validateData();
});

const setError = (element, msg) =>{

    const parent = element.parentElement;
    const errorMsg = parent.querySelector('.error')

    errorMsg.innerHTML = msg;
}

const setSuccess = (element) => {
    const parent = element.parentElement;
    const errorMsg = parent.querySelector('.error')

    errorMsg.innerHTML = '';
}

const isValidEmail = (email) => {

        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        return re.test(String(email).toLowerCase());
  };


const validateData = () => {

    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const password1Value = password1.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === ''){
        setError(username, "Name is required");
    }else{
        setSuccess(username);
    }

    if(emailValue === ''){
        setError(email, "Email is required");
    }else{
        if(!isValidEmail(emailValue)){
            setError(email, "Enter Valid Email");
        }else{
            setSuccess(email);
        }
    }

    if(password1Value === ''){
        setError(password1, "Password is required");
    }else{
        if(password1Value.length < 8){
            setError(password1, "Password have atleast 8 characters");
        }else{
            setSuccess(password1);
        }
    }

    if(password1Value !== password2Value){
        setError(password2, "Password doesnot macth");
    }else{
        setSuccess(password2);
    }
}
 