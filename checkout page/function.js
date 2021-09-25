function submitForm(){
    const radioBtn = document.querySelector('.form-check-radio-input');
    radioBtn.onclick = function(){
        if(radioBtn.value === 'same'){
            alert('same');
            console.log('same');
        }
    }
};