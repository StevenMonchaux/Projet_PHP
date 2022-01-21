gender.onchange = function () {
    if (gender.selectedIndex === 1) {
        formCategory.style.display = 'block';
        nameExposant.style.display = 'block';
    } else {
        if (gender.selectedIndex === 2) {
            formCategory.style.display = 'none';
            nameExposant.style.display = 'none';
        }
    }
}

first_name.onchange = () => {
                              
    if (first_name.value.match(/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}/)){
        messagefirst_name.innerHTML ='<p class ="text-success">Le nom est correct</p>';

    } else {
        messagefirst_name.innerHTML = '<p class ="text-danger">Le nom est incorrect</p>';
    }
}

last_name.onchange = () => {
    if (last_name.value.match(/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}/)){
        messagelast_name.innerHTML ='<p class ="text-success">Le prénom est correct</p>';

    } else {
        messagelast_name.innerHTML = '<p class ="text-danger">Le prénom est incorrect</p>';
    }
}

phoneNumber.onchange = () => {
    if (phoneNumber.value.match(/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}/)){
        messagePhoneNumber.innerHTML ='<p class ="text-success">Le numéro de téléphone est correct</p>';

    } else {
        messagePhoneNumber.innerHTML = '<p class ="text-danger">Le numéro de téléphone est incorrect</p>';
    }
}